<?php
/**
 * ------------------------------------------------------------------------
 * JA T3v2 System Plugin for J25 & J30
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php $this->genBlockBegin ($block) ?>   
   
    <div class="ja-copyright">
		<jdoc:include type="modules" name="footer" />
    </div>

    <?php if($this->countModules('footnav')) : ?>
	<div class="ja-footnav">
		<jdoc:include type="modules" name="footnav" />
	</div>
	<?php endif; ?>
