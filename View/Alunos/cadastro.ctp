<h3>Inscreva-se para a próxima turma!</h3>
<?php echo $this->Form->create('Aluno'); ?>
<?php echo $this->Form->input('nome', array('required')); ?>
<?php echo $this->Form->input('sobrenome', array('required')); ?>
<?php echo $this->Form->input('email', array('type' => 'email', 'required')); ?>
<?php echo $this->Form->input('telefone', array('type' => 'tel')); ?>
<?php echo $this->Form->input('senha', array('type' => 'password', 'required')); ?>
<?php echo $this->Form->submit('Enviar'); ?>
<?php echo $this->Form->end(); ?>