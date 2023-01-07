<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- - primary meta tags-->
    <title>Welcome to - Rising Winzo</title>
    <meta name="title" content="Cryptoza - Trusted & Secure Trading Crypto Wallet">
    <meta name="description" content="This is a cryptocurrency wallet php template made by codewithsadee.">

    <!--  favicon-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- - custom css link-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- - google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- - preload images-->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body>

    <!-- - #HEADER-->
    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logobg.png" width="185" height="31" alt="Cryptoza home">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="./assets/images/logobg.png" width="185" height="31" alt="Cryptoza home">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li><a href="index.php" class="navbar-link">Home</a></li>
            
                    <li><a href="aboutus.php" class="navbar-link">About Us</a></li>
            
                    <li><a href="pricing.php" class="navbar-link">Business Plan</a></li>
                    
                    <li><a href="service.php" class="navbar-link">Services</a></li>
                    
                    <li><a href="contactus.php" class="navbar-link">Contact Us</a></li>

                </ul>

            </nav>

            <div class="btn-group">
                <a href="#" class="btn ghost-btn">Log In</a>

                <a href="#" class="btn btn-primary">Registration</a>
            </div>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-overlay data-nav-toggler></div>

        </div>
    </header>





    <main>
        <article>
            <section class="stats section instruction" aria-label="statistics" style="margin: 65px!important;">
                <h2 class="h2 section-title text-center" style="padding: 25px;">Contact Us</h2>
                <div class="container">
        
                  <div class="stats-content">
        
                    <div class="container">
                        <!-- action="/action_page.php" -->
                        <form>
                          <label for="fname"><strong>First Name</strong></label>
                          <input type="text" id="fname" name="firstname" placeholder="Your name..">
                      
                          <label for="lname"><strong>Last Name</strong></label>
                          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                      
                          <!-- <label for="country">Country</label>
                          <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                          </select> -->
                      
                          <!-- <label for="subject">Subject</label> -->
                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:auto"></textarea>
                      
                          <input type="submit" >
                        </form>
                      </div>
        
                  </div>
        
                  <figure class="stats-banner" style="width: 350px; border-radius: 25px!important;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d316.5579866124819!2d91.78530828977999!3d26.149640199707925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1673089928040!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </figure>
        
                </div>
              </section>

            <!-- - #APP-->

            <!-- <section class="app" aria-label="app">
                <div class="container">

                    <div class="app-card bg-gray">

                        <div class="card-content">

                            <h2 class="h2 section-title">We Are Also Available on IOS & Android</h2>

                            <p class="section-text">
                                This site regularly and would like to help keep the site on the Internet please consider
                                donating a
                                small.
                            </p>

                            <div class="btn-group">

                                <a href="#" class="btn btn-primary">
                                    <ion-icon name="logo-google-playstore" aria-hidden="true"></ion-icon>

                                    <div>
                                        <p class="btn-text">Available on the</p>

                                        <p class="btn-title">Play Store</p>
                                    </div>
                                </a>

                                <a href="#" class="btn btn-primary">
                                    <ion-icon name="logo-apple" aria-hidden="true"></ion-icon>

                                    <div>
                                        <p class="btn-text">Available on the</p>

                                        <p class="btn-title">Apple Store</p>
                                    </div>
                                </a>

                            </div>

                        </div>

                        <figure class="card-banner">
                            <img src="./assets/images/download-banner.png" width="383" height="384" loading="lazy"
                                alt="download banner" class="w-100">
                        </figure>

                    </div>

                </div>
            </section> -->

        </article>
    </main>

    <!-- - #FOOTER-->

    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="./assets/images/logobg.png" width="185" height="31" alt="Cryptoza home">
                    </a>

                    <p class="footer-text">Raising Winzo Is Offering service from past few decade and many people are
                        raising from us so we are trustworthy and valuable ssets to you.</p>

                </div>

                <ul class="footer-list">

                    <li>
                        <a href="#" class="footer-link">Home</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Market</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Trading</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Team</a>
                    </li>

                </ul>

                <div class="social-wrapper">

                    <p class="h3 social-list-title">Join the Conversation</p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-dribbble"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-behance"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    Copyright RAISING WINZO 2022. All rights reserved.
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="#" class="footer-bottom-link">Support</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link">Privacy Policy</a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>

    <!-- - custom js link-->
    <script src="./assets/js/script.js" defer></script>

    <!-- - ionicon-link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('.counter').counterUp({
                delay: 10,
                time: 1200
            });
        });
    </script>

</body>

</php>