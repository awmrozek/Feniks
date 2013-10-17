<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<?php echo $html->css("style"); ?>
	<title><?php echo $title_for_layout?></title>
	<?php echo $scripts_for_layout ?>
</head>
<body>

<div id="world">
	<div id="page">
		<div id="container">
		<div id="header">
			<?php echo $this->Session->flash(); ?>
		</div>
	
		<?php echo $content_for_layout ?>
			
		</div>
	</div>

	<div id="footer">
		Taiga <b>Beta 2</b>, Amrozek 2011.
	</div>
</div>

</body>
</html>
