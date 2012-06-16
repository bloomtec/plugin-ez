<?php echo $this -> Html -> css('Ez.superfish/superfish'); ?>
<?php echo $this -> Html -> script('Ez.superfish/hoverIntent.js'); ?>
<?php echo $this -> Html -> script('Ez.superfish/superfish.js'); ?>
<ul id="AdminMenu" class="sf-menu">
	<!-- USUARIOS -->
	<li>
		<?php
		echo $this -> Html -> link('Usuarios', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'index'));
		?>
		<!-- <ul>
			<li>
				<?php
				echo $this -> Html -> link('Crear Usuario', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'add'));
				?>
			</li>
		</ul> -->
	</li>
	<!-- CATALOGO -->
	<li>
		<a>Catálogo</a>
		<ul>
			<li>
				<?php
				echo $this -> Html -> link('Categorías', array('plugin' => false, 'controller' => 'categories', 'action' => 'index'));
				?>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Tallas', array('plugin' => false, 'controller' => 'product_sizes', 'action' => 'index'));
				?>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Productos', array('plugin' => false, 'controller' => 'products', 'action' => 'index'));
				?>
			</li>
			<li>
				<?php
				echo $this -> Html -> link('Galerias', array('plugin' => false, 'controller' => 'galleries', 'action' => 'index'));
				?>
				<ul>
					<li>
						<?php
						echo $this -> Html -> link('Imagenes', array('plugin' => false, 'controller' => 'images', 'action' => 'index'));
						?>
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
	<!-- NAVEGACIÓN -->
	<li>
		<a>Navegación</a>
		<ul>
			<!-- PÁGiNAS -->
			<li>
				<?php
				echo $this -> Html -> link('Páginas', array('plugin' => false, 'controller' => 'pages', 'action' => 'index'));
				?>
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
</ul>
<script>
	$(document).ready(function() {
		$("ul.sf-menu").superfish();
	}); 
</script>