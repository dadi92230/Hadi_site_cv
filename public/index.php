<?php
require('../admin/inc/init.inc.php');

//recuperation des info utilisateur (moi)
$resultat = $pdo -> query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '1'");
$ligne_utilisateur = $resultat -> fetch(PDO::FETCH_ASSOC);


        

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Hadi-SMAIL</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="top">

    <!-- header
    ================================================== -->
     <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html"><img src="images/3283885.png"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <!-- <li class="current"><a class="smoothscroll"  href="#home" title="home">Acceuil</a></li> -->
                <li><a class="smoothscroll"  href="#about" title="about">À propos de moi</a></li>
                <li><a class="smoothscroll"  href="#competences" title="competences">COMPETENCES</a></li>
                <li><a class="smoothscroll"  href="#Experiences" title="Experiences">EXPERIENCES</a></li>
                <li><a class="smoothscroll"  href="#Formation" title="Formation">FORMATION</a></li>
                <li><a class="smoothscroll"  href="#blog" title="blog">Blog</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->

    

   <!-- Acceuil================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="images/20160223152814-f4a40c15.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>BONJOUR</h3>

                <h1>
                   <p class="holder">
                       Je suis <?php echo $ligne_utilisateur['prenom'];?> <?php echo $ligne_utilisateur['nom'];?> . <br>
                   Développeur Intégrateur WEB/ Designer  <br>
                    Basé sur Paris.
                   </p>
                </h1>

                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        PLUS SUR MOI
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Défiler vers le bas</span>
                    </a>
                </div>

            </div>

        </div>
        <!-- reseau  -->
        <ul class="home-social">
            <!-- <li>
                <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li> -->
            <li>
                <a href="#"><i class="im im-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-pinterest" aria-hidden="true"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- fin reseau -->
    </section> <!-- Acceuil -->


   
    <!--  À PROPOS DE MOI===================== -->
    <section id="about" class="s-about target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h3>À PROPOS</h3>
                <h1>presentation</h1>
                <!-- <p>presentation </p> -->
            </div>
        </div>
    </section> <!-- end about -->
    <div class="black">.</div>


        <!-- competences -->
    <section id="competences" class="s-competences target-section"> <!-- end about -->
        <div  class="row ">
            <div class="col-full text-center">
                <h3>Mes compétences.</h3>
                 <?php
                $resultat = $pdo -> prepare("SELECT * FROM t_competences WHERE utilisateur_id ='1'");
                $resultat->execute();

                /*$ligne_competence = $resultat -> fetch();*/
                ?>
                <?php while ($ligne_competence = $resultat -> fetch()) { ?>
                                                
                <ul class="skill-bars">
                    <li>
                    <div class="progress  " style="width:<?= $ligne_competence['c_niveau'];?>%"><span><?= $ligne_competence['c_niveau'];?>%</span>
                    </div>
                    <strong><?= $ligne_competence['competence'];?></strong>
                    </li>    
                </ul>
                <?php } ?>
            </div>
        </div> <!-- fin competences -->
        <!-- bouton CV -->
        <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="CV Hadi Smail.pdf" class="btn btn--primary full-width">TÉLÉCHARGER MON CV</a>
            </div>
            <div class="col-six tab-full right">
                <a href="#contact" class="btn btn--primary full-width">ENGAGEZ-MOI MAINTENANT</a>
            </div>
        </div> <!-- fin de bouton CV -->
    </section> <!-- end about -->
    <div class="black">.</div>



        <!-- Experiences -->
    <section id="Experiences" class="s-Experiences target-section">
        <div   class="row about-content about-content--timeline">
            <div class="col-full text-center">
                <h3>Mes Experiences.</h3>

            <?php /*recuperation des experiences*/
                $resultat = $pdo -> prepare("SELECT * FROM t_experiences WHERE utilisateur_id ='1'");
                 $resultat->execute();?>


                 <?php while ($ligne_experience = $resultat -> fetch()) { ?>
                    <div class="col-six tab-full ">
                        <div class="timeline">

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <p class="timeline__timeframe"><?= $ligne_experience['e_dates'];?></p>
                                    <h3><?= $ligne_experience['e_titre'];?></h3>
                                    <h5><?= $ligne_experience['e_soustitre'];?></h5>
                                </div>
                                <div class="timeline__desc">
                                    <p><?= $ligne_experience['e_description'];?>.</p>
                                </div>
                            </div> <!-- end timeline__block -->
                            
                        </div> <!-- end timeline -->
                    </div> <!-- end left -->
                <?php } ?>
            </div> <!-- end timeline -->
        </div> <!-- end left -->
    </section>
    <div class="black">.</div>


        <!-- formation -->
    <section id="Formation" class="s-Formation target-section">
         <div  class="row about-content about-content--timeline">
            <div class="col-full text-center">
                <h3>Mes Formation.</h3>

            <?php /*recuperation des formation*/
                $resultat = $pdo -> prepare("SELECT * FROM t_formations WHERE utilisateur_id ='1'");
                    $resultat->execute();
                ?>


                 <?php while ($ligne_formation = $resultat -> fetch()) { ?>
                    <div class="col-six tab-full ">
                        <div class="timeline">

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <p class="timeline__timeframe"><?= $ligne_formation['f_dates'];?></p>
                                    <h3><?= $ligne_formation['f_titre'];?></h3>
                                    <h5><?= $ligne_formation['f_soustitre'];?></h5>
                                </div>
                                <div class="timeline__desc">
                                    <p><?= $ligne_formation['f_description'];?>.</p>
                                </div>
                            </div> <!-- end timeline__block -->
                            
                        </div> <!-- end timeline -->
                    </div> <!-- end left -->
                <?php } ?>
            </div> <!-- end timeline -->
        </div> <!-- end left -->
    </section>
    <div class="black">.</div>
    
            

    <section id="blog" class="s-blog target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Journal</h3>
                <h1>Latest From The Blog.</h1>
                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute. 
                Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum 
                ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class="row blog-content">
            <div class="col-full">

                <div class="blog-list block-1-2 block-tab-full">
                    <article class="col-block">
                                
                        <div class="blog-date">
                            <a href="blog-single.html">Sept 16, 2017</a>
                        </div>  
                        
                        <h2 class="h01"><a href="blog-single.html">The 10 Golden Rules of Clean Simple Design.</a></h2>
                        <p>
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh..
                        </p>

                        <div class="blog-cat">
                                <a href="blog.html">Branding</a><a href="blog.html">Design</a>
                        </div>

                        
                    </article>
                    <article class="col-block">
                                
                        <div class="blog-date">
                            <a href="blog-single.html">Sept 15, 2017</a>
                        </div>  
                        
                        <h2 class="h01"><a href="blog-single.html">Photography Can Improve Your Graphic Design.</a></h2>
                        <p>
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh..
                        </p>

                        <div class="blog-cat">
                            <a href="blog.html">Photography</a>
                        </div>

                        
                    </article>
                    <article class="col-block">
                        
                        <div class="blog-date">
                            <a href="blog-single.html">Sept 14, 2017</a>
                        </div>

                        <h2 class="h01"><a href="blog-single.html">Workspace Design Trends and Ideas.</a></h2>
                        <p>
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh dolore irure esse Duis nulla sint.
                        </p>

                        <div class="blog-cat">
                            <a href="blog.html">Branding</a><a href="blog.html">Wordpress</a>
                        </div>
                    </article>
                    <article class="col-block">
                        
                        <div class="blog-date">
                            <a href="blog-single.html">Sept 12, 2017</a>
                        </div>    
                        <h2 class="h01"><a href="blog-single.html">Using Patterns in your Branding.</a></h2>
                        <p>
                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh.
                        </p>

                        <div class="blog-cat">
                            <a href="blog.html">Design</a><a href="blog.html">Branding</a>
                        </div>
                    </article>
                </div> <!-- end blog-list -->

            </div> <!-- end col-full -->
        </div> <!-- end blog-content -->

    </section> <!-- end s-blog -->




    <!-- s-stats
    ================================================== -->
    <section id="stats" class="s-stats">
        <div class="row block-1-3 block-tab-1-2 block-mob-full stats">

            
            <div class="col-block stats__col">
                <div class="stats__count">
                    500
                </div>
                <h4>Tasses de café</h4>
            </div>
            <div class="col-block stats__col stats__col--highlight">
                <div class="stats__upsign">
                    <a href="#"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
                <div class="stats__count">
                    33
                </div>
                <h4>Projets terminés</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    30
                </div>
                <h4>Clients heureux</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h3>Contact</h3>
                <h1>Dis bonjour.</h1>
                
                
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight tab-full contact__form">
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">SOUMETTRE</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class="col-four tab-full contact__infos">
                <h4 class="h06">Phone</h4>
                <p>Phone: (+33) 7 69 60 02 52<br>
                Mobile: (+33) 7 83 13 58 63
                </p>

                <h4 class="h06">Email</h4>
                <p>hadi.web@hotmail.fr<br>
                
                </p>

                <h4 class="h06">Address</h4>
                <p>
                6, rue Jean Moulin<br>
                Gennevilliers<br>
                92230 FR
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <!-- <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/3283885.png" alt="Homepage"></a>
                </div> -->

                <ul class="footer-social">
                    <!-- <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li> -->
                    <li><a href="https://twitter.com/dadi_smail">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                   <!--  <li><a href="#0">
                        <i class="im im-behance" aria-hidden="true"></i>
                        <span>Behance</span>
                    </a></li> -->
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href="http://www.hadi-smail.com/">hadi-smail</a></span>
                    <span><a href="../admin/index.php">admin</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
