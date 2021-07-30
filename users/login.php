<?php include('header.php') ?>

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="../assets/images/page-titles/5.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--heading">
                        <h1>Se connecter</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="breadcrumb">
                        <li>Nouveau sur ce site ?</li>
                        <li class="active"><a href="register.php"><u>S'inscrire</u></a></li>
                    </ul>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Login #1
============================================= -->
<section id="login1" class="forms">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="login-form">
                    <form class="mb-0">
                        <div class="row">

                            <div class="col-md-12">
                                <label for="email">Votre email</label>
                                <input type="email" class="form-control" name="login-email" id="email" placeholder="Votre email" required>
                            </div>
                            <div class="col-md-12">
                                <label for="email">Mot de passe</label>
                                <input type="password" class="form-control" name="login-password" id="pwd" placeholder="Mot de passe" required>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Se connecter" name="submit" class="btn btn--primary btn--rounded btn--block">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <a class="btn btn--secondary btn--link" href="forgot-password.php"><u>Mot de passe oublié ?</u></a>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
    </div>
</section>
<!-- #login1 end -->

<?php include('footer.php') ?>