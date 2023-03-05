<?php ob_start() ?>

<!-- Jquery Core Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/libscripts.bundle.js"></script>
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery Core Js -->
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/libscripts.bundle.js"></script>
<script src="<?= $_SERVER['BASE_URI'] ?>src/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
    $(".navbar-toggler").on('click',function() {
        $("html").toggleClass("nav-open");
    });
    //=============================================================================
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
</script>

<?php $bodyEndScripts = ob_get_clean() ?>
<?php require_once 'layout.php'?>
