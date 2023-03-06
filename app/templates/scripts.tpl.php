<?php ob_start(); ?>

<!-- jQuery -->
<script src="<?= $_SERVER['BASE_URI']?>assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= $_SERVER['BASE_URI']?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?= $_SERVER['BASE_URI']?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?= $_SERVER['BASE_URI']?>assets/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="<?= $_SERVER['BASE_URI']?>assets/js/freelancer.min.js"></script>

<?php $scripts = ob_get_clean() ?>