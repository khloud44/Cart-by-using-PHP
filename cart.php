<?php require('inc/head.php')?>
<?php require('inc/nav.php') ?>


    <h1 class='text-center mt-5'>Cart Items</h1>

    <?php 
    session_start();
    $myCartItems =$_SESSION['cartItems'];
    foreach($myCartItems as $cartItem) {?>
      <p class='text-center'><?php echo $cartItem['name']; ?></p>  
   <?php }?>

 <?php require('inc/footer.php') ?>