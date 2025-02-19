<?php
session_start();
include 'components/connect.php';
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Shekina Hotel Menu.">
   <meta name="keywords" content="Shekinainnltd, hotel  Maua, lodging, close to spring well hotel, outdoor catering, Best hotel Maua town,">
   <title>Menu at ShekinaInn.</title>
   
    <!-- Open Graph Meta Tags -->
   <meta property="og:title" content="  Best rated hotel in Maua">
   <meta property="og:description" content="Discover Shekinainnltd, the best restaurant in Maua offering delicious local and international delicacies.Free parking and fast delivery available. Visit us today">
   <meta property="og:image" content="https://shekinainnltd.co.ke/uploaded_img/full capon broiler.jpeg">
   <meta property="og:url" content="https://shekinainnltd.co.ke">
   <meta property="og:type" content="website">
   <title>Menu</title>

   <!-- font awesome cdn link  -->
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
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>our menu</h3>
   <p><a href="index.php">home</a> <span> / menu</span></p>
</div>

<!-- menu section starts  -->

<section class="products">
   <h1 class="title">Choose a category</h1>

   <!-- Categories -->
   <div class="category-nav">
      <ul>
         <li><h1><a href="#" onclick="showCategory('meat dishes')">meat dishes</a></h1></li>
         <li><h2><a href="#" onclick="showCategory('chicken dishes')">chicken dishes</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('fish dishes')">fish dishes</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('side dishes')">side dishes</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('vegetables')">vegetables</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('omelettes')">omelettes</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('snacks')">snacks</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('drinks')">drinks</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('special')">special</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('hot beverages')">hot beverages</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('cold_beverages')">cold_beverages</a></h2></li>
         <li><h2><a href="#" onclick="showCategory('accompaniments')">accompaniments</a></h2></li>
          
          
          
          
          
          
      </ul>
   </div>

   <div class="box-container">

      <?php
         // Fetch all products
         $select_products = $conn->prepare("SELECT * FROM `products`");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            // Initialize an array to hold products by category
            $products_by_category = [];

            // Loop through products and group them by category
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
               $category = strtolower($fetch_products['category']); // Ensure category is lowercase
               $products_by_category[$category][] = $fetch_products;
            }

            // Display products for each category
            foreach ($products_by_category as $category_name => $products) {
               echo "<div class='category-products' id='{$category_name}' style='display: none;'>";
               echo "<h3>" . ucfirst($category_name) . "</h3>"; // Capitalize the category name
               foreach ($products as $product) {
      ?>
                  <form action="" method="post" class="box">
                     <input type="hidden" name="pid" value="<?= $product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $product['image']; ?>">
                     <a href="quick_view.php?pid=<?= $product['id']; ?>" class="fas fa-eye"></a>
                     <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                     <img src="uploaded_img/<?= $product['image']; ?>" alt="">
                     <a href="category.php?category=<?= $product['category']; ?>" class="cat"><?= $product['category']; ?></a>
                     <div class="name"><?= $product['name']; ?></div>
                     <div class="flex">
                        <div class="price"><span>ksh</span><?= $product['price']; ?></div>
                        <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                     </div>
                  </form>
      <?php
               }
               echo "</div>"; // Close category-products
            }
         } else {
            echo '<p class="empty">No products added yet!</p>';
         }
      ?>
   </div>
</section>

<script>
   function showCategory(category) {
      // Hide all categories
      var categories = document.getElementsByClassName('category-products');
      for (var i = 0; i < categories.length; i++) {
         categories[i].style.display = 'none';
      }
      // Show the selected category
      document.getElementById(category).style.display = 'block';
   }
</script>

<<!-- QR Code Section -->
<section class="qr-code-section">
   <h3>Scan Our QR Code to View the Menu!</h3>
   <img src="images/qr.png" alt="QR Code for Menu" class="qr-code">
</section>
























<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>