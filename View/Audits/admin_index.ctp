<div class="auditorias index">
	<h2><?php echo __('Auditorias');?></h2>
	<?php /*?>
	<div class="search">
		<input type="text" />
		<input type="button" class="submit search-generic" value="Buscar" />
	</div>
	<?php */?>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('user_id','User');?></th>
		<th><?php echo $this->Paginator->sort('model','Tabla -> ID');?></th>
	
		
		<th>Acción</th>
		<th>Fecha</th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($audits as $audit): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($audit['User']['name'].'-'.$audit['User']['lastname'], array('controller' => 'users', 'action' => 'view', $audit['User']['id'])); ?>
		</td>
		<td><?php echo $audit['Audit']['model'] .' -> '.$audit['Audit']['model_id']; ?>&nbsp;</td>

		<td>
			<?php echo $audit['Audit']['action'] ?>
		</td>
		<td>
			<?php echo $audit['Audit']['created'];?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $audit['Audit']['id']),array('class'=>'view','title'=>'Ver')); ?>
				
		</td>
	</tr>
<?php endforeach; ?>
	</table>


	<div class="paging">
	<!--<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, mostrando {:current} registro de {:count} totales, comenzando en el registro record {:start}, hasta el registro {:end}')
	));
	?>	</p>-->
	<?php
		echo $this->Paginator->first('<< ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		echo $this->Paginator->last('>> ', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
