<?php

if ( ! session_id() ) @ session_start();

$mailSuccess = false;
$mailNotSuccess = false;
$captchaNotSuccess = false;

if (isset($_POST["submit"])) {
  if (isset($_POST["email"])) {
    $headers = "From:" . $_POST["email"];
    $subject = $_POST["name"];
    $body = $_POST["message"];
    $check = $_POST["check"];

    if ( $_SESSION['c'] == $check ) {
        if ( mail("contact@olexandr-kuriachiy.net.ua", $subject, $body, $headers)) {
          $mailSuccess = true;
        } else {
          $mailNotSuccess = true;
        }
    } else {
       $captchaNotSuccess = true;
    }
  } else {
    $mailNotSuccess = true;
  }
}

$_SESSION['a'] = rand(1, 10);
$_SESSION['b'] = rand(1, 10);
$_SESSION['c'] = $_SESSION['a'] + $_SESSION['b'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Olexandr Kuriachiy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
            function validateForm() {
              var name = document.forms["sendEmailForm"]["name"].value;
              if (name == "") {
                document.getElementById("requireName").style.display = "block";
                return false;
              }
              var email = document.forms["sendEmailForm"]["email"].value;
              if (email == "") {
                document.getElementById("requireEmail").style.display = "block";
                return false;
              }
              if (!validateEmail( email ) ) {
                document.getElementById("notValidEmail").style.display = "block";
                return false;
              }

              var message = document.forms["sendEmailForm"]["message"].value;
              if (message == "") {
                document.getElementById("requireMessage").style.display = "block";
                return false;
              }
              var check = document.forms["sendEmailForm"]["check"].value;
              if (check == "") {
                document.getElementById("requireCheck").style.display = "block";
                return false;
              }
              return true;
            }

            function validateEmail(email)
            {
             if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
              {
                return (true)
              }
              return (false)
            }
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">OLEXANDR KURIACHIY</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">My skills</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact me</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">I AM YOUR GAME DEVELOPER</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">JAVASCRIPT/TYPESCRIPT GAME DEVELOPER</p>
            </div>
        </header>
        <!-- About Section-->
        <section class="page-section" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase  text-secondary mb-0">ABOUT ME</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">I am skilled and proficient when it comes to Game Development (HTML5, CreateJs, PixiJs, Cocos Creator), Flash Animation (Actionscript 3.0), or any Graphic Designs related, and I can assure you my reliability and dedication when it comes to work.. I'm Currently working as a full-time Game Developer. If you want to know further information about me, just let me know..</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><img src="assets/img/freelancer.jpg"></p></div>
                </div>
            </div>
        </section>
        <!-- Skills Section-->
        <section class="page-section portfolio bg-primary text-white text-center" id="skills">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">MY SKILLS</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/js.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">JavaScript</div>
                        <div>JavaScript is among the most powerful and flexible programming languages of the web. It powers the dynamic behavior on most websites.</div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/ts.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">TypeScript</div>
                        <div>TypeScript is a web development programming language based on JavaScript. Makes the code clearer and more reliable, adds static typing (variables are bound to specific data types), and can also be compiled into JavaScript.</div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/pixi.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Pixi JS</div>
                        <div>PixiJS is a rendering library that will allow you to create rich, interactive graphics, cross-platform applications, and games without having to dive into the WebGL API or deal with browser and device compatibility.</div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/cocos.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Cocos Creator</div>
                        <div>Cocos Creator is a script development, entity-component and data-driven game development tool focused on content creation. It comes with an easy-to-follow content production workflow and a powerful suite of developer tools for game logic and high-performance game creation.</div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/easel.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Easel JS</div>
                        <div>A JavaScript library that makes working with the HTML5 Canvas element easy. Useful for creating games, generative art, and other highly graphical experiences.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/gsap.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Green Sock</div>
                        <div>The GreenSock Animation Platform is a powerful JavaScript library that enables front-end developers and designers to create robust timeline based animations.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/fb.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Facebook Instant Games</div>
                        <div>Instant Games let people play games on any device, mobile or desktop, right in the Facebook News Feed. There’s no download time, the games are highly social, and it’s easy to invite friends.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/howler.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Howler JS</div>
                        <div>Audio library for the modern web. howler.js makes working with audio in JavaScript easy and reliable across all platforms.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/node.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Node JS</div>
                        <div>Node.js is a single-threaded, open-source, cross-platform runtime environment for building fast and scalable server-side and networking applications.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/socketio.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Socket.IO</div>
                        <div>Socket.IO is a library that enables real-time, bidirectional and event-based communication between the browser and the server.</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto">
                            <img class="img-fluid" src="assets/img/skills/git.jpg" alt="..." />
                        </div>
                        <div class="lead mb-0">Git</div>
                        <div>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">PORTFOLIO</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://vps27605ua.hyperhost.name:9000/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/online_poker.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://fb.gg/play/free_poker_online" target="_blank"><img class="img-fluid" src="assets/img/portfolio/online_poker_fb.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://bw-blackjack.bwhale.biz/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/bwblackjack.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://bw-euroroulette.bwhale.biz/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/bweuropeanroulette.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="http://euroroulette.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/euroroulette.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://americanroulette.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/americanroulette.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://blackjack.bwhale.biz/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/blackjack.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://blackjack-five-hands.bwhale.biz/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/bj_5hands.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://genies-magical-lamp.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/genies_magical_lamp.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://get-it-done.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/get_it_done.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://freds-golden-path.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/freds_golden_path.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://lucky-red-head.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/lucky_red_head.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://kingdoms.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/kingdoms.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://gang-spinners.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/gang_spinners.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://boo.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/boo.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://pirates.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/pirates.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://aztec-gold.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/aztec_gold.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://african-masks.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/african_masks.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://jack-in-a-box.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/jack_in_a_box.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://classic-seven.gettagaming.com/" target="_blank"><img class="img-fluid" src="assets/img/portfolio/classic_seven.jpg" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-md-auto mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="https://vps27605ua.hyperhost.name:9000/Match3Test/tool.html" target="_blank"><img class="img-fluid" src="assets/img/portfolio/furious_girl.jpg" alt="..." /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form method="post" id="contactForm" action="/" onsubmit="return validateForm()" name="sendEmailForm">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div id="requireName" class="invalid-feedback">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div id="requireEmail" class="invalid-feedback">An email is required.</div>
                                <div id="notValidEmail" class="invalid-feedback">Email is not valid.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div id="requireMessage" class="invalid-feedback">A message is required.</div>
                            </div>

                            <!-- Check number-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="check" name="check" data-sb-validations="required" />
                                <label for="check"><?php echo $_SESSION["a"]." + ".$_SESSION["b"] . " = ?" ?></label>
                                <div id="requireCheck" class="invalid-feedback">Check number is required.</div>
                            </div>

                            <!-- Submit success message-->
                            <div <?php if (!$mailSuccess) { ?>class="d-none"<?php } ?> >
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <div <?php if (!$mailNotSuccess) { ?>class="d-none"<?php } ?> ><div class="text-center text-danger mb-3">Error sending message!</div></div>

                            <!-- Submit error captcha-->
                            <div <?php if (!$captchaNotSuccess) { ?>class="d-none"<?php } ?> ><div class="text-center text-danger mb-3">Check number error!</div></div>
                            <!-- Submit Button-->
                            <input class="btn btn-primary btn-xl" type="submit" name="submit" value="Send Email">

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-start lead">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-md-5 mb-2">
                        <img src="assets/img/icons/location.png"> 64302 Ukraine, Kharkiv region, Izium city Nezalejnosti avenu 48B/16
                    </div>
                    <div class="col-md-5 mb-2">
                        <img src="assets/img/icons/phone.png"> +380668928495
                    </div>
                    <div class="col-md-5 mb-2">
                        <img src="assets/img/icons/telegramm.png"> @Olexandr_Kuriachiy
                    </div>
                    <div class="col-md-5 mb-2">
                        <img src="assets/img/icons/email.png"> contact@olexandr-kuriachiy.net.ua
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Olexandr Kuriachiy 2022</small></div>
        </div>        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
