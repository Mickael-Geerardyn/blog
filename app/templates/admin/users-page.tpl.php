﻿<?php ob_start() ?>

<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Contact
                <small class="text-muted">Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-2 col-3">
                                <div class="checkbox inlineblock delete_all">
                                    <input id="deleteall" type="checkbox">
                                    <label for="deleteall">
                                        All
                                    </label>
                                </div>                                
                            </div>
                            <div class="col-lg-5 col-md-5 col-6">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-3">
                                <div class="btn-group hidden-sm-down" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-simple dropdown-toggle btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right slideDown">
                                            <li>
                                                <a href="javascript:void(0);">Family</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Work</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Google</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round hidden-sm-down">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-icon btn-simple btn-icon-mini btn-round btn-danger float-md-right">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th data-breakpoints="xs">Téléphone</th>
                                    <th data-breakpoints="xs sm md">Email</th>
                                    <th data-breakpoints="xs sm md">Linkedin</th>
                                    <th data-breakpoints="xs sm md">Twitter</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php foreach($objectData as $object): ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_2" type="checkbox">
                                            <label for="delete_2">&nbsp;</label>
                                        </div>
                                    </td>

                                    <td>
                                        <img src="<?= $_SERVER['BASE_URI'] ?>src/static/img/photo.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name"><?= $object->getFirstname() . ' ' .$object->getLastname() ?><span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i><?= $object->getPhoneNumber() ?></span>
                                    </td>
                                    <td>
                                        <span class="email"><a href="javascript:void(0);" title=""><i class="zmdi zmdi-email m-r-5"></i><?= $object->getEmail() ?></a></span>
                                    </td>
                                    <td>
                                        <span><i class="zmdi zmdi-pin"></i><?= $object->getSocialLinkedin() ?></span>
                                    </td>
                                    <td>
                                        <span><i class="zmdi zmdi-pin"></i><?= $object->getSocialTwitter() ?></span>
                                    </td>
                                    <td>
                                        <form action="<?= $_SERVER['BASE_URI'] ?>index.php?action=user-modifications-page" method="POST">
                                        <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-edit"></i></button>
                                            <input type="hidden" name="email" id="email" value="<?= $object->getEmail() ?>">
                                            <input type="hidden" name="CSRFToken" id="CSRFToken" value="<?= $_SESSION['CSRFToken'] ?>">
                                        </form>
                                        <form action="<?= $_SERVER['BASE_URI'] ?>index.php?action=user-delete" method="POST">
                                        <button class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><i class="zmdi zmdi-delete"></i></button>
                                            <input type="hidden" name="email" id="email" value="<?= $object->getEmail() ?>">
                                            <input type="hidden" name="CSRFToken" id="CSRToken" value="<?= $_SESSION['CSRFToken'] ?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean() ?>