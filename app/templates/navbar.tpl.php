<?php ob_start() ?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="#page-top"><?= $adminUserObject->getFirstname() ." ". $adminUserObject->getLastname() ?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li class="page-scroll">
					<a href="#portfolio">Portfolio</a>
				</li>
				<li class="page-scroll">
					<a href="#about">A propos</a>
				</li>
				<li class="page-scroll">
					<a href="#contact">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-responsive" src="<?= $_SERVER['BASE_URI']?>assets/img/profile.png" alt="">
				<div class="intro-text">
					<span class="name"><?= $adminUserObject->getFirstname() ." ". $adminUserObject->getLastname() ?></span>
					<hr class="star-light">
					<span class="skills">Développeur web back-end PHP/SYMFONY</span>
				</div>
			</div>
		</div>
	</div>
</header>

<?php $navBar = ob_get_clean() ?>
