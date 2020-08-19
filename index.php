<?php include 'partials/header.php'; ?>
<?php include 'lib/db.php'; ?>
<?php include 'lib/contact.php'; ?>
<?php include 'lib/opinion.php'; ?>
<?php include 'lib/stat.php'; ?>


    <!-- service_area  -->
    <div class="service_area" id="services">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>Services</span>
                        <h3>Mes services pour vous</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4" data-aos="fade-up">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Sites vitrines basiques</h3>
                        <p>Site réalisé à moindre frais avec un thème prédéfini et un petit espace administrateur au besoin (php brut).</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4" data-aos="fade-up">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Applications web personnalisées</h3>
                        <p>Application web au design personnalisé et personnalisable à volonté, espace administrateur complet (php symfony).</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4"  data-aos="fade-up">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Service aux sociétés du web</h3>
                        <p>Participation aux projets web ( application web, API etc) pour les sociétés (php symfony).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <!-- portfolio_area -->
    <div class="portfolio_area portfolio_bg_1" id="galerie">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white_text text-center">
                        <span>Galerie</span>
                        <h3>Mes projets réalisés</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_area -->

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6" data-aos="fade-up">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/2.png" alt="">
                        </div>
                        <a href="img/portfolio/2.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Application web personnalisé (restaurant)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/1.png" alt="">
                        </div>
                        <a href="img/portfolio/1.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Site web basique (association)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6" data-aos="fade-up">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/3.png" alt="">
                        </div>
                        <a href="img/portfolio/3.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Application web personnalisé (cirque)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6" data-aos="fade-up">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/4.png" alt="">
                        </div>
                        <a href="img/portfolio/4.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Application Api Rest (mediaWiki)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-lg-6" data-aos="fade-up">
                    <div class="single_Portfolio">
                        <div class="portfolio_thumb">
                            <img src="img/portfolio/5.png" alt="">
                        </div>
                        <a href="img/portfolio/5.png" class="popup popup-image"></a>
                        <div class="portfolio_hover">
                            <div class="title">
                                    <h3>Application web de gestion et de statistiques (Football club)</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_portfolio text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ portfolio_image_area  -->

    <!-- about_me  -->
    <div class="about_me" id="about">
        <div class="about_large_title d-none d-lg-block">
                I am
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                        <h3>A propos</h3>
                        <p>Bonjour, je suis Daniel Da Silva et je suis développeur web. Ayant le sens de l'écoute et le gout de la programmation, j'ai décidé de mettre mes compétences de développeur web au services des autres. Aujourd'hui je propose mes services pour aider les entreprises et les particuliers qui veulent gagner en visibilité, améliorer une application web ou tout simplement concrétiser un projet.</p>
                        <div class="download_cv">
                            <a class="boxed-btn3" href="img/CV.pdf">Télécharger le CV</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up">
                    <div class="about_img">
                        
                        <div class="my_Pic">
                                <img src="img/about/about.png" alt="photo du développeur">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->

    <div class="counter_area">
    </div>
    
    <!-- testimonial_area  -->
    <div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <?php
                            $reponse = $db->query('SELECT * FROM opinion WHERE Is_Visible=1 LIMIT 3');
                            while ($donnees = $reponse->fetch())
                            {
                            ?>
                            <div class="single_carousel">
                                            <div class="single_testmonial text-center">
                                                <div class="quote">
                                                    <img src="img/testmonial/quote.svg" alt="Avis client">
                                                </div>
                                            <p><?php echo $donnees['Message']; ?>
                                                <div class="testmonial_author">
                                                        <div class="thumb">
                                                            
                                                        </div>
                                                    <h3><?php echo  $donnees['FullName'];?> </h3>
                                                </div>
                                            </div>
                            </div>
                            <?php
                            }
                            $reponse->closeCursor();
                            ?>
                        </div>
                    </div>
                </div>
            </div>     
        
    </div>
        <!-- /testimonial_area  -->

        <div class="container my-5">
            <div class="row">
              <div class="col text-center">
              <form action="opinionTemplate.php" method="post" target="_blank">
                <button class="btn btn-primary">Laisser un avis</button>
              </form>
              </div>
            </div>
          </div>

<!-- Default form contact -->
    <div class="portfolio_area portfolio_bg_1" id="galerie">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white_text text-center">
                        <span>Contact</span>
                        <h3>Un projet en tete? Parlons-en.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="portfolio_image_area">
    <div class="discuss_projects" id="contactForm">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_text text-center">
                        <div class="main">
                            <div class="main-section">
                                <div class="login-form border border-light">
                                <h3>Contact</h3>
                                <p>Nous vous répondrons au plus vite.</p>
                                    <span></span>
                                    <form name="ContactForm" method="post">

                                        <h4>Nom Prénom</h4>
                                        <input type="text" name="name" class="user" placeholder="John Doe" maxlength="20"  autocomplete="off" required>

                                        <h4>Téléphone</h4>
                                        <input type="text" name="phonenumber" class="phone" placeholder="06 76 34 09 12" maxlength="20" required autocomplete="off">

                                        <h4>Email</h4>
                                        <input type="email" name="emailaddres" class="email" placeholder="Exemple@mail.com" required autocomplete="off">

                                        <h4>Sujet</h4>
                                        <input type="text" name="subject" class="email" placeholder="Sujet" maxlength="20" autocomplete="off" required>

                                        <h4>Message</h4>
                                        <textarea class="mess" name="message" placeholder="Message" maxlength="2500" required></textarea>
                                        <input type="submit" value="Envoyer" name="contact">
                                    </form>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Default form contact -->
</div>
<a id="button_top"></a>
    
<?php include 'partials/footer.php'; ?>
