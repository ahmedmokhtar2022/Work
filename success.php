<?php  if (count($success) > 0) : ?>

  <div class="successful"><div class="icon-upload"><i class="fas fa-sync fa-spin"></i></div>
  	<?php foreach ($success as $successful) : ?>
  	  <p><?php echo $successful ?></p>
  	<?php endforeach ?>
  </div>
  

<?php  endif ?>
