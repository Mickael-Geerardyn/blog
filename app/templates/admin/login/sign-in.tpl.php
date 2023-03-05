﻿<?php ob_start() ?>

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
                <form class="form" method="POST" action="<?= $_SERVER['BASE_URI'] ?>index.php?action=sign-in">
                    <div class="header">
                        <div class="logo-container">
                            <img src="<?= $_SERVER['BASE_URI'] ?>src/assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <?php if (!empty($informations['email'])): ?>
                            <input type="text" class="form-control" placeholder="<?= $informations['email'] ?>" name="email" />
                            <?php else: ?>
                            <input type="text" class="form-control" placeholder="Email" name="email" />
                            <?php endif; ?>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Mot de passe" class="form-control" name="password" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SE CONNECTER</button>
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