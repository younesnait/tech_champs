
<?php  
$this->Session->setFlash(__('Bonjour '. $this->Auth->user('nom').' '.$this->Auth->user('prenom')));
?>
<div class="center">
<p>Il est <?php  echo date('H:i',time());   ?> </p>
<p>cliquer sur le bouton pour valider votre arrivée</p>
<?php
 echo $this->Form->submit('Pointer', array('class' => 'form-submit',  'title' => 'Cliquer pour pointer l arrivée') );
?>

</div>

