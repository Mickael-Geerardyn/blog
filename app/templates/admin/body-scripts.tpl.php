﻿<?php ob_start() ?>
<!-- Jquery Core Js --> 
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script><!-- USA Map Js -->

<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/js/pages/blog/blog.js"></script>
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/js/pages/charts/jquery-knob.min.js"></script>

<!-- blog-post scripts -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/js/pages/forms/editors.js"></script>

<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/js/pages/forms/form-validation.js"></script>

<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/js/pages/tables/footable.js"></script><!-- Custom Js -->

<?php $bodyEndScripts = ob_get_clean(); ?>

<?php require_once 'layout.php'?>
