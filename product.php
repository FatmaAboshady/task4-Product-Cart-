
<?php
  session_start();
  if(empty($_SESSION['cart'])){
  $_SESSION['cart']=array();
  }
  $dir = __DIR__. "/uploads/";
    $files = scandir($dir);
    array_shift($files);
    array_shift($files);


    $products =[
        'image'=> $files,
        'price' => array(1,2,3,3),
        'name'=> array()
    ];
    for($i=0;$i<=count($files)-1;$i++){
     $imgName=$files[$i] ; 
    $namee=pathinfo($imgName , PATHINFO_FILENAME); 
     $products['name'][$i]=$namee;
    }

   
       
     
            
      ?>
        
         
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body>
  <?php session_start();
  $x= array();
  $index =array(); ?>
  <form action="cart.php" method="POST">
     <div class="  d-flex align-content-center justify-content-around container mt-5 " >
     <?php     for($i=0;$i<=count($files)-1;$i++){ ?>    

       <div class=" w-25  text-center  bg-light m-3  p-1  ">
       <img class=" w-100 mb-3  " src="../task4-2/uploads/<?php echo $products['image'][$i]?>" alt="">
         <p> <?php echo $products['price'][$i]?></p>
         <p> <?php echo $products['name'][$i]?></p>

         <button class=" btn btn-info "  onclick=" <?php 
           $x[$i]= $products['name'][$i];
           $index=$i; 
           echo $x;
           $_SESSION['cart']=$x;
           $_SESSION['i']=$index;
          
           ?>"> add to cart</button>
         </div>
         
        
           
       

       <?php  }?>
     
       


     </div>
     <div class=" m-auto w-25 p- ">
     <button type="submit" class=" m-auto btn btn-info  m-auto ">submit</button>
     </div>
     </form>


     <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html> 
