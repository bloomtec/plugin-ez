<a class="logo" href="/admin" alt="inicio"><?php echo $this -> Html -> image('logo_cms.png'); ?></a>
<ul id="AdminMenu" class="sf-menu">
	<!-- USUARIOS -->
	<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'UserControl/Users', 'admin_index')))) : ?>
	<li>
		<?php echo $this -> Html -> link('Usuarios', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'index')); ?>
		<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'UserControl/Users', 'admin_add')))) : ?>
		<ul>
			<li>
				<?php echo $this -> Html -> link('Crear Usuario', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'add')); ?>
			</li>
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	<!-- CATALOGO -->
	<?php
		if(
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Categories', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Colors', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'ProductSizes', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Products', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Inventories', 'admin_index')))
		) :
	?>
	<li>		
		<a>Catálogo</a>
		<ul>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Categories', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Categorías', array('plugin' => false, 'controller' => 'categories', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Categories', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Nueva', array('plugin' => false, 'controller' => 'categories', 'action' => 'add')); ?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Colors', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Colores', array('plugin' => false, 'controller' => 'colors', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Colors', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'colors', 'action' => 'add')); ?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'ProductSizes', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Tallas', array('plugin' => false, 'controller' => 'product_sizes', 'action' => 'index'));	?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'ProductSizes', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Nueva', array('plugin' => false, 'controller' => 'product_sizes', 'action' => 'add')); ?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Products', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Productos', array('plugin' => false, 'controller' => 'products', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Products', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'products', 'action' => 'add')); ?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Inventories', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Inventario', array('plugin' => false, 'controller' => 'inventories', 'action' => 'index')); ?>
			</li>
			<?php endif; ?>
		</ul>
	</li>
	<?php endif; ?>
	<!-- PROMOCIONES Y CUPONES -->
	<?php
		if(
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Promotions', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'CouponBatches', 'admin_index')))
		) :
	?>
	<li>
		<a>Promociones</a>
		<ul>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Promotions', 'admin_index')))) : ?>
			<li><?php echo $this -> Html -> link('Sitio Web', array('plugin' => false, 'controller' => 'promotions', 'action' => 'index')); ?></li>
			<?php endif; ?>
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'CouponBatches', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Cupones', array('plugin' => false, 'controller' => 'coupon_batches', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'CouponBatches', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'coupon_batches', 'action' => 'add')); ?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
		</ul>
	</li>
	<?php endif; ?>
	<!-- ORDENES -->
	<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Orders', 'admin_index')))) : ?>
	<li>
		<?php echo $this -> Html -> link('Ordenes', array('plugin' => false, 'controller' => 'orders', 'action' => 'index')); ?>
		<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Configs', 'admin_edit')))) : ?>
		<ul>
			<li>
				<?php echo $this -> Html -> link('Costo De Envío', array('plugin' => false, 'controller' => 'configs', 'action' => 'edit')); ?>
			</li>
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	<!-- SONDEOS -->
	<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Surveys', 'admin_index')))) : ?>
	<li>
		<?php echo $this -> Html -> link('Sondeos', array('plugin' => false, 'controller' => 'surveys', 'action' => 'index')); ?>
		<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Surveys', 'admin_add')))) : ?>
		<ul><li><?php echo $this -> Html -> link('Crear Sondeo', array('plugin' => false, 'controller' => 'surveys', 'action' => 'add')); ?></li></ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	<!-- NAVEGACIÓN -->
	<?php
		if(
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Pages', 'admin_index'))) ||
			$this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'MenuItems', 'admin_index')))
		) :
	?>
	<li>
		<a>Navegación</a>
		<ul>
			<!-- PÁGiNAS -->
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Pages', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Páginas', array('plugin' => false, 'controller' => 'pages', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Pages', 'admin_add')))) : ?>
				<ul><li><?php echo $this -> Html -> link('Crear Página', array('plugin' => false, 'controller' => 'pages', 'action' => 'add'));	?></li></ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<!-- MENÚS -->
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Menus', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Menús', array('plugin' => false, 'controller' => 'menus', 'action' => 'index')); ?>
				<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'MenuItems', 'admin_index')))) : ?>
				<ul>
					<!-- ÍTEMS DE MENÚ -->
					<li><?php echo $this -> Html -> link('Ítems De Menú', array('plugin' => false, 'controller' => 'menu_items', 'action' => 'index'));	?></li>
				</ul>
				<?php endif; ?>
			</li>
			<?php endif; ?>
			<!-- BANNERS -->
			<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'Banners', 'admin_index')))) : ?>
			<li>
				<?php echo $this -> Html -> link('Banners', array('plugin' => false, 'controller' => 'banners', 'action' => 'index')); ?>
			</li>
			<?php endif; ?>
		</ul>
	</li>
	<?php endif; ?>
	<!-- CONFIGURACIÓN SERVICIO CORREO -->
	<?php if($this -> requestAction('/user_control/users/verifyUserAccess/' , array('ruta' => array('controllers', 'UserControl/UserMailConfigs', 'admin_edit')))) : ?>
	<li><?php echo $this -> Html -> link('Servicio Correo', array('plugin' => 'user_control', 'controller' => 'user_mail_configs', 'action' => 'edit')); ?></li>
	<?php endif; ?>
	<!-- LOGOUT -->
	<li>
		<?php
		echo $this -> Html -> link('Salir', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'logout', 'admin' => true));
		?>
	</li>
	<div style="clear:both;"></div>
</ul>
<script>
	$(document).ready(function() {
		$("ul.sf-menu").superfish();
	}); 
</script>