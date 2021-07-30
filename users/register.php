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
                        <h1>S'inscrire</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="breadcrumb">
                        <li>Déjà membre ?</li>
                        <li class="active"><a href="login.php"><u>Se connecter</u></a></li>
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

<!-- register #1
============================================= -->
<section id="register1" class="forms">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="register-form">
                    <form class="mb-0">
                        <div class="row">

                            <div class="col-md-6">
                            <label for="name">Votre nom complet</label>

                                <input type="text" class="form-control" name="register-name" id="name" placeholder="Nom complet" required>
                            </div>
                            <div class="col-md-6">
                            <label for="phone">Votre numéro de téléphone</label>

                                <input type="text" class="form-control" name="register-phone" id="phone" placeholder="Votre numéro de téléphone" required>
                            </div>
                            <div class="col-md-12">
                                <label for="email">Votre email</label>
                                <input type="email" class="form-control" name="register-email" id="email" placeholder="Votre email" required>
                            </div>
                            <div class="col-md-12">
                                <label for="pwd">Mot de passe</label>
                                <input type="password" class="form-control" name="register-password" id="pwd" placeholder="Mot de passe" required>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="S'inscrire" name="submit" class="btn btn--primary btn--rounded btn--block">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <!-- .col-md-6 end -->
        </div>
    </div>
</section>
<!-- #register1 end -->

<?php include('footer.php') ?>