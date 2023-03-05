<?php ob_start() ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

	<title>Page d'authentification</title>
	<!-- Favicon-->
	<link rel="icon" href="<?= $_SERVER['BASE_URI'] ?>src/templates/favicon.ico" type="image/x-icon">
	<!-- Custom Css -->
	<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/main.css">
	<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/authentication.css">
	<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/color_skins.css">
</head>

<?php $head = ob_get_clean(); ?>