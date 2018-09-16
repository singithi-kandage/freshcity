<?php
    // require_once("../resources/config.php");
    require_once("../resources/templates/header.php");
	require_once("../resources/templates/top-nav.php");
	require_once("../resources/templates/logo.php");
    require_once("../resources/templates/navbar.php");
?>

<body>
    <div id="carouselExampleIndicators" class="carousel slide mx-auto" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-image">
                    <img src="../public_html/img/content/img1.jpg" alt="First slide">
                </div>        
               <div class="carousel-caption text-center">
                    <h2>SALE! All athletic wear for men and women </h2>
					<p>Get it while it's good! </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image">
                    <img src="../public_html/img/content/img2.jpg" alt="First slide">
                </div>        
                <div class="carousel-caption text-center">
                    <h2>Bloom Into Spring</h2>
					<p>Only the best in spring fashion, inclduding new dresses, skirts, tops, and accessories.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image">
                    <img src="../public_html/img/content/img3.jpg" alt="First slide">
                </div>        
                <div class="carousel-caption text-center">
                    <h2>Party Time!</h2>
					<p>Get ready to dress to impress at your next big bash.</p>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once("../resources/templates/footer.php");
	require_once("../resources/templates/end-doc.php");
?>