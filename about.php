<?php
session_start();
include 'components/connect.php';
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0M7ZSJ88KT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0M7ZSJ88KT');
</script>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover Shekinainn LTD.Located in the hills of Nyambene,and the best hotel in Maua.">
   <meta name="keywords" content="Shekinainnltd, hotel  Maua, lodging, close to spring well hotel, outdoor catering, Best hotel Maua town">
   <title>Shekinainnltd - Best rated hotel in Maua.</title>
   
    <!-- Open Graph Meta Tags -->
   <meta property="og:title" content="Shekinainnltd - Best rated hotel in Maua">
   <meta property="og:description" content="Discover Shekinainnltd, the best restaurant in Maua offering delicious local and international delicacies.Free parking and fast delivery available. Visit us today">
   <meta property="og:image" content="https://shekinainnltd.co.ke/uploaded_img/full capon broiler.jpeg">
   <meta property="og:url" content="https://shekinainnltd.co.ke">
   <meta property="og:type" content="website">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="index.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>we serve delicious, fresh delicacies made from locally sourced ingredients. Our warm ambiance and exceptional service create the perfect dining experience for every occasion</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>