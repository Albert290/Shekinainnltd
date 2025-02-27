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
    <meta name="description"
        content="Discover Shekinainnltd, the best restaurant in Maua offering delicious local and international delicacies.Free parking and fast delivery available. Visit us today">
    <meta name="keywords"
        content="Shekinainnltd, restaurant Maua, best restaurants, local cuisine, international cuisine, Maua dining">
    <title>Shekinainnltd - Best Restaurant in Maua for Local and International dishes.Dine with us today.</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title"
        content="Shekinainnltd - Best Restaurant in Maua for Local and International dishes.Dine with us today">
    <meta property="og:description"
        content="Discover Shekinainnltd, the best restaurant in Maua offering delicious local and international delicacies.Free parking and fast delivery available. Visit us today">
    <meta property="og:image" content="https://shekinainnltd.co.ke/images/insi.jpg">
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
    <link rel="icon" type="image/png" sizes="192x192" href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="styles.css">
    <!-- Add Google Fonts for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
  
<?php include 'components/user_header.php'; ?>
    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Shekina Inn</h1>
        <p>Shekinainnltd - Best Restaurant in Maua for Local and International dishes.Dine with us today </p>
        <div class="hero-buttons">
            <a href="contact.php" class="btn">Make a Reservation</a>
            <a href="contact.php" class="btn btn-outline">Book Catering</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about">
        <div class="about-content">
            <h2>About Shekina Inn</h2>
            <p> Shekina Inn is a restaurant located in Maua town next to Jacksmart electronics opposite Modesty hardware and preddy fashions. We pride ourselves in offering the best organic and
            homegrown food. We offer outside catering for all occasions. Our commitment to supporting our community
            means that we partner with local farmers within Nyambene Hills who share our dedication to sustainable
            practices and ethical sourcing. Each meal reflects the vibrant flavors of our region, showcasing
            seasonal produce that is both delicious and nourishing.</p> 
        </div>
        <div class="about-image">
            <img src="images/insi.jpg" alt="About Shekina Inn">
        </div>
    </section>

    <!-- Category Section -->
    <section class="category">
        <h2>Our Menu Categories</h2>
        <div class="box-container">
            <a href="category.php?category=meat dishes" class="box">
                <img src="images/meat logo.jpeg" alt="Meat Dishes at Shekina Inn">
                <h3>Meat Dishes</h3>
            </a>
            <a href="category.php?category=chicken dishes" class="box">
                <img src="images/chicken logo.jpeg" alt="Chicken Dishes at Shekina Inn">
                <h3>Chicken Dishes</h3>
            </a>
            <a href="category.php?category=vegetables" class="box">
                <img src="images/veges logo.jpeg" alt="Vegetables at Shekina Inn">
                <h3>Vegetables</h3>
            </a>
            <a href="category.php?category=cold_beverages" class="box">
                <img src="images/cold beve .jpeg" alt="Cold Beverages at Shekina Inn">
                <h3>Cold Beverages</h3>
            </a>
            <a href="category.php?category=side dishes" class="box">
                <img src="images/side dihes.jpeg" alt="Side Dishes at Shekina Inn">
                <h3>Side Dishes</h3>
            </a>
            <a href="category.php?category=omelettes" class="box">
                <img src="images/omellet.jpeg" alt="Omelettes at Shekina Inn">
                <h3>Omelettes</h3>
            </a>
            <a href="category.php?category=hot beverages" class="box">
                <img src="images/tea.jpeg" alt="Hot Beverages at Shekina Inn">
                <h3>Hot Beverages</h3>
            </a>
            <a href="category.php?category=fish dishes" class="box">
                <img src="images/fishh.jpeg" alt="Fish Dishes at Shekina Inn">
                <h3>Fish Dishes</h3>
            </a>
            <a href="category.php?category=snacks" class="box">
                <img src="images/samos.jpeg" alt="Snacks at Shekina Inn">
                <h3>Snacks</h3>
            </a>
            <a href="category.php?category=accompaniments" class="box">
                <img src="images/chapati.jpeg" alt="Accompaniments at Shekina Inn">
                <h3>Accompaniments</h3>
            </a>
        </div>
    </section>

    <!-- Daily Offers Section -->
    <section class="daily-offers">
        <h2>FRIDAY  KIKWETU SPECIAL</h2>
        <p>Don’t miss out on our FRIDAY DEALS! Enjoy delicious meals at discounted prices.</p>
        <div class="offer-container">
            <div class="offer">
                <img src="images/OFFER 1.jpg" alt="Special Offer 2">
                <h3>Chicken Roast</h3>
                <p>Only ksh.330</p>
            </div>
            <div class="offer">
                <img src="uploaded_img/IMG_1620.jpg" alt="Special Offer 3">
                <h3>ugali afya</h3>
                <p>Only ksh.100</p>
            </div>
            <div class="offer">
                <img src="uploaded_img/ugali brown.png" alt="Special Offer 3">
                <h3>Ugali Brown</h3>
                <p>Only ksh.100</p>
            </div>
            <div class="offer">
                <img src="uploaded_img/1000342624.jpg" alt="Special Offer 3">
                <h3>Chicken soup</h3>
                <p>Only ksh.230</p>
            </div>
            <div class="offer">
                <img src="images/ofer 2.jpg" alt="Special Offer 3">
                <h3>Matoke<br>Matumbo</h3>
                <p>Only ksh.350</p>
            </div>
            <div class="offer">
                <img src="images/offer 3.jpg" alt="Special Offer 1">
                <h3>Githeri</h3>
                <p>Only ksh.250</p>
            </div>
            <div class="offer">
                <img src="images/tilapia.jpg" alt="Special Offer 1">
                <h3>Tilapia</h3>
                <p>Only ksh.350</p>
            </div>
            <div class="offer">
                <img src="images/offer 4.jpg" alt="Special Offer 1">
                <h3>Muukio</h3>
                <p>Only ksh.100</p>
            </div>
            <div class="offer">
                <img src="images/offer 5.jpg" alt="Special Offer 1">
                <h3>Nguja Gutu</h3>
                <p>Only ksh.100</p>
            </div>
        </div>

        <!-- Last Week's Friday Special Section -->
<section class="last-friday-special">
    <h2>Last Week's Friday Special</h2>
    <p>A Look Back at Our Delicious Deals – Did You Miss Out?</p>
    <div class="special-gallery">
        <div class="special-item">
            <img src="uploaded_img/special.png" alt="Special Dish 1">
        </div>
        <div class="special-item">
            <img src="uploaded_img/special2.png" alt="Special Dish 2"> 
        </div>
        <div class="special-item">
            <img src="uploaded_img/special3.png" alt="Special Dish 3"> 
        </div>
        <div class="special-item">
            <img src="uploaded_img/special5.png" alt="Special Dish 3"> 
        </div>
        <div class="special-item">
            <img src="uploaded_img/special6.png" alt="Special Dish 3"> 
        </div>
        <div class="special-item">
            <img src="uploaded_img/special4.png" alt="Special Dish 3"> 
        </div>
        <div class="special-item">
            <img src="uploaded_img/special9.png" alt="Special Dish 3"> 
        </div>
    </div>
</section>

    </section>

    <!-- Catering Section -->
    <section class="catering">
        <div class="catering-content">
            <h2>Outside Catering Services</h2>
            <p>Planning an event? Let Shekina Inn handle the catering! We offer a wide range of menu options to suit your needs, from corporate events to private parties.</p>
            <a href="contact.php" class="btn">Contact us</a>
        </div>
        <div class="catering-image">
            <img src="images/Allan.jpg" alt="Catering Services">
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <p>" I highly recommend their grilled chicken and cold beverages."</p>
                <h4>- John Mutembei</h4>
            </div>
            <div class="testimonial">
                <p>" Their catering made our event a huge success!"</p>
                <h4>- Jane Kanini</h4>
            </div>
            <div class="testimonial">
                <p>"A must-visit restaurant. The ambiance and food are top-notch!"</p>
                <h4>- Mike Mwendwa</h4>
            </div>
        </div>
    </section>

   <!-- Footer Section -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=


</body>
</html>