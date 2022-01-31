<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LEVEL-TECH-GROUPE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+212 601 39 31 88</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>Abdoulembadiaroi@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid mb-2 mb-lg-0">
                <a href="index.html" class="navbar-brand mb-2 mb-lg-0">LTG</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <a href="index.php" class="nav-item nav-link active">ACCUEIL</a>
                        <a href="propos.php" class="nav-item nav-link">A PROPOS DE NOUS</a>
                        <a href="programme.php" class="nav-item nav-link">PROGRAMME</a>
                        <a href="contact.php" class="nav-item nav-link">CONTACT</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>trouver la formation qui correspond à vos ambitions</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Accueil</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Contact pour toute demande</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                <?php 
                if(isset($_GET['m'])){
                ?>
                     <div class="alert alert-success">
                            message envoyé avec succès

                     </div>  
                <?php } ?>
                        <form name="sentMessage"  action="connexion.php" method="POST">
                            <div class="control-group">
                               prenom : <input type="text" name="prenom" class="form-control"  placeholder="votre prenom nom" required="required" data-validation-required-message="entrer votre nom" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                               nom: <input type="text" name="nom" class="form-control"  placeholder="votre nom nom" required="required" data-validation-required-message="entrer votre nom" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              email:  <input type="email" name="email" class="form-control" placeholder="votre Email" required="required" data-validation-required-message="entrer votre email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                              sujet:  <input type="text" name="sujet" class="form-control"  placeholder="Sujet" required="required" data-validation-required-message="entrer votre sujer" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                               message: <textarea name="message" class="form-control"  placeholder="Message" required="required" data-validation-required-message="entrer votre message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" >envoyer Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                            <h2>Notre siège social</h2>
                            <p><i class="fa fa-map-marker-alt"></i>plateau,dakar,senegal</p>
                            <p><i class="fa fa-phone-alt"></i>+212601393188</p>
                            <p><i class="fa fa-envelope"></i>abdoulembadiaroi2000@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Liens populaires</h2>
                            <a href="propos.php">À propos de nous</a>
                            <a href="contact.php">Nous contacter</a>
                            <a href="programme.php">Programme</a>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Soumettre</button>
                                <label>Ne vous inquiétez pas, nous ne spammons pas !</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">LEVEL-TECH-GROUPE</a>, tous droits réservés..</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
