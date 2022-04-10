<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Reservation made successfully!';
   }else{
      $message[] = 'Reservation failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BusyBrews</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Busy<span>Brews</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#Menu">Menu</a>
            <a href="#about">about</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">Make Reservation</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
         </div>
      </div>

   </div>

</section>
<section class="menu">

   <h1 class="heading">Menu</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/affogato.jpeg" alt="">
         <h3>Desserts</h3>
         <p>Made with vanilla gelato or ice cream as the primary dessert and completed with a shot of hot espresso. Desserts is meant to either be slowly sipped or enjoyed with a spoon.</p>
      </div>

      <div class="box">
         <img src="images/cof.jpg" alt="">
         <h3>Drinks</h3>
         <p>Drinks have interesting combination of coffee, ice. Lime juice, and water that are often mixed with some alcohol, such as brandy or rum </p>
      </div>

      <div class="box">
         <img src="images/waffle.jpg" alt="">
         <h3>Appetizers</h3>
         <p>Dishes are made from leavened batter or dough that is cooked between two plates that are patterned to give a characteristic size, shape, and surface impression.</p>
      </div>

   </div>

</section>

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/cafe.jpeg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>A revolutionary cafe serving healthy products</h3>
            <p>Unique aromatic blend of herbs & caffeine with clean flavours, no bitterness & no acid reflux. Improved focus, boosted energy, enhanced fitness & a sustained burst of energy throughout the day!</p>
            <a href="#contact" class="link-btn">Try Now</a>
         </div>

      </div>

   </div>

</section>


<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/coffeee.jpeg" alt="">
         <p>Liquid Coffee is made ingeniously around complex flavors like Filter Coffee, French Vanilla, Irish Hazelnut, Dark Chocolate, and Creme Caramel.</p>
      </div>

      <div class="box">
         <img src="images/dessert.jpg" alt="">
         <p>The perfect combination of caffeine, herbs, fruits, and yogrut. Perfect for those who want a kick out of their coffee!</p>
      </div>

      <div class="box">
         <img src="images/making.jpg" alt="">
         <p>Unique aromatic blend of herbs & caffeine with clean flavours, no bitterness & no acid reflux. Stronger and smoother coffee experience guaranteed.</p>
      </div>

   </div>

</section>


<section class="reviews" id="reviews">

   <h1 class="heading"> Reviews </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/kendall jennar.jpg" alt="">
         <p>This cozy Cafe has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kendal Jenner</h3>
        
      </div>

      <div class="box">
         <img src="images/kylie.webp" alt="">
         <p> Its a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make great recommendations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kylie Jenner</h3>
        
      </div>

      <div class="box">
         <img src="images/zayn malik.jpg" alt="">
         <p>We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Zayn Malik</h3>
      </div>

   </div>

</section>


<section class="contact" id="contact">

   <h1 class="heading">Make Reservation</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span> date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make Reservation" name="submit" class="link-btn">
   </form>  

</section>

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+91 9082022436</p>
         <p>+490 2445678</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Kerala, india - 673311</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>athirahem@gmail.com</p>
         <p>busybrew@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>busybrew</span>  </div>

</section>












<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>