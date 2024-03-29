<?php 
include("path.php");
include("app/database/db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6d9064c383.js" crossorigin="anonymous"></script>
    <!-- Custom style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Rubik:wght@400;700&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <title>Etude blog</title>
  </head>
  <body>
	<!-- header -->
    <?php include("app/include/header.php"); ?>

    <!-- Блок карусели START-->
    <div class="container">
        <div class="row">
            <h2 class="slider-title">
                Топ публикаций
            </h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
            <!-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/firstSlaid.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                  <h5><a href="#">First slide label</a></h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/original.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                  <h5><a href="#">Second slide label</a></h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/ThridSlide.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                  <h5><a href="#">Third slide label</a></h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Блок карусели END-->

	<!-- Блок main  -->
	<div class="container">
		<div class="content row">
			<!-- Main Content -->
			<div class="main-content col-md-9 col-12">
				<h2>Последние публикации</h2>
				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="assets/images/4.jpeg" alt="" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Сажать или не сажать?</a>
						</h3>
						<i class="far fa-user"> Имя Автора</i>
						<i class="far fa-calendar"> Дата</i>
						<p class="preview-text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia eaque, iure unde dicta, 
							dolor doloremque debitis optio autem dignissimos maxime voluptatum delectus consequatur 
							minima mollitia sit libero, saepe quibusdam tempore!
						</p>
					</div>
				</div>
				<!-- 2 -->
				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="assets/images/4.jpeg" alt="" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Интересная статья про сад и огород</a>
						</h3>
						<i class="far fa-user"> Имя Автора</i>
						<i class="far fa-calendar"> Дата</i>
						<p class="preview-text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia eaque, iure unde dicta, 
							dolor doloremque debitis optio autem dignissimos maxime voluptatum delectus consequatur 
							minima mollitia sit libero, saepe quibusdam tempore!
						</p>
					</div>
				</div>


				<!-- 3 -->
				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="assets/images/4.jpeg" alt="" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Клубника в домашних условиях</a>
						</h3>
						<i class="far fa-user"> Имя Автора</i>
						<i class="far fa-calendar"> Дата</i>
						<p class="preview-text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia eaque, iure unde dicta, 
							dolor doloremque debitis optio autem dignissimos maxime voluptatum delectus consequatur 
							minima mollitia sit libero, saepe quibusdam tempore!
						</p>
					</div>
				</div>


				<!-- 4 -->
				<div class="post row">
					<div class="img col-12 col-md-4">
						<img src="assets/images/4.jpeg" alt="" class="img-thumbnail">
					</div>
					<div class="post_text col-12 col-md-8">
						<h3>
							<a href="#">Интересная статья про сад и огород</a>
						</h3>
						<i class="far fa-user"> Имя Автора</i>
						<i class="far fa-calendar"> Дата</i>
						<p class="preview-text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia eaque, iure unde dicta, 
							dolor doloremque debitis optio autem dignissimos maxime voluptatum delectus consequatur 
							minima mollitia sit libero, saepe quibusdam tempore!
						</p>
					</div>
				</div>
			</div>

			<!-- Sidbar Content -->
			<div class="sidebar col-md-3 col-12">
				<div class="section search">
					<h3>Search</h3>
					<form action="index.html" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Search...">
					</form>
				</div>

				<div class="section topics">
					<h3>Topics</h3>
					<ul>
						<li><a href="#">Дача</a></li>
						<li><a href="#">Сад</a></li>
						<li><a href="#">Огород</a></li>
						<li><a href="#">Семена</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Блок main END -->

	<?php include("app/include/footer.php"); ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>