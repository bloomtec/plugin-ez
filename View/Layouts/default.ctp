<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title> <?php echo __("EZ CMS, El CMS mas fácil de usar!!!") ?>:
			<?php echo $title_for_layout; ?> </title>
		<?php
			echo $this -> Html -> meta('icon');
			
			echo $this -> Html -> css('reset');
			echo $this -> Html -> css('ez');
			echo $this -> Html -> css('ez-styles');
			echo $this -> Html -> css('superfish/superfish');
			echo $this -> Html -> css('uploadify');
			
			echo $this -> Html -> script('jquery.tools.min');
			echo $this -> Html -> script('jquery.uploadify.min');
			echo $this -> Html -> script('upload');
			echo $this -> Html -> script('bjs/bjs');
			echo $this -> Html -> script('ckeditor/ckeditor');
			echo $this -> Html -> script('ckeditor/adapters/jquery');
			echo $this -> Html -> script('ez');
			echo $this -> Html -> script('superfish/hoverIntent');
			echo $this -> Html -> script('superfish/superfish');
			
			echo $this -> fetch('meta');
			echo $this -> fetch('css');
			echo $this -> fetch('script');
		?>
	</head>
	<body id="ez" class="default">
		<div id="container">
			<div id="header">
				<?php echo $this -> element('Ez.header'); ?>
				<div style="clear:both;"></div>
			</div>
			<div id="content">

				<?php echo $this -> Session -> flash(); ?>

				<?php echo $this -> fetch('content'); ?>
			</div>

		</div>
		<div id="footer">
			<?php echo $this -> element('Ez.footer'); ?>
		</div>
		<?php echo $this -> element('sql_dump'); ?>
	</body>
</html>