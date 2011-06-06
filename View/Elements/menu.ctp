<nav id="menu" role="navigation" class="grid_12">
		<ul>
			<li><?php echo $this->Html->link('Página Inicial', '/'); ?></li>
			<!-- <li><?php echo $this->Html->link('Inscreva-se!', array('controller' => 'alunos', 'action' => 'cadastro')); ?></li> -->
			<li><?php echo $this->Html->link('O Curso', array('controller' => 'pages', 'action' => 'display', 'curso')); ?></li>
			<li><?php echo $this->Html->link('Turmas', array('controller' => 'pages', 'action' => 'display', 'cakephp')); ?></li>
			<li><?php echo $this->Html->link('Depoimentos', array('controller' => 'feedbacks', 'action' => 'index')); ?></li>
		</ul>
	</nav>
