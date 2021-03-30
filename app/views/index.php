<?php
   
   require APPROOT . '/views/includes/header.php';
 

?>


<div class="mt-5">
<?php if(isset($_SESSION['user_id'])) : ?>
   <br><br>
   <h3>Hi! <?php echo $_SESSION['username']?>, welcome to Patricia</h3>
   <?php else : ?>
      <br><br>
<h3>Welcome to Patricia, please sign up</h3>
<?php endif; ?>
</div>


<?php
   require APPROOT . '/views/includes/footer.php';
?>
