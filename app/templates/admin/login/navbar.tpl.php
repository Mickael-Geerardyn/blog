<?php ob_start() ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
	<div class="container">
		<div class="navbar-translate n_logo">
			<button class="navbar-toggler" type="button">
				<span class="navbar-toggler-bar bar1"></span>
				<span class="navbar-toggler-bar bar2"></span>
				<span class="navbar-toggler-bar bar3"></span>
			</button>
		</div>
		<div class="navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= $_SERVER['BASE_URI'] ?>">Accueil</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" href="<?= (empty($informations["referer"]) ? $_SERVER['BASE_URI']."index.php?action=register-page" : $_SERVER['BASE_URI']."index.php?action=login-page")?>"><?= (empty($informations["referer"])? "S'ENREGISTRER" : "SE CONNECTER")?></a>
                </li>
			</ul>
		</div>
	</div>
</nav>
<!-- End Navbar -->

<?php $navBar = ob_get_clean(); ?>