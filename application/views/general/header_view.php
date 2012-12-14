<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/default.css">
	<title><?php echo $title ?></title>
</head>
<body>
	<div id="header">
		<div class="container">
			<a href="<?php echo base_url()?>" title="Hospedaje Web"><img src="images/hw-logo.png" alt="Hospedaje Web"></a>
			<div id="header_links">
				<div id="contact">
					<ul>
						<li><a href="#"><span id="chat"></span>Chat en Vivo</a></li>
						<li><a href="#"><span id="login"></span>Entrar</a></li>
						<li><span id="phone"></span>Llama Gratis: +1-800-555-5555</li>
						<li><a href="#"><span id="mail"></span>contact@hospedajeweb.com</a></li>
					</ul>
				</div>
				<div id="nav">
					<?php $classMenu = 'class="menu_activo"'; ?>
					<ul>
						<li <?php if($section == 'inicio') echo $classMenu; ?>><a href="<?php echo base_url() ?>">Inicio</a></li>
						<li <?php if($section == 'planes') echo $classMenu; ?>><a href="<?php echo base_url() ?>planes.php">Planes</a></li>
						<li <?php if($section == 'acerca de') echo $classMenu; ?>><a href="<?php echo base_url() ?>acerca_de.php">Acerca De</a></li>
						<li <?php if($section == 'soporte') echo $classMenu; ?>><a href="<?php echo base_url() ?>soporte.php">Soporte</a></li>
						<li <?php if($section == 'servicios') echo $classMenu; ?>><a href="<?php echo base_url() ?>servicios.php">Servicios</a></li>
						<li <?php if($section == 'blog') echo $classMenu; ?>><a href="<?php echo base_url() ?>blog.php">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>