<?php echo $this->Html->tag('h2', 'Inscrições'); ?>

<?php echo $this->Form->create('Inscricoes', array('action' => 'inscrever')) ?>
<?php echo $this->Form->input('Inscricao.nome', array('label'=>'Nome')) ?>
<?php echo $this->Form->input('Inscricao.email', array('label'=>'E-mail')) ?>
<?php echo $this->Form->input('Inscricao.telefone', array('label'=>'Telefone')) ?>
<?php echo $this->Form->input('Inscricao.endereco', array('label'=>'Endereço')) ?>
<?php echo $this->Form->submit('OK', array('div' => false, 'class' => 'submit')) ?>
<?php echo $this->Form->end() ?>