<?php
/*
 * ------------------------------------------------------------------------
 * Yt FrameWork for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2009 - 2012 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
 * ------------------------------------------------------------------------
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc = JFactory::getDocument();
$doc->addScript($yt->templateurl().'/js/jquery.isotope.min.js');
$doc->addScript($yt->templateurl().'/js/jquery.cookies.2.2.0.min.js');
?>

<script type="text/javascript">
//	<![CDATA[
$jsmart(function($){
	$(window).load(function() {
		if($('#content_listing')){
			var $container = $('#content_listing');

			var $container_table_search = $('.search #content_listing.layout-table');
			var h_search_item = $container_table_search.find('.item').height();
			$container_table_search.find('.item .item-inner').css('height',h_search_item);
			// Sort by
			$container.isotope({
				getSortData : {
					//vm
					vm_price : function ( $elem ) {
						return $elem.find('.PricesalesPrice').text();
					},
					vm_title : function ( $elem ) {
						return $elem.find('.vm_title').text();
					},
					vm_category_name : function ( $elem ) {
						return $elem.find('.vm_category_name').text();
					},
					vm_mf_name : function ( $elem ) {
						return $elem.find('.vm_mf_name').text();
					},
					vm_product_s_desc : function ( $elem ) {
						return $elem.find('.vm_product_s_desc').text();
					},
					vm_product_in_stock : function ( $elem ) {
						return parseInt($elem.find('.vm_product_in_stock').text(), 10);
					},
					vm_product_sku : function ( $elem ) {
						return $elem.find('.vm_product_sku').text();
					},
					// content
					ct_title : function ( $elem ) {
						return $elem.find('.ct_title').text();
					},
					ct_author : function ( $elem ) {
						return $elem.find('.ct_author').text();
					},
					ct_featured : function ( $elem ) {
						return parseInt($elem.find('.ct_featured').text(), 10);
					},
					ct_hits : function ( $elem ) {
						return parseInt($elem.find('.ct_hits').text(), 10);
					}
				}
			});
			
			var $optionSets = $('#option_com .option-set'),
	            $optionLinks = $optionSets.find('a');

			$optionLinks.click(function(){
				var $this = $(this);
				// don't proceed if already selected
				if ( $this.hasClass('selected') ) {
				  return false;
				}
				var $optionSet = $this.parents('.option-set');
				$optionSet.find('.selected').removeClass('selected');
				$this.addClass('selected');
				
				// make option object dynamically, i.e. { filter: '.my-filter-class' }
				var options = {},
					key = $optionSet.attr('data-option-key'),
					value = $this.attr('data-option-value');
				// parse 'false' as false boolean
				value = value === 'false' ? false : value;
				options[ key ] = value;
				if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
				  // changes in layout modes need extra logic
				  changeLayoutMode( $this, options )
				} else {
				  // otherwise, apply new options
				  $container.isotope( options );
				}
				
				return false;
			});
			// Active order
			var $SortOrderLink = $('#sort-by a');
			var $active_order = $('#option_com .sort_by .sort-style');
			$SortOrderLink.bind('click', function(){
				$active_order.html($(this).text());
			});
			$('#option_com .sort_by').hover(
				function() { $(this).find('#sort-by').css('display','')},
				function() { $(this).find('#sort-by').css('display','none')}
			);
			$('#option_com .sort-style').bind('click', function(){
				$('#sort-by').css('display','');
			});
			$SortOrderLink.bind('click', function(){ $('#sort-by').css('display','none'); });
			// Sort ascending
			var $orderad = $('#option_com .sort_by .sort-ad')
			$orderad.toggle(
				function(){
					$active_order.removeClass('ascending');
					$active_order.addClass('descending');
					$container.isotope({
					  sortAscending : false
					});
				},
				function(){
					$active_order.removeClass('descending');
					$active_order.addClass('ascending');
					$container.isotope({
					  sortAscending : true
					});
				}
			);
			// Layout type
			$layout_type_link = $('#option_com .layout-type a');
			$('#option_com .layout-type a.sort_grid').addClass('active');
			$container.addClass('layout-table');
			$container.isotope('reLayout');
			var f_layout = function (){
				var $this = $(this);
				$('#option_com .layout-type a').removeClass('active');
				$this.addClass('active');
				if ($this.hasClass('sort_listing')){
					$container.removeClass('layout-table');
					$container.addClass('layout-listing');
						$container_table_search.find('.item .item-inner').css('height','auto');
					$container.isotope('reLayout');
					$.cookies.set('layout_container','layout-listing')
				} 
				if ($this.hasClass('sort_grid')){
					$container.removeClass('layout-listing');
					$container.addClass('layout-table');
						$container_table_search.find('.item .item-inner').css('height',h_search_item);
					$container.isotope('reLayout');
					$.cookies.set('layout_container','layout-table')
				}
			}
			$layout_type_link.bind('click', f_layout);
			
			var layout_cookies = $.cookies.get('layout_container');
			if (layout_cookies == 'layout-listing'){
				$('#option_com .layout-type a').removeClass('active');
				$('#option_com .layout-type a.sort_listing').addClass('active');
				$container.removeClass('layout-table');
				$container.addClass('layout-listing');
					$container_table_search.find('.item .item-inner').css('height','auto');
				$container.isotope('reLayout');
			}

			// reLayout
			$(window).resize(function(){
				$container.isotope('reLayout');
				// Keep main menu
				if($(".group-main-top") && $('#content_main')){
					offsetleft = $("#content_main").offset().left;
					$(".group-main-top").css('left', offsetleft+'px');
					$("#option_com").css('left', offsetleft+15+'px');
				}
			});
		}
	});
	$(document).ready(function() {
		// Keep main menu
		if($(".group-main-top") && $('#content_main')){
			offsetleft = $("#content_main").offset().left;
			$(".group-main-top").css('left', offsetleft+'px');
			$("#option_com").css('left', offsetleft+15+'px');
		}
	});
});
//	]]>
</script>
