<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="icon" href="images\Plantopia.png" type="image/x-icon" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/a3.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">return to home</a></p>
</div>

<section class="about">

   <div class="flex">
   <h3 class="pff">why choose us?</h3>
         <p class="mott">
Choose Plantopia for an unparalleled green shopping experience. From top-quality plants to seamless online browsing, we offer convenience, expertise, and a commitment to sustainability. Elevate your space with Plantopia and let nature thrive effortlessly.</p>
   <div class="image">
         <img src="images/aaaa.jpg" alt="">
      </div>
      <div class="content">
         
         <br>
         <h3>our Story</h3>
         
         <p>In the heart of the <span>bustling city</span> , amidst the concrete jungle, spa Clara's vision for Plantopia took root—a digital sanctuary where the beauty of nature thrives in the digital age. Guided by her lifelong passion for plants, Clara painstakingly curated an extensive collection of botanical wonders, each chosen for its beauty, resilience, and ability to bring joy to any space.

But Plantopia is more than just an online nursery—it's a vibrant community where plant enthusiasts from all walks of life come together to share their love for greenery. With expert advice, engaging content, and a welcoming atmosphere, Plantopia has become more than just a marketplace—it's a place of inspiration, learning, and connection.

As the sun sets over the city skyline, Plantopia continues to flourish, its roots firmly planted in the hearts of plant lovers everywhere. With Clara's vision leading the way, Plantopia is not just a destination—it's a journey, inviting all who seek the beauty of nature to come and explore, learn, and grow together.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/438092723_928362119037646_1667573508148221484_n.jpg" alt="">
         <p>Absolutely thrilled with my experience at Plantopia! The selection is fantastic, the plants arrived in perfect condition, and the customer service was exceptional. Can't wait to order again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Nour Chaker</h3>
      </div>

      <div class="box">
         <img src="images/69065262_2284841538302410_3124568916630700032_n.jpg" alt="">
         <p>Plantopia has completely transformed my living space! The plants are healthy and vibrant, and the online shopping experience was a breeze. Highly recommend to anyone looking to bring a little green into their life!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mariem Laarifi</h3>
      </div>

      <div class="box">
         <img src="images/440410036_1107121930569566_7392689844207588977_n.jpg" alt="">
         <p>I've ordered from several online nurseries before, but Plantopia exceeded all my expectations. The plants arrived promptly and were carefully packaged. Plus, the variety they offer is unmatched. I'm a customer for life!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asma Hdiji</h3>
      </div>

      <div class="box">
         <img src="images/420178067_1199186458131604_8781316306269614586_n.jpg" alt="">
         <p>Five stars for Plantopia! The website is easy to navigate, the prices are reasonable, and the plants are stunning. It's clear that they put a lot of care and thought into every aspect of the shopping experience. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahlem Swibki</h3>
      </div>

      <div class="box">
         <img src="images/411515697_832740411985834_6048475806632692400_n.jpg" alt="">
         <p>"I couldn't be happier with my purchase from Plantopia. The plants arrived healthy and thriving, and they've added so much life to my home. I appreciate the attention to detail and the dedication to sustainability. Will definitely be back for more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shayma Mselmi</h3>
      </div>

      <div class="box">
         <img src="images/168220492_2740776646252848_779488042678466080_n.jpg" alt="">
         <p>Plantopia is a game-changer! As someone with a busy schedule, I love how convenient it is to shop for plants online. The selection is impressive, the prices are competitive, and the plants are top-notch quality. Couldn't ask for more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mariem Maaref</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>