<!--================== Hallo bro ... ===================================================================================
  ==================== Nyari apa nih hehe .... =========================================================================


      ░█████╗░██████╗░██████╗░██╗  ███╗░░██╗██╗░░░██╗██████╗░  ██╗███╗░░██╗░██████╗░█████╗░███╗░░██╗
      ██╔══██╗██╔══██╗██╔══██╗██║  ████╗░██║██║░░░██║██╔══██╗  ██║████╗░██║██╔════╝██╔══██╗████╗░██║
      ███████║██████╔╝██║░░██║██║  ██╔██╗██║██║░░░██║██████╔╝  ██║██╔██╗██║╚█████╗░███████║██╔██╗██║
      ██╔══██║██╔══██╗██║░░██║██║  ██║╚████║██║░░░██║██╔══██╗  ██║██║╚████║░╚═══██╗██╔══██║██║╚████║
      ██║░░██║██║░░██║██████╔╝██║  ██║░╚███║╚██████╔╝██║░░██║  ██║██║░╚███║██████╔╝██║░░██║██║░╚███║
      ╚═╝░░╚═╝╚═╝░░╚═╝╚═════╝░╚═╝  ╚═╝░░╚══╝░╚═════╝░╚═╝░░╚═╝  ╚═╝╚═╝░░╚══╝╚═════╝░╚═╝░░╚═╝╚═╝░░╚══╝

======================================================================================================================== -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#4285f4">
        <!-- Bootstrap CSS murni -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portofolio | Muhamad Ardi Nur Insan</title>

        <!-- icon page -->
        <link href="assets/img/ard.ico" rel="shortcut icon">

        <!-- css font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <!--===== Typed CDN =====-->
        <script src="assets/js/typed.js"></script>

        <style>
            .custom-shape-divider-bottom-1602382127 {
                position: relative;
                z-index: -1;
                margin-top: -210px;
                left: 0;
                width: 100%;
                overflow: hidden;
                line-height: 0;
                transform: rotate(180deg);
            }
            
            .custom-shape-divider-bottom-1602382127 svg {
                position: relative;
                display: inline;
                width: calc(122% + 1.3px);
                height: 220px;
            }
            
            .custom-shape-divider-bottom-1602382127 .shape-fill {
                fill: #3333ff;
            }
        </style>

    </head>
    <body>
        <div id="musik"></div>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Muhamad Ardi Nur Insan</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul  class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#Gallery" class="nav__link">Gallery</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>

                </div>
                <!-- <div class="menu-toggle">
                    <input type="checbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Ardi</span> <br> <span id="typed" class="typed"></span></h1>

                    <a href="#" onclick="getCv()" class="btn btn-primary btn-sm tmbl button"><i class="fas fa-file-download"> </i> Download CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.youtube.com/channel/UC-7CE3Dvl9K5_2pvs7N4gDA" target="_blank" class="home__social-icon"><i class='bx bxl-youtube'></i></a>
                    <a href="/" class="home__social-icon"><i class='fas fa-globe'></i></a>
                    <a href="https://github.com/ardinur03" target="_blank" class="home__social-icon"><i class='bx bxl-github'></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/hero-profile.svg" alt="">
                </div>
            </section>

            <div class="custom-shape-divider-bottom-1602382127">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div class="text-center">
                        <h2 class="about__subtitle">Saya Muhamad Ardi Nur Insan</h2>
                        <p class="about__text">Membuat algoritma yang terstruktur adalah kunci dari sebuah sistem itu dapat berjalan dengan baik.</p>  
                        <hr> 
                        <p class="about__text">Saya adalah seoarang siswa Sekolah Menengah Kejuruan Negeri 11 Kota Bandung. Saya memilih jurusan RPL(Rekayasa Perangkat Lunak) karena Saya suka dengan pemrograman dan suka mencoba hal hal baru dalam pemrograman. </p>        
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">Skill saya dalam pembuatan website.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class="fab fa-php skills__icon"></i>
                                <span class="skills__name"> PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/w3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="Gallery">
                <h2 class="section-title">Gallery</h2>

                <div class="work__container bd-grid">
                    <div class="work__img skull">
                        <img src="assets/img/gallery1.jpg" height="250px" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/gallery2.jpeg" alt="">
                    </div>
                    <div class="work__img imageku">
                        <img src="assets/img/gallery3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/gallery4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/gallery5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/gallery6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="container fluid">
                    <div class="row">
                        <div class="contact__container bd-grid">
                            <form action="/contact/thanks" class="contact__form" data-netlify="true">
                                <input type="text" placeholder="Nama" name="name" class="contact__input" required>
                                <input type="email" placeholder="Email" name="email" class="contact__input" required>
                                <textarea name="message" placeholder="Pesan kamu.." id="" cols="0" rows="10" class="contact__input" required></textarea>
                                <button type="submit" class="contact__button btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> &nbsp; Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer id="footer" class="footer">
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://instagram.com/ardinur_03" target="_blank" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/Ardinur03" target="_blank" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&copy; Copyright <script> document.write(new Date().getFullYear());</script> <i class="fas fa-heart"></i> Designed by <a href="/"> ardinur_03</a>
            </p>
        </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.js"></script>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>