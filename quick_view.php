<?php
session_start();
include 'components/connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quick View</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="quick-view">

   <h1 class="title">quick view</h1>

   <?php
   $pid = $_GET['pid'] ?? null;

   if ($pid) {
       $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
       $select_products->execute([$pid]);

       if ($select_products->rowCount() > 0) {
           while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= htmlspecialchars($fetch_products['id']); ?>">
      <input type="hidden" name="name" value="<?= htmlspecialchars($fetch_products['name']); ?>">
      <input type="hidden" name="price" value="<?= htmlspecialchars($fetch_products['price']); ?>">
      <input type="hidden" name="image" value="<?= htmlspecialchars($fetch_products['image']); ?>">
      <img src="uploaded_img/<?= htmlspecialchars($fetch_products['image']); ?>" alt="">
      <a href="category.php?category=<?= htmlspecialchars($fetch_products['category']); ?>" class="cat"><?= htmlspecialchars($fetch_products['category']); ?></a>
      <div class="name"><?= htmlspecialchars($fetch_products['name']); ?></div>
      <div class="flex">
         <div class="price"><span>ksh</span><?= htmlspecialchars($fetch_products['price']); ?></div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
      </div>

      <!-- Add to Cart Button -->
      <button type="submit" name="add_to_cart" class="cart-btn" 
         onclick="return confirmLogin(<?= $user_id ? 'true' : 'false'; ?>);">
         Add to Cart
      </button>

      <!-- Details Button -->
      <a href="details.php?pid=<?= htmlspecialchars($fetch_products['id']); ?>&recipe=<?= urlencode($fetch_products['recipe']); ?>" class="details-btn">
         Details
      </a>

   </form>

   <?php
           }
       } else {
           echo '<p class="empty">No products added yet!</p>';
       }
   } else {
       echo '<p class="empty">Invalid product ID!</p>';
   }
   ?>

</section>

<?php include 'components/footer.php'; ?>

<!-- JavaScript to prompt login -->
<script>
   function confirmLogin(isLoggedIn) {
      if (!isLoggedIn) {
         alert("Please log in to place a order");
         window.location.href = "login.php";
         return false; // Prevent the form from submitting
      }
      return true; // Allow the form to submit
   }
</script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>
