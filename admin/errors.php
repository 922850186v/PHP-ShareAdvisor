<?php  if (count($errors) > 0) : ?>
  <div class="errmsg">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

<?php
    if(!empty($success)){
    echo '<div class="success">';
    foreach ($success as $success);
    echo $success;
}
?>