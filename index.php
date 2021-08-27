<?php require('inc/head.php')?>
<?php require('inc/nav.php') ?>

 <h1 class='mb-3'>Our Products:-</h1>
  <?php 
  session_start();                                                        // start session 

  $productArray=[                                                        // some products (The name should be one word or suprated by _ )
      'Product_One'=>[
          'images/work-1.jpg','255$'
      ]
      ,
      'Product_Two'=>[
          'images/work-2.jpg','345$',
      ],
      'Product_Thee'=>[
          'images/work-3.jpg','1000$',
      ],
      'Product_Four'=>[
          'images/work-4.jpg','548$',
      ],
      'Product_Five'=>[
          'images/work-5.jpg','475$',
      ],
      'Product_Six'=>[
          'images/work-6.jpg','152$'
      ]  
      ];

  
    //   $_SESSION['cart']= $productArray;                                      // save products at session

    foreach($productArray as $key=> $value){?>                                
        <div class="card  m-2 shadow d-inline-block w-25">
        <img
        src="<?php echo $value[0] ;?>"
        class="card-img-top w-100"
        />
        
    <div class="card-body">
        <form action="handle-cart.php"method='GET'>
        <h5 class="card-title"><?php echo $key ;?></h5>
        
        <p class="card-text">Price=<?php  echo $value[1];?></p>
       

        <a href=<?php echo"handle-cart.php?name=$key ";?> class='btn btn-info' >add</a>
        </form>
    </div>
    </div>
  <?php
    };
    
    ?>

<?php require('inc/footer.php')?>