<?php echo $this->element('header') ?>
            
                <?php echo $content_for_layout ?>
                
<?php echo $this->element('footer', array( 'realizacao' => 'Universidade Federal de Ceará - UFC', 'apoio' => 'PET - Programa de Educação Tutorial' ), array( 'cache' => true )) ?>               