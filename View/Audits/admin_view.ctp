
<div class="auditorias view">
<h2><?php  echo __('Auditorias');?></h2>
		<label><?php echo __('Usuario'); ?></label>
		<h3>
			<?php echo $this->Html->link($audit['User']['name']."-".$audit['User']['lastname'], array('controller' => 'users', 'action' => 'view', $audit['User']['id'])); ?>
			&nbsp;
		</h3>
		<label><?php echo __('Nombre Modelo'); ?></label>
		<h3>
			<?php echo h($audit['Audit']['model']); ?>
			&nbsp;
		</h3>
		<label><?php echo __('Llave Foranea'); ?></label>
		<h3>
			<?php echo h($audit['Audit']['model_id']); ?>
			&nbsp;
		</h3>
		<label><?php echo __('Datos Previos'); ?></label>
		<h3>
			<?php echo ($audit['Audit']['previus_data']); ?>
			&nbsp;
		</h3>
		<label><?php echo __('Datos Nuevos'); ?></label>
		<h3>
			<?php echo ($audit['Audit']['current_data']); ?>
			&nbsp;
		</h3>
		<label><?php echo __('Acción'); ?></label>
		<h3>
			<?php echo $audit['Audit']['action'] ?>
		</h3>
		
		<div style='clear:both;'></div>
</div>
<div class="actions ">
	<ul>
		<li><?php echo $this->Html->link(__('Volver Auditorias'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>