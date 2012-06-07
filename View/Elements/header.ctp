<ul>
	<!-- USUARIOS -->
	<li>
		<?php
		echo $this -> Html -> link('Usuarios', array('plugin' => 'user_control', 'controller' => 'users', 'action' => 'index'));
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
	<!-- CONFIGURACIÓN SERVICIO CORREO -->
	<li>
		<?php
		echo $this -> Html -> link('Servicio Correo', array('plugin' => 'user_control', 'controller' => 'user_mail_configs', 'action' => 'edit'));
		?>
	</li>
</ul>