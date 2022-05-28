<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Electro Shop</title>

    
    <!-- bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
	<!-- sweetalert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>

    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
		<h2 class="u-name">Electro <b>Shop</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	
	<div class="container p-0 m-0">
		<div class="row">
			<div class="body col-lg-3">
				<nav class="side-bar">
					<div class="user-p">
						<img src="../images/drone.jpg">
						<h4>L'admin</h4>
					</div>
					<ul>
						<li>
							<a href="#">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-solid fa-circle-plus" aria-hidden="true"></i>
								<span>Ajouter Produits</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-brands fa-product-hunt" aria-hidden="true"></i>
								<span>Produits</span>
							</a>
						</li>
						<li>
							<a href="./index.php?ajouter_categories">
								<i class="fa-solid fa-circle-plus" aria-hidden="true"></i>
								<span>Ajouter Catégories </span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-solid fa-list" aria-hidden="true"></i>
								<span>Catégories</span>
							</a>
						</li>
						<li>
							<a href="./index.php?ajouter_marques">
								<i class="fa-solid fa-circle-plus" aria-hidden="true"></i>
								<span>Ajouter Marques </span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-solid fa-list" aria-hidden="true"></i>
								<span>Marques</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-solid fa-users" aria-hidden="true"></i>
								<span>Les Utilisateurs</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa-solid fa-cart-plus" aria-hidden="true"></i>
								<span>Les Demandes</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-cog" aria-hidden="true"></i>
								<span>Parametres</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-power-off" aria-hidden="true"></i>
								<span>Déconnexion</span>
							</a>
						</li>
					</ul>
				</nav>
				<section class="section-1">
				</section>
			</div>
			<div class="col-lg-9 text-center">

				<!-- espace pour ajouter les categories -->
				<?php
					if(isset($_GET['ajouter_categories'])){
						include('./ajouter_categories.php');
						$request = htmlspecialchars($_GET['ajouter_categories']);
						switch($request)
						{
							case 'success':
								echo "<script>Swal.fire({position: 'center',
									icon: 'success',
									title: 'La catégorie ajouté avec succès',
									showConfirmButton: false,
									timer: 3000});
									</script>";
								break;

							case 'error':
								echo "<script>Swal.fire({position: 'center',
									icon: 'error',
									title: 'La catégorie éxiste déjà',
									showConfirmButton: false,
									timer: 3000});
									</script>";
								break;

								case 'empty':
									echo "<script>Swal.fire({position: 'center',
										icon: 'error',
										title: 'Donnez une categorie valide svp',
										showConfirmButton: false,
										timer: 3000});
										</script>";
									break;
						}
					}
				?>


				<!-- espace pour ajouter les categories -->
				<?php
					if(isset($_GET['ajouter_marques'])){
						include('./ajouter_marques.php');
						$request = htmlspecialchars($_GET['ajouter_marques']);
						switch($request)
						{
							case 'success':
								echo "<script>Swal.fire({position: 'center',
									icon: 'success',
									title: 'La marque ajouté avec succès',
									showConfirmButton: false,
									timer: 3000});
									</script>";
								break;

							case 'error':
								echo "<script>Swal.fire({position: 'center',
									icon: 'error',
									title: 'La marque éxiste déjà',
									showConfirmButton: false,
									timer: 3000});
									</script>";
								break;
							
								case 'empty':
									echo "<script>Swal.fire({position: 'center',
										icon: 'error',
										title: 'Donnez une marque valide svp',
										showConfirmButton: false,
										timer: 3000});
										</script>";
									break;

						}
					}
				?>
			</div>
		</div>
	</div>
</body>



    <!-- bootstrap-JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>