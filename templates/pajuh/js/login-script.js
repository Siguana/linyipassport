var boxes = [];
var boxoverlay = null;
showBox = function (box,focusobj, caller, e) {
	//Add overlay
	if (!boxoverlay) {
		boxoverlay = new Element ('div', {id:"box-overlay"}).injectBefore ($(box));
		boxoverlay.setStyle ('opacity', 0.01);
		boxoverlay.addEvent ('click', function (e) {
			boxes.each(function(box){
				if (box.status=='show') {
					box.status = 'hide';
					var fx = new Fx.Tween (box);
					fx.pause();
					fx.start ('opacity',box.getStyle('opacity'), 0);
					if (box._caller) box._caller.removeClass ('show');
				}
			},this);
			boxoverlay.setStyle ('display', 'none');
		});
	}
	
	caller.blur();
	//new Event(e).stop ();
	box=$(box);
	if (!box) return;
	if ($(caller)) box._caller = $(caller);
	if (!boxes.contains (box)) {
		boxes.include (box);
		//box.addEvent ('click', function (e) {/*new Event(e).stop ();*/});
	}
	
	if (box.getStyle('display') == 'none') {
		box.setStyles({
			display: 'block',
			opacity: 0
		});
	}
	if (box.status == 'show') {
		//hide
		box.status = 'hide';
		var fx = new Fx.Tween (box);
		fx.pause();
		fx.start ('display',box.setStyle('display', 'none'));
		if (box._caller) box._caller.removeClass ('show');
		boxoverlay.setStyle ('display', 'none');
	} else {
		boxes.each(function(box1){
			if (box1!=box && box1.status=='show') {
				box1.status = 'hide';
				var fx = new Fx.Tween (box1);
				fx.pause();
				fx.start ('opacity',box1.getStyle('opacity'), 0);
				if (box1._caller) box1._caller.removeClass ('show');
			}
		},this);
		box.status = 'show';
		var fx = new Fx.Tween (box,{onComplete:function(){if($(focusobj))$(focusobj).focus();}});
		fx.pause();
		fx.start ('opacity',box.getStyle('opacity'), 1);
		
		if (box._caller) box._caller.addClass ('show');
		boxoverlay.setStyle ('display', 'block');
	}
}

window.addEvent('load', function(){
	// Pop Up Effect
	if(document.id('pop-up-vmcart')) {
		var popup_overlay = document.id('pop-up-overlay');
		popup_overlay.setStyles({'display': 'block', 'opacity': '0'});
		popup_overlay.fade('out');

		var opened_popup = null;
		var popup_cart = null;
		var popup_cart_h = null;
		var popup_cart_fx = null;
		
		if(document.id('pop-up-vmcart')) {
			popup_cart = document.id('pop-up-vmcart');
			popup_cart.setStyle('display', 'block');
			popup_cart_h = popup_cart.getElement('.pop-up-wrapper').getSize().y;
			popup_cart_fx = new Fx.Morph(popup_cart, {duration:50, transition: Fx.Transitions.Circ.easeInOut}).set({'opacity': 0, 'height': 0 }); 
			
		if(document.id('mycart-button')) {
			popup_cart = document.id('pop-up-vmcart');
			popup_cart_fx = new Fx.Morph(popup_cart, {duration:200, transition: Fx.Transitions.Circ.easeInOut}).set({'opacity': 0, 'height': 0, 'margin-top':0}); 
			document.id('mycart-button').addEvent('click', function(e) {
				new Event(e).stop();
				popup_overlay.fade(0.45);
				popup_cart.setStyle('display', 'block');
				popup_cart_h = popup_cart.getElement('.pop-up-wrapper').getSize().y;
				popup_cart_fx.start({'opacity':1, 'margin-top': -popup_cart_h / 2, 'height': popup_cart_h});
				opened_popup = 'cart';
			});
		}
		}
		
		popup_overlay.addEvent('click', function() {
			if(opened_popup == 'cart')	{
				popup_overlay.fade('out');
				popup_cart_fx.start({
					'opacity' : 0,
					'height' : 0
				});
			}	
		});
	}	
	// Checking Cart Items
	if(document.id('pop-up-vmcart')) {
		var value = $$('.total_products');
		if(value[0]) {
			var numb = value.get('text').toString().match(/\d{1,}/g);
			document.id('mycart-button').getElement('strong').innerHTML  = '';
			document.id('mycart-button').getElement('strong').innerHTML  = (numb != null) ? numb[0] : 0;
		}
		
		(function() {
			var value = $$('.total_products');
			if(value[0]) {
				var numb = value.get('text').toString().match(/\d{1,}/g);
				document.id('mycart-button').getElement('strong').innerHTML  = '';
				document.id('mycart-button').getElement('strong').innerHTML  = (numb != null) ? numb[0] : 0;
			}
		}).periodical(1000);
	}

});

