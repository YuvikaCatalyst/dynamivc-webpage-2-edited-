<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
include('admin/database1.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="assets/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="admin/assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="admin/assets/css/tiny-slider.css" rel="stylesheet">
		<link href="admin/assets/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
                <?php
                 $result = mysqli_query($conn, "SELECT logoFile,logoText from websitedata");
                 if($result && mysqli_num_rows($result) > 0){
                     $row = mysqli_fetch_assoc($result);
                     $logoFile = $row['logoFile'];
                     $logoText = $row['logoText'];
               if($logoFile!=" "){
                echo "<img src='admin/assets/uploads/$logoFile'>";
               }
               else{
               echo" <a class='navbar-brand' href='index.html'>$logoText<span>.</span></a>";}
               }
				
?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
                
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <?php 
                        $result1 = mysqli_query($conn, "SELECT navItem1,navItem2,navItem3,navItem4,navItem5,navItem6 from websitedata");
                        if($result1 && mysqli_num_rows($result1) > 0){
                            $row = mysqli_fetch_assoc($result1);
                            $navItem1 = $row['navItem1'];
                            $navItem2 = $row['navItem2'];
                            $navItem3 = $row['navItem3'];
                            $navItem4 = $row['navItem4'];
                            $navItem5 = $row['navItem5'];
                            $navItem6 = $row['navItem6'];
                        echo "<li class='nav-item active'><a class='nav-link' href=''>$navItem1</a></li>";
						echo "<li><a class='nav-link' href=''>$navItem2</a></li>";
						echo "<li><a class='nav-link' href=''>$navItem3</a></li>";
						echo "<li><a class='nav-link' href=''>$navItem4</a></li>";
						echo "<li><a class='nav-link' href=''>$navItem5</a></li>";
						echo "<li><a class='nav-link' href=''>$navItem6</a></li>";
                        }
                       ?>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <?php
                 $result2 = mysqli_query($conn, "SELECT navItem7,navItem8 from websitedata");
                 if($result2 && mysqli_num_rows($result2) > 0){
                    $row = mysqli_fetch_assoc($result2);
                 $navItem7 = $row['navItem7'];
                 $navItem8 = $row['navItem8'];
						echo "<li><a class='nav-link' href='#'><img src='admin/assets/uploads/$navItem7' alt='img' ></a></li>";
						echo "<li><a class='nav-link' href='#'><img src='admin/assets/uploads/$navItem8' alt='img'></a></li>";
                  } 
                  ?>
					</ul>
                   
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                                <?php
                                 $result3 = mysqli_query($conn, "SELECT section1heading1,section1heading2,section1para,anchor1,anchor2 from websitedata");
                                 if($result3 && mysqli_num_rows($result3) > 0){
                                    $row = mysqli_fetch_assoc($result3);
                                    $section1heading1 = $row['section1heading1'];
                                    $section1heading2 = $row['section1heading2'];
                                    $section1para = $row['section1para'];
                                    $anchor1=$row['anchor1'];
                                    $anchor2=$row['anchor2'];
                                 echo "<h1>$section1heading1<span clsas='d-block'>$section1heading2</span></h1>";
								echo "<p class='mb-4'>$section1para</p>";
								echo "<p><a href='' class='btn btn-secondary me-2'>$anchor1</a><a href='#' class='btn btn-white-outline'>$anchor2</a></p>";
                                 }
                            ?>
                                </div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
                                <?php
                            $result4 = mysqli_query($conn, "SELECT section1img from websitedata");
                            if($result4 && mysqli_num_rows($result4) > 0){
                                $row = mysqli_fetch_assoc($result4);
                                $section1img = $row['section1img'];
								echo "<img src='admin/assets/uploads/$section1img' class='img-fluid'>";
                            }
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                        <?php
                         $result5 = mysqli_query($conn, "SELECT section2heading,section2para,anchor3 from websitedata");
                         if($result5 && mysqli_num_rows($result5) > 0){
                            $row = mysqli_fetch_assoc($result5);
                            $section2heading = $row['section2heading'];
                            $section2para = $row['section2para'];
                            $anchor3 = $row['anchor3'];
						echo "<h2 class='mb-4 section-title'>$section2heading</h2>";
						echo "<p class='mb-4> $section2para</p>";
						echo "<p><a href='' class='btn btn-primary me-2'>$anchor3</a></p>";
                        echo "<p><a href='' class='btn btn-primary me-2'>$anchor3</a></p>";
                         }
                        ?>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
                            <?php
                             $result6 = mysqli_query($conn, "SELECT section2img1,section2img1heading,section2img1para from websitedata");
                             if($result6 && mysqli_num_rows($result6) > 0){
                                $row = mysqli_fetch_assoc($result6);
                            $section2img1 = $row['section2img1'];
                            $section2img1heading = $row['section2img1heading'];
                            $section2img1para = $row['section2img1para'];

							echo"<img src='admin/assets/uploads/$section2img1' class='img-fluid product-thumbnail'>";
							echo "<h3 class='product-title'>$section2img1heading </h3>";
							echo "<strong class='product-price'>$section2img1para</strong>";
                        }
?>
							<span class="icon-cross">
								<img src="admin/assets/uploads/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
                        <?php
                             $result7 = mysqli_query($conn, "SELECT section2img2,section2img2heading,section2img2para from websitedata");
                             if($result7 && mysqli_num_rows($result7) > 0){
                                $row = mysqli_fetch_assoc($result7);
                            $section2img2 = $row['section2img2'];
                            $section2img2heading = $row['section2img2heading'];
                            $section2img2para = $row['section2img2para'];
							echo "<img src='admin/assets/uploads/$section2img2' class='img-fluid product-thumbnail'>";
                           
							echo "<h3 class='product-title'> $section2img2heading</h3>";
							echo "<strong class='product-price'>$section2img2para</strong>";
                             }
                             ?>
							<span class="icon-cross">
								<img src="admin/assets/uploads/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
                        <?php
                             $result8 = mysqli_query($conn, "SELECT section2img3,section2img3heading,section2img3para from websitedata");
                             if($result8 && mysqli_num_rows($result8) > 0){
                                $row = mysqli_fetch_assoc($result8);
                            $section2img3 = $row['section2img3'];
                            $section2img3heading = $row['section2img3heading'];
                            $section2img3para = $row['section2img3para'];
							echo "<img src='admin/assets/uploads/$section2img3' class='img-fluid product-thumbnail'>";
							echo "<h3 class='product-title'> $section2img3heading</h3>";
							echo "<strong class='product-price'>$section2img3para</strong>";}
                            ?>

							<span class="icon-cross">
								<img src="admin/assets/uploads/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
