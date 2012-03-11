<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>   
    <title><?php echo $title_for_layout ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <?php echo $this->Html->css('layout') ?>
  </head>
  <body>
    <div id="wrap">
        <div id="header">
            <h1><?php echo $this->Html->link('WTISC - Workshop de Tecnologia da Informação do Sertão Central', '/'); ?></h1>
        </div>
        <div id="menu">
            <ul>
                <li><?php echo $this->Html->link('o evento', '/o-evento'); ?></li>
                <li><?php echo $this->Html->link('local', '/o-evento/local'); ?></li>
                <li><?php echo $this->Html->link('inscrições', array('controller' => 'inscricoes', 'action' => 'inscrever')); ?></li>
            </ul>
        </div>
        <div id="content">
            <div id="maincontent">