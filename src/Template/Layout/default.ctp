<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

/**
 * Default layout.
 *
 * This layout is used for rendering every page of content but
 * site's front page (a.k.a. index).
 *
 * @author Christopher Castro <chris@quickapps.es>
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->element('System.theme_head', ['bootstrap' => 'css,js']); ?>
	</head>
	<body class="default">
		<div class="container">
			<?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>