<?php ob_start() ?>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

		<title>Portfolio Dashboard</title>
		<link rel="icon" href="<?= $_SERVER['BASE_URI'] ?>src/templates/admin/favicon.ico" type="image/x-icon">
		<!-- Favicon-->
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/dropzone/dropzone.css">
        <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/bootstrap-select/css/bootstrap-select.css" />
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/morrisjs/morris.css" />
		<!-- Custom Css -->
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/main.css">
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/blog.css">
		<link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/color_skins.css">
        <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>src/assets/css/authentication.css">
	</head>

<?php $head = ob_get_clean() ?>