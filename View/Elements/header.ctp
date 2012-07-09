<a class="logo" href="/" alt="inicio">
<?php echo $this -> Html -> image('logo_cms.png');?>
</a>
<ul id="AdminMenu" class="sf-menu">
	<!-- USUARIOS -->
	<li>
		<?php
		echo $this -> Html -> link('Usuarios', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'index'));
		?>
		<ul>
			<li>
				<?php
				echo $this -> Html -> link('Crear Usuario', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'add'));
				?>
			</li>
		</ul>
	</li>
	<!-- CATALOGO -->
	<li>
		<a>Catálogo</a>
		<ul>
			<li>
				<?php
				echo $this -> Html -> link('Categorías', array('plugin' => false, 'controller' => 'categories', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php echo $this -> Html -> link('Crear Nueva', array('plugin' => false, 'controller' => 'categories', 'action' => 'add')); ?>
					</li>
				</ul>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Colores', array('plugin' => false, 'controller' => 'colors', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'colors', 'action' => 'add')); ?>
					</li>
				</ul>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Tallas', array('plugin' => false, 'controller' => 'product_sizes', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php echo $this -> Html -> link('Crear Nueva', array('plugin' => false, 'controller' => 'product_sizes', 'action' => 'add')); ?>
					</li>
				</ul>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Productos', array('plugin' => false, 'controller' => 'products', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'products', 'action' => 'add')); ?>
					</li>
				</ul>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Inventario', array('plugin' => false, 'controller' => 'inventories', 'action' => 'index'));
				?>
			</li>
		</ul>
	</li>
	<!-- CUPONES -->
	<li>
		<?php
		echo $this -> Html -> link('Cupones', array('plugin' => false, 'controller' => 'coupon_batches', 'action' => 'index'));
		?>
		<ul>
			<li>
				<?php echo $this -> Html -> link('Crear Nuevo', array('plugin' => false, 'controller' => 'coupon_batches', 'action' => 'add')); ?>
			</li>
		</ul>
	</li>
	<!-- ORDENES -->
	<li>
		<?php
		echo $this -> Html -> link('Ordenes', array('plugin' => false, 'controller' => 'orders', 'action' => 'index'));
		?>
	</li>
	<!-- SONDEOS -->
	<li>
		<?php
		echo $this -> Html -> link('Sondeos', array('plugin' => false, 'controller' => 'surveys', 'action' => 'index'));
		?>
		<ul>
			<li>
				<?php
				echo $this -> Html -> link('Crear Sondeo', array('plugin' => false, 'controller' => 'surveys', 'action' => 'add'));
				?>
			</li>
		</ul>
	</li>
	<!-- NAVEGACIÓN -->
	<li>
		<a>Navegación</a>
		<ul>
			<!-- PÁGiNAS -->
			<li>
				<?php
				echo $this -> Html -> link('Páginas', array('plugin' => false, 'controller' => 'pages', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php
						echo $this -> Html -> link('Crear Página', array('plugin' => false, 'controller' => 'pages', 'action' => 'add'));
						?>
					</li>
				</ul>
			</li>
			<!-- MENÚS -->
			<li>
				<?php
				echo $this -> Html -> link('Menús', array('plugin' => false, 'controller' => 'menus', 'action' => 'index'));
				?>
				<ul>
					<!-- ÍTEMS DE MENÚ -->
					<li>
						<?php
						echo $this -> Html -> link('Ítems De Menú', array('plugin' => false, 'controller' => 'menu_items', 'action' => 'index'));
						?>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<!-- CONFIGURACIÓN SERVICIO CORREO -->
	<li>
		<?php
		echo $this -> Html -> link('Servicio Correo', array('plugin' => 'user_control', 'controller' => 'user_mail_configs', 'action' => 'edit'));
		?>
	</li>
	<!-- LOGOUT -->
	<li>
		<?php
		echo $this -> Html -> link('Cerrar Sesión', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'logout', 'admin' => true));
		?>
	</li>
	<div style="clear:both;"></div>
</ul>
<script>
	$(document).ready(function() {
		$("ul.sf-menu").superfish();
	}); 
</script>