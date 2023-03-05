<?php ob_start() ?>
<div class="page-header">
    <div class="page-header-image" style="background-image:url(<?= $_SERVER['BASE_URI'] ?>src/assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
			<?php if(!empty($informations['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="zmdi zmdi-block"></i>
                        </div>
                        <strong>Oh snap! </strong> <?= $informations['error'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
            <i class="zmdi zmdi-close"></i>
        </span>
                        </button>
                    </div>
                </div>
			<?php endif; ?>
            <div class="card-plain">
                <form class="form" method="POST" action="<?= $_SERVER['BASE_URI'] ?>index.php?action=user-sign-in">
                    <div class="header">
                        <div class="logo-container">
                            <img src="<?= $_SERVER['BASE_URI'] ?>src/assets/images/logo.svg" alt="">
                        </div>
                        <h5>Créer un compte</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nom d'utilisateur" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Mot de passe" class="form-control" required/>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>         
                    </div>
                    <div class="footer text-center">
                        <a href="index.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">ENVOYER</a>
                        <h6 class="m-t-20"><a class="link" href="<?= $_SERVER['BASE_URI'] ?>index.php?action=login-page">Déjà membre ?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </footer>
</div>

<?php $content = ob_get_clean() ?>