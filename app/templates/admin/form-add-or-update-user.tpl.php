﻿<?php ob_start() ?>

    <section class="content">
        <?php if(!empty($informations) && is_array($informations)): ?>
        <!-- Validation Stats -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Informations</strong> de validation </h2>
                    </div>
                    <div class="body">
                        <form id="form_validation_stats">
                            <?php switch (key($informations)): case 'success':  ?>
                            <div class="form-group has-success">
                                <input type="text" value="<?= $informations['success']; ?>>" class="form-control form-control-success">
                            </div>
                            <?php case 'error': ?>
                            <div class="form-group has-danger">
                                <input type="email" value="<?= $informations['error']; ?>" class="form-control form-control-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php break; ?>
        <?php endswitch; ?>
        <!-- #END# Validation Stats -->
<?php endif; ?>
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <?php if(empty($ObjectData)): ?>
                    <h2>Ajouter un nouvel utilisateur
                    </h2>
                    <?php else: ?>
    <h2>Bienvenue <?= $ObjectData->getFirstname() ?>
    </h2>
<?php endif ?>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Validation</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="<?= $_SERVER['BASE_URI'] ?>index.php?action=user-register">
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Nom" name="lastname" value="<?= !empty($ObjectData) ? $ObjectData->getLastname() : ""; ?>" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Prénom" name="firstname" value="<?= !empty($ObjectData) ? $ObjectData->getFirstname() : ""; ?>" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= !empty($ObjectData) ? $ObjectData->getEmail() : ""; ?>" required>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone_number" value="<?= !empty($ObjectData) ? $ObjectData->getPhoneNumber() : ""; ?>">
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Linkedin" name="linkedin" value="<?= !empty($ObjectData) ? $ObjectData->getSocialLinkedin() : ""; ?>">
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Twitter" name="twitter" value="<?= !empty($ObjectData) ? $ObjectData->getSocialTwitter() : ""; ?>">
                                </div>
								<?php if (!empty($ObjectData)): ?>
                                    <div class="radio">
                                        <input type="radio" name="role_title" id="radio1" value="admin" <?= ($ObjectData->getRoleId() === 1?"checked":"") ?>>
                                        <label for="radio1">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="role_title" id="radio2" value="utilisateur" <?= ($ObjectData->getRoleId() === 2? "checked":"") ?>>
                                        <label for="radio2">
                                            Utilisateur
                                        </label>
                                    </div>
								<?php else: ?>
                                    <div class="radio">
                                        <input type="radio" name="role_title" id="radio1" value="admin">
                                        <label for="radio1">
                                            Administrateur
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="role_title" id="radio2" value="utilisateur" checked>
                                        <label for="radio2">
                                            Utilisateur
                                        </label>
                                    </div>
                                <div class="form-group form-float">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
								<?php endif; ?>
                                <div class="form-group form-float">
                                    <input type="hidden" class="form-control" name="CSRFToken" value="<?= $_SESSION['CSRFToken'] ?>">
                                </div>
                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">SOUMETTRE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

<?php $content = ob_get_clean() ?>