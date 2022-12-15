<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>thegallery | Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/gallery.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style-gallery.css">
    <link rel="stylesheet" href="css/style-gallery-2.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- PHP GALLERY -->
    <!-- <link rel="import" href="importla/phpgallery.html">
    <link rel="import" id="sablon" href="index.html"> -->

    <style>
        .text-contact {
            text-decoration: none;
            color: black;
        }

        .text-contact:hover {
            text-decoration: none;
            color: black;
        }

        .iframe-gallery-section {
            width: 100%;
            height: auto;
            background-image: linear-gradient(to right, rgba(205, 194, 194, 0.379), rgba(142, 131, 131, 0.719));
        }

        .iframe-gallery {
            width: 100%;
            height: 90vh;
        }

        /* CONTACT BTN */
        /* .contact-btn {
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .contact-btn:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .contact-btn:active {
            color: #000
        }

        .contact-btn:active:after {
            background: transparent;
        }

        .contact-btn:hover:before {
            opacity: 1;
        }

        .contact-btn:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        } */

        /* SCROLL BAR */
        ::-webkit-scrollbar {
            width: 8px;
            z-index: 1500;
        }

        /* SCROLL BAR */
        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 5px;
            outline: 1px solid slategrey;
            width: 8px;
        }

        /* SCROLL BAR */
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgba(84, 84, 84, 0.408);
            border-radius: 10px;
            outline: 1px solid slategrey;
            width: 8px;
        }

        /* SCROLL BAR */
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #727272;
            width: 8px;

        }

        ::-webkit-scrollbar-thumb {
            width: 8px;
        }

        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            z-index: 20000;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }
    </style>
</head>

<body id="page-top">

    <!-- LOADER -->
    <div id="loading">
        <img src="assets/infinity_3.gif" alt="Yükleniyor..." />
    </div>
    <script>
        // window.addEventListener('load', fg_load) 
        //AÇINCA UZUN SÜRE KALIR TÜM BİLEŞENLER GELENE KADAR.

        setTimeout(function fg_load() {
            document.getElementById('loading').style.display = 'none'
        }, 5500); 
    </script>


    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-head navbar-brand fw-bold" href="#page-top">thegallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item "><a class="navbar-brand fw-lighter"
                            href="developer/developer.html">Developer</a></li>
                    <li class="nav-item "><a class="fw-lighter nav-link me-lg-3" href="#">About Us</a></li>
                    <li class="nav-item "><a class="fw-lighter nav-link me-lg-3" href="#about-us">Privacy</a></li>
                    <li class="downloadbtn nav-item "><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    </li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                    data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Contact</span>
                    </span>
                </button>
                <button class="loginbtn btn btn-primary rounded-pill ml-10 px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-person me-2"></i>
                        <span onclick="window.location.href='form/login.php';" class="small">Login</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>


    <div class="space-around">
        <!-- BOŞ BIRAK !! -->
    </div>


    <!-- RANDOM FOTOĞRAF GALERİSİ -->
    <div class="gallery" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,care" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,studied" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,crew" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,event" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,5" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,practical" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,pass" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bigger" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,instrument" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/4 alt=""></div>
        </div>
        <div class=" gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,line" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/2" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,pride" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,too" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,bottle" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,base" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,cell" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,bag" alt=""></div>
            </div>
            <div class="gallery-item">
                <div class="content"><img src="https://source.unsplash.com/random/?tech,railroad" alt=""></div>
            </div>
        </div>

        
        <!-- SLİDER SHOW HEADER -->
        <header class="masthead">
            <div class="container-slideshow px-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carosel carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/2.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/3.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/4.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/5.jpg" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>+
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </header>



        <!-- SLOGAN VE ICON -->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"A picture is a poem without words."</div>
                        <img src="assets/img/gallery.jpg" alt="..." style="height: 3rem" />
                    </div>
                </div>
            </div>
        </aside>

        <!-- <div class="import-class container">
        <a href="../importla/index.html">hedef</a>
        </div> -->

        <!-- REAL GALLERY İMPORT !! İMPORTLANAN GALERİ -->
        <section class="iframe-gallery-section ">
            <div>
                <iframe class="iframe-gallery" src="importla/phpgallery.html" height="720px" width="98%"
                    frameborder="0"></iframe>

            </div>
        </section>


        <!-- SOSYAL MEDYA BÖLÜMÜ -->
        <section class="bg-gradient-primary-to-secondary" id="social-medias">
            <div class="container px-5">
                <h2 class="text-center text-white font-alt mb-4">Follow Us Social Media</h2>
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                    <!-- <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="images/4.jpg" alt="..." /></a>
                    <a href="#!"><img class="app-badge" src="images/5.jpg" alt="..." /></a> -->
                    <a class="btn btn-primary m-2" style="background-color: #555555d1;" href="#!" role="button">
                        <i class="bi-instagram">
                        </i>
                    </a>
                    <a class="btn btn-primary m-2" style="background-color: #555555d1;" href="#!" role="button">
                        <i class="bi-facebook">
                        </i>
                    </a>
                    <a class="btn btn-primary m-2" style="background-color: #555555d1;" href="#!" role="button">
                        <i class="bi-twitter">
                        </i>
                    </a>
                    <a class="btn btn-primary m-2" style="background-color: #555555d1;" href="#!" role="button">
                        <i class="bi-linkedin">
                        </i>
                    </a>
                    <a class="btn btn-primary m-2" style="background-color: #555555d1;" href="#!" role="button">
                        <i class="bi-github">
                        </i>
                    </a>
                    <!-- <a class="social-icons m-2 b" href="#!"><i class="bi-instagram"></i></a>
                    <a class="social-icons m-2" href="#!"><i class="bi-facebook"></i></a>
                    <a class="social-icons m-2" href="#!"><i class="bi-twitter"></i></a>
                    <a class="social-icons m-2" href="#!"><i class="bi-linkedin"></i></a>
                    <a class="social-icons m-2" href="#!"><i class="bi-github"></i></a> -->
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">

                <div class="text-white-50 small">
                    <p id="about-us">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ea amet officiis,
                        enim velit saepe aut
                        assumenda inventore odio blanditiis aspernatur harum minima? Obcaecati, at. Provident vitae quam
                        quos aut fugiat aliquam similique delectus, sunt aperiam nam corporis? Iusto officia vitae
                        similique
                        debitis dignissimos soluta voluptatibus placeat nisi atque porro?</p>
                    <div class="mb-2">
                        <a href="developer/developer.html">&copy; Muhammed Sayar & Hamza Dursun Gündüz Website
                            2022</a>
                    </div>

                    <a href="./form/privacy.html" target="_blank">
                        <!-- <button class="btn btn-primary px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                        data-bs-target="#privacyModalLabel">
                        <span class="d-flex align-items-center">
                            <i class="bi-archive me-2"></i>
                            <span class="small">Privacy</span>
                        </span>
                    </button> -->
                        Privacy
                    </a>
                    <span class="bi-fa mx-1">&middot;</span>
                    <a href="./form/privacy.html" target="_blank">Terms</a>
                    <!-- <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a> -->
                    <br>
                </div>
            </div>
        </footer>


        <!-- FEEDBACK MODAL -->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" required/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" required/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" required/>
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text"
                                    placeholder="Enter your message here..." style="height: 10rem"
                                    data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href=""></a>
                                </div>
                            </div>

                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-flex">
                                <button class="btn btn-primary rounded-pill btn-lg" id="submitButton"
                                    type="submit">Submit
                                </button>
                                <button class="btn btn-light rounded-pill btn-lg ml-auto ">
                                    <a href="contact/contact.html" class="text-contact">Contact</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- 2. İMPORTLAMA YOLU -->
        <!-- <script>
            var call_sablon = document.querySelector('#sablon');
        </script> -->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script-gallery.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
</body>

</html>