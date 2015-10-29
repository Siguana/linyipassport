<?php
// mod basic
function modChrome_ytmod($module, &$params, &$attribs){ ?>
	<?php
	$badge = preg_match ('/badge/', $params->get('moduleclass_sfx')) ? "<span class=\"badge\">badge</span>\n" : "";
	$corner = preg_match ('/corner/', $params->get('moduleclass_sfx')) ? "<span class=\"corner\">corner</span>\n" : "";
	$class = preg_match ('/grid/', $params->get('moduleclass_sfx')) ?' grid masonry-brick':'';
	$class .= preg_match ('/stamp/', $params->get('moduleclass_sfx')) ?' corner-stamp':'';
	?>
    <div class="moduletable<?php echo $params->get('moduleclass_sfx').$class; ?>" id="Mod<?php echo $module->id; ?>">
    	<div class="mod-inner clearfix">
    		<div class="mod-inner1">
				<?php if ($module->showtitle != 0) : ?>           
	            <h3 class=""><?php echo $module->title; ?><?php echo $badge; ?></h3>            
	            <?php endif; ?>
	            
	            <div class="yt-mod-mainbox clearfix">
	                <div class="yt-mod-mainbox-in clearfix">
	                    <?php echo $module->content; ?>
	                </div>
	            </div>
	            <?php echo $corner; ?>
        	</div>
		</div>
    </div>
<?php
}
// mod for case: add first word
function modChrome_ytmod_addfirstword($module, &$params, &$attribs){ ?>
	<?php
	$badge = preg_match ('/badge/', $params->get('moduleclass_sfx')) ? "<span class=\"badge\">badge</span>\n" : "";
	$corner = preg_match ('/corner/', $params->get('moduleclass_sfx')) ? "<span class=\"corner\">corner</span>\n" : "";
	$class = preg_match ('/grid/', $params->get('moduleclass_sfx')) ?' grid masonry-brick':'';
	$class .= preg_match ('/stamp/', $params->get('moduleclass_sfx')) ?' corner-stamp':'';
	?>
	<?php	
		if ($module->showtitle != 0){		
			$first_word = explode(' ', $module->title);
			$first_word = $first_word[0];
			if(count(explode(' ', $module->title)) > 1){
				$last_text = substr($module->title, strpos($module->title,' '));
			}
			else{
				$last_text = '';
			}
		}
    ?>
    <div class="moduletable<?php echo $params->get('moduleclass_sfx').$class; ?>" id="Mod<?php echo $module->id; ?>">
    	<div class="mod-inner">
    		<div class="mod-inner1">
		        <?php if ($module->showtitle != 0) : ?>           
		        <h3>
		        	<span class="first_word"><?php echo $first_word; ?></span>
		            <?php echo $last_text; ?>
		            <?php echo $badge; ?>
		        </h3>            
		        <?php endif; ?>
		        
		        <div class="yt-mod-mainbox clearfix">
		            <?php echo $module->content; ?>
		        </div>
			</div>
    	</div>
    </div>
 
<?php 
}
// mod for case: use box for content module
function modChrome_ytmodbox($module, &$params, &$attribs){ ?>
	<?php
	$badge = preg_match ('/badge/', $params->get('moduleclass_sfx')) ? "<span class=\"badge\">badge</span>\n" : "";
	?>
    <div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>" id="Mod<?php echo $module->id; ?>">
        <?php if ($module->showtitle != 0) : ?>           
        <h3 class=""><?php echo $module->title; ?><?php echo $badge; ?></h3>            
        <?php endif; ?>
        <div class="yt-mod-tl">
            <div class="yt-mod-tr">	
                <div class="yt-mod-tm"></div>
            </div>
        </div> 
        <div class="yt-main-box">
            <div class="yt-main-box-inc clearfix">
            <?php echo $module->content; ?>
            </div>
        </div>
        <div class="yt-mod-bl">
            <div class="yt-mod-br">	
                <div class="yt-mod-bm">
                </div>
            </div>
        </div> 
    </div>
<?php
}

?>
