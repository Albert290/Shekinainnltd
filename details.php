<?php
include 'components/connect.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

$pid = $_GET['pid'] ?? null;

if ($pid) {
    $query = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
    $query->execute([$pid]);
    $product = $query->fetch(PDO::FETCH_ASSOC);
}

// Capture the referring URL (e.g., the Quick View page or other previous pages)
$previous_page = $_SERVER['HTTP_REFERER'] ?? 'index.php'; // Default to index.php if no referrer
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Details</title>

   <!-- Font Awesome CDN link -->
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
   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="product-details">
   <?php if ($product): ?>
      <img src="uploaded_img/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" class="details-image">
      <h1><?= htmlspecialchars($product['name']); ?></h1>
   
      <p class="recipe"><?= htmlspecialchars($product['recipe']); ?></p>
      <h2>Food Description:</h2>
      <p class="details"><?= htmlspecialchars($product['details']); ?></p> <!-- Display the details -->
      
      <!-- Buttons -->
      <div class="buttons">
         <!-- Add Back to Quick View Button -->
         <form action="<?= htmlspecialchars($previous_page); ?>" method="get">
            <input type="hidden" name="pid" value="<?= htmlspecialchars($product['id']); ?>">
            <input type="hidden" name="name" value="<?= htmlspecialchars($product['name']); ?>">
            <input type="hidden" name="price" value="<?= htmlspecialchars($product['price']); ?>">
            <input type="hidden" name="image" value="<?= htmlspecialchars($product['image']); ?>">
            <button type="submit" class="btn go-back">Back to Quick View</button>
         </form>
         
         <!-- Existing "View Categories" button -->
         <a href="index.php#food-category" class="btn browse">View Categories</a>
      </div>
      
   <?php else: ?>
      <p>Product not found.</p>
   <?php endif; ?>
</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
