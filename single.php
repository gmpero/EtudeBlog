<?php include("path.php");?>
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


	<!-- Блок main  -->
	<div class="container">
		<div class="content row">
			<!-- Main Content -->
			<div class="main-content col-md-9 col-12">
				<h2>Заголовок какайто конкретной статьи Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ea?</h2>
				<div class="single_post row">
					<div class="single-img col-12">
						<img src="assets/images/4.jpeg" alt="" class="img-fluid">
					</div>
                    <div class="info">
                        <i class="far fa-user"> Имя Автора</i>
						<i class="far fa-calendar"> Дата</i>
                    </div>
					<div class="singe_post_text col-12">
                        <h3>Заголовок Третьего уровня</h3>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi tenetur corrupti, odit, praesentium placeat 
                            eum quam possimus neque magnam <a href="#">laudantium</a>, facere omnis illo voluptates soluta. 
                            Obcaecati debitis repellat deserunt quis modi quod velit magni nostrum laborum, perferendis aut tempora quas?
                        </p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi tenetur corrupti, odit, praesentium placeat 
                            eum quam possimus neque magnam laudantium, facere omnis illo voluptates soluta. 
                            Obcaecati debitis repellat deserunt quis modi quod velit magni nostrum laborum, perferendis aut tempora quas?
                        </p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi tenetur corrupti, odit, praesentium placeat 
                            eum quam possimus neque magnam laudantium, facere omnis illo voluptates soluta. 
                            Obcaecati debitis repellat deserunt quis modi quod velit magni nostrum laborum, perferendis aut tempora quas?
                        </p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi tenetur corrupti, odit, praesentium placeat 
                            eum quam possimus neque magnam laudantium, facere omnis illo voluptates soluta. 
                            Obcaecati debitis repellat deserunt quis modi quod velit magni nostrum laborum, perferendis aut tempora quas?
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

	<!-- footer START -->
	<?php include("app/include/footer.php"); ?>
	<!-- footer END -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>