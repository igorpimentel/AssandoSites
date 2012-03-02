			</div>
            <div id="rightcolumn">
            	<?php echo $this->Html->link( $this->Html->image("banners/si.jpg", array("alt" => "Sistemas de Informação - UFC")), "http://www.si.ufc.br", array('escape' => false) ); ?>
            	<?php echo $this->Html->link( $this->Html->image("banners/ufc.jpg", array("alt" => "UFC")), "http://www.ufc.br", array('escape' => false) ); ?>
            </div>
        </div>
        <div id="footer">
            <p><strong>Realização:</strong> <?php echo $realizacao ?></p>
            <p><strong>Apoio:</strong> <?php echo $apoio ?></p>
            <p><?php echo $this->Html->link('Créditos', '/creditos', array('class' => 'highlight')); ?></p>
        </div>
    </div>    
  </body>
</html>