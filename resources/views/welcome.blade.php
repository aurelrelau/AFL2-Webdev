<!DOCTYPE html>
<html lang="en">

<head>
  <title>Aurelia Personal Portfolio</title>x
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

  <a class="menu-btn"><span></span></a>

  <div class="container-fluid overflow-hidden">

    <header id="header-nav" class="col-lg-2 position-fixed px-5 bg-white h-100">
      <div class="header-wrap d-flex flex-column justify-content-between h-100">
        <div class="navigation">
          <div class="site-logo mt-5">
            <a href="index.html">
              <img src="images/main-logo.png" alt="logo" class="img-fluid">
            </a>
          </div>

          <nav id="one-page-menu" class="vertical-menu my-5">
            <ul class="menu-list list-unstyled">
              <li><a href="#home" class="nav-link">Home</a></li>
              <li><a href="#about" class="nav-link">About</a></li>
              <li><a href="#experience" class="nav-link">Profile</a></li>
              <li><a href="#portfolio" class="nav-link">Activity</a></li>
              <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>
        </div>
      </div>
    </header>

    <main class="col-lg-10 offset-lg-2">
      <div class="container">

        <!-- content wrapper -->
        <div class="justify-content-center px-1 mx-1 px-xl-5 mx-xl-5">

        <section id="home" class="py-5 bg-text" data-text="01">
        <div class="row">
            <div class="col-lg-6">
            <div class="banner-image text-center" data-aos="fade-right">
                <img src="images/banner-image.png" alt="banner" class="img-fluid">
            </div>
            </div>
            <div class="col-lg-6">
            <div class="banner-content my-1 pt-1 my-lg-5 pt-lg-5" data-aos="fade-in">
                <span class="text-muted text-uppercase">Undergraduate Informatics Student</span>
                <h1 class="banner-title display-xl lh-1 txt-fx slide-up">Aurelia Nata</h1>
            </div>
            </div>
        </div>
        </section>
          <section id="about" class="my-5 py-5 bg-text" data-text="02">
            <div class="row d-flex flex-wrap" data-aos="fade-up">
              <div class="col-lg-6 pb-5">
                <span class="text-muted text-uppercase">BIODATA</span>
                <h2 class="display-4 txt-fx slide-up">Education</h2>
                <div class="data-info py-3" data-aos="fade-up">
                  <span class="meta-date">2021 - 2023</span>
                  <h3 class="info-title">Social Sciences Department</h3>
                  <p>Zion Senior High School Makassar</p>
                </div>
                <div class="data-info" data-aos="fade-up" data-aos-delay="100">
                  <span class="meta-date">2023 - present</span>
                  <h3 class="info-title">Full Stack Development Informatics Department</h3>
                  <p>Ciputra University Surabaya</p>
                </div>
              </div>
              <div class="col-lg-6 pb-5">
                <h2 class="display-4 txt-fx slide-up">About Me</h2>
                <div class="data-info py-3" data-aos="fade-up" data-aos-delay="200">
                  <p>Hi, I’m Aurelia! Currently, I am a 3rd semester student at Universitas Ciputra Makassar,
                    majoring in IMT - App Development. I am currently learning a lot about frontend development,
                    including how to design an attractive and easy-to-use interface using HTML, CSS, and JavaScript.</p>
                  <In>In addition to studying, I am active in several campus organizations that allow me to collaborate and develop leadership skills.
                    I am also often involved in various campus events, from mentoring new students to creating podcasts about future technology.
                    All of these experiences help me continue to grow.</p>
                </div>
              </div>
            </div>
          </section>

          <section id="experience" class="my-5 py-5 bg-text" data-text="03">
            <div class="row justify-content-center mb-5">
              <div class="col-lg-6" data-aos="fade-up">
                <span class="text-muted text-uppercase">introduction</span>
                <h2 class="display-1 txt-fx slide-up">Profile</h2>
                <p>A little information about me and Expertise.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="info-element py-4" data-aos="fade-up">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Age</th>
                        <td>19</td>
                      </tr>
                      <tr>
                        <th>Residence</th>
                        <td>Indonesia</td>
                      </tr>
                      <tr>
                        <th>Education</th>
                        <td>3rd Semester</td>
                      </tr>
                      <tr>
                        <th>E-mail</th>
                        <td><a href="#">nataaureliadavineputri@gmail.com</a></td>
                      </tr>
                      <tr class="no-border-bottom">
                        <th>Phone</th>
                        <td>+62 813 4249 6226</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="skill-chart py-4" data-aos="fade-up">
                  <ul class="skill-chart-list list-unstyled">
                    <li>
                      <div class="chart-header d-flex justify-content-between">
                        <span class="skill-title">HTML</span>
                        <span class="percentage">70%</span>
                      </div>
                      <div class="chart-border">
                        <div class="chart-percentage ninety-percent"></div>
                      </div>
                    </li>
                    <li>
                      <div class="chart-header d-flex justify-content-between">
                        <span class="skill-title">CSS</span>
                        <span class="percentage">80%</span>
                      </div>
                      <div class="chart-border">
                        <div class="chart-percentage ninety-percent"></div>
                      </div>
                    </li>
                    <li>
                      <div class="chart-header d-flex justify-content-between">
                        <span class="skill-title">Figma</span>
                        <span class="percentage">90%</span>
                      </div>
                      <div class="chart-border">
                        <div class="chart-percentage eighty-percent"></div>
                      </div>
                    </li>
                    <li>
                      <div class="chart-header d-flex justify-content-between">
                        <span class="skill-title">Java Script</span>
                        <span class="percentage">40%</span>
                      </div>
                      <div class="chart-border">
                        <div class="chart-percentage seventy-percent"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section id="portfolio" class="my-5 py-5 bg-text" data-text="04">
            <div class="section-header my-5" data-aos="fade-up">
              <div class="row justify-content-center g-5">
                <div class="col-lg-4">
                  <span class="text-muted text-uppercase">some of my recent works and activity</span>
                  <h2 class="display-1 txt-fx slide-up">Activity</h2>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                  <p>Get to know my activity in campus.</p>
                  <a href="portfolio-masonry.html" class="btn btn-dark px-5 py-4">View All</a>
                </div>
              </div>
            </div>
            <div class="swiper portfolio-Swiper portfolio-content py-4" data-aos="fade-up">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="image-holder">
                    <a href="single-portfolio.html" title="portfolio details"><img src="images/port-item1.jpg"
                        alt="portfolio" class="img-fluid"></a>
                  </div>
                  <div class="caption d-flex justify-content-between align-items-center">
                    <div class="title">Infinity Mantai Karaoke</div>
                    <a href="#" class="image-format bg-orange"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <a href="single-portfolio.html" title="portfolio details"><img src="images/port-item2.jpg"
                        alt="portfolio" class="img-fluid"></a>
                  </div>
                  <div class="caption d-flex justify-content-between align-items-center">
                    <div class="title">Hackathon Devforge</div>
                    <a href="#" class="image-format bg-orange"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <a href="single-portfolio.html" title="portfolio details"><img src="images/port-item3.jpg"
                        alt="portfolio" class="img-fluid"></a>
                  </div>
                  <div class="caption d-flex justify-content-between align-items-center">
                    <div class="title">Oweek as AMD 2024</div>
                    <a href="#" class="image-format bg-blue"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <a href="single-portfolio.html" title="portfolio details"><img src="images/port-item4.jpg"
                        alt="portfolio" class="img-fluid"></a>
                  </div>
                  <div class="caption d-flex justify-content-between align-items-center">
                    <div class="title">Mantai Halloween 2024</div>
                    <a href="#" class="image-format bg-blue"></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="image-holder">
                    <a href="single-portfolio.html" title="portfolio details">
                    <img src="images/port-item5.jpg" alt="portfolio" class="img-fluid"></a>
                  </div>
                  <div class="caption d-flex justify-content-between align-items-center">
                    <div class="title">Election Day 2024</div>
                    <a href="#" class="image-format"></a>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination mt-5"></div>
            </div>
          </section>

          <section id="contact" class="my-5 py-5 bg-text" data-text="05">
            <div class="container">
              <div class="row justify-content-center mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                  <span class="text-muted text-uppercase">Personal Info</span>
                  <h2 class="display-1 txt-fx slide-up">Contact Me</h2>
                  <p>Feel free to reach out for collaborations, inquiries, or just to say hi—I’d love to connect with you!.</p>
                </div>
              </div>
              <div class="contact-me">
                <div class="social-links">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/aurlrel" target="_blank">
                    <img src="images/ig.jpg" alt="portfolio" class="img-logo"></a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/AureliadavineputriNata" target="_blank">
                    <img src="images/link.jpg" alt="linkedin" class="img-logo"></a>
                    </a>

                    <!-- Email -->
                    <a href="mailto:nataaureliadavineputri@gmail.com" target="_blank" title="Email">
                    <img src="images/gmail.jpg" alt="Email" class="social-icon">
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/aurel0365" target="_blank" title="GitHub">
                    <img src="images/github.jpg" alt="GitHub" class="social-icon">
                    </a>
                </div>
                </div>


              </div>
            </div>
          </section>

        </div>
        <!-- / content wrapper -->

      </div>
    </main>

  </div>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
