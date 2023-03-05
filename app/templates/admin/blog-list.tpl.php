﻿<?php ob_start() ?>
<section class="content blog-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Liste des articles
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                    <li class="breadcrumb-item active">Liste des articles</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 left-box">
                <?php if(!empty($objectData)): ?>
                <?php foreach($objectData as $object): ?>
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><?= $object['title'] ?></h3>
                        <ul class="meta">
                            <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Auteur: <?= $object['firstname']." ".$object['lastname'] ?></a></li>
                            <li><a href="#"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                        </ul>
                    </div>                    
                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="../../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                            <div class="social_share">
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            </div>
                        </div>
                        <p><?= $object['heading'] ?></p>
                        <form id="form_validation" method="POST" action="<?= $_SERVER['BASE_URI'] ?>index.php?action=single-post">
                        <button href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</button>
                            <input type="hidden" name="post-title" value="<?= $object['title'] ?>">
                        </form>
                    </div>

                </div>
    <?php endforeach; ?>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean() ?>