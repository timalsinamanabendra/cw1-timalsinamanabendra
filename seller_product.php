<?php

    @include 'config.php';

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <a href="https://www.facebook.com/prabesh.timalsina.58" target="_blank" class="facebook"><i  class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/prash9356/" target="_blank" class="instagram"> <i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/manabendra-timalsina-ab147a277/" target="_blank" class="linkin"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="other-links">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!-- top navbar -->

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="seller_home.php" style="color: black;">EE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="seller_home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="seller_product.php">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="seller_about.php">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="seller_contact.php">Contact Us</a>
                  </li>
                  <li>
                      <a class="nav-link" href="addproduct.php">Add product</a>
                  </li>
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>

                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->


    <!-- banner -->
    <div class="banner2">
        <div class="content2">
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
        <div class="container" id="product-cards">
                <div class="row" style="margin-top: 30px;">

<?php
$sql = "SELECT * FROM images ORDER BY product_id DESC";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($images = mysqli_fetch_assoc($res)) {
?>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="uploads/<?= $images['image_url'] ?>">
                        <div class="card-body">
<?php
        $product_id = $images['product_id']; // Assuming there's a product_id column in the images table
        $query = "SELECT product_name, description, price FROM images WHERE product_id = $product_id";
        $query_run = mysqli_query($conn, $query);

        if (mysqli_num_rows($query_run) > 0) {
            $item = mysqli_fetch_assoc($query_run);
?>
                            <h3><?= $item['product_name']; ?></h3>
                            <p><?= $item['description']; ?></p>
                            <div class="star">
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                                <i class="fas fa-star checked"></i>
                            </div>
                            <h5>RS.<?= $item['price']; ?><span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                        </div>
                    </div>
                </div>
           
<?php
        }
    }
}
?> 
</div>
        </div>

    <!-- product cards -->




   

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p style="text-align:justify;">Clothing is an essential aspect of human life and serves multiple purposes beyond mere functionality. It is a form of self-expression, a reflection of cultural identity, and a means to convey personal style. The textile and fashion industry have evolved over centuries, offering a diverse range of clothing options to cater to various tastes, occasions, and climates.<br>

Clothing serves as a means of protection, providing a barrier between our bodies and the external environment. Different fabrics and designs are chosen based on weather conditions, with options ranging from lightweight and breathable materials for hot climates to insulating and warm fabrics for colder regions. Additionally, clothing also offers protection against physical harm and hazards, such as safety gear and protective clothing for specific professions.<br>

Fashion trends play a significant role in the clothing industry. Styles, colors, and designs constantly change, influenced by factors like culture, celebrities, and social media. The fashion industry offers a wide range of choices, from casual wear and formal attire to sportswear and ethnic clothing, catering to diverse preferences and occasions.<br>

Clothing also holds cultural and social significance. Traditional garments reflect the heritage and customs of different regions and communities. They are worn during festivals, celebrations, and important ceremonies, symbolizing cultural identity and preserving traditions.<br>

In recent years, there has been a growing emphasis on sustainable and ethical fashion. Consumers are increasingly conscious of the environmental and social impact of the clothing industry. As a result, there has been a rise in eco-friendly and fair trade clothing brands that prioritize sustainable production methods, use organic and recycled materials, and ensure ethical labor practices.<br>

The e-commerce industry has played a significant role in the accessibility and availability of clothing. Online platforms have made it easier for consumers to explore a vast array of options, compare prices, and make purchases from the comfort of their homes. E-commerce websites also provide detailed product descriptions, size charts, and customer reviews to assist shoppers in making informed decisions.<br>

Overall, clothing is not just a basic necessity but a form of self-expression, cultural identity, and style. It encompasses a wide range of choices, catering to functional, aesthetic, and personal preferences. The clothing industry continues to evolve, incorporating sustainable practices and adapting to changing consumer demands.</p>

    <hr>
</div>
    <!-- product -->

<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>E-Electronic</h3>
                <p>E-Electronic, or electronic commerce (e-commerce), refers to the buying and selling of goods and services over the internet.</p>
                <p>
                    Bhaisepati <br>
                    Lalitpur<br>
                    Nepal<br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+97798********</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>prabesh.timalsina1234@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>We are here to delivert products in time!!...</p>
                <ul>
                    <li><a href="#">Luxirious Products</a></li>
                    <li><a href="#">Home Appliance</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social World</h4>
                <p>Our Social Worlds is for Providing services and to our valuable customer......</p>
                <div class="socail-links mt-3">
                    <a href="https://www.facebook.com/prabesh.timalsina.58" target="_blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/prash9356/" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/manabendra-timalsina-ab147a277/" target="_blank" class="linkin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>E-Electronics</strong>.All Rights Reserved
    </div>
    <div class="credits">
        Designed By <a href="#">Manabendra Timalsina</a>
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

<script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
