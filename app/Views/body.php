<?=$this->extend('layout')?>
<?=$this->section('bodycontent')?>

   

   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div class="hero-container">
      <h1>Welcome</h1>
      <h2>I'm Sarah Syakira Rambe</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p>Get to know about me</p>
        </div>
       
        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
            <?php foreach ($portofolio as $p) :?>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <?= $p['full_name']; ?></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Date of Birth:</strong> <?= $p['birth_date']; ?></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <?= $p['age']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone Number:</strong> <?= $p['phone_number']; ?>></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <?= $p['email']; ?></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <?= $p['city']; ?></li>
                  </ul>
                </div>
              </div>
            <?php endforeach?>  
            </div><!-- End .content-->
        
            <div class="skills-content ps-lg-4">
            <h3 class="resume-title">Soft Skills</h3>
              <div class="progress">
                <span class="skill">Time Management<i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">communication<i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Productivity & Organization<i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="skills-content ps-lg-4">
            <h3 class="resume-title">Language Skills</h3>
              <div class="progress">
                <span class="skill">Indonesia Language<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">English Language<i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section><!-- End About Me Section -->
   

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <p><em>A student of Informatics Engineering at Universitas Muhammadiyah Sukabumi.  Interested in web development and UI/UX design. Experienced in organizational activities as a member of the Public Relations Department and as Secretary in BEM-FSAINTEK. Possesses good communication skills gained from organizational and committee experiences.</em></p>
          <p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Sarah Syakira Rambe</h4>
              <ul>
                <li>Sukabumi, Jawa Barat</li>
                <li>+62 85872322510</li>
                <li>rambesarah03@gmail.com</li>
              </ul>
              </p>
            </div>
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>SMA Al-Masthuriyah | IPS</h4>
              <h5>2018 - 2021</h5>
            </div>
            <div class="resume-item">
              <h4>Universitas Muhammadiyah Sukabumi | Informatics Engineering (IPK 3.77/4.00)</h4>
              <h5>2021 - Now</h5>
            </div>
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Program Penguatan Kapasitas Organisasi Kemahasiswaan</h4>
              <p><em>Inovasi Desa Digital Berbasis Teknologi Di Kelurahan Palabuhanratu</em></p>
              <h5>2023</h5>
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">Organizational Experience</h3>
            <div class="resume-item">
              <h4>Member of the Community Management - Google Developer Student Clubs UMMI</h4>
              <h5>2021 - 2022</h5>
              <p>
              <ul>
                <li>Assist in organizing and moderating events held by the club</li>
                <li>Help manage content and activities on social media and other online platforms</li>
                <li>Participate in team meetings and help coordinate club activities</li>
                <li>Assist in disseminating information related to training, workshops, and competitions organized by the club.</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Member of the Public Relations Department - BEM-FSAINTEK</h4>
              <h5>2022 - 2023</h5>
              <p>
              <ul>
                <li>Manage the organization's external communication with relevant parties</li>
                <li>Assist in managing content on the organization's social media and online platforms</li>
                <li>Coordinate promotional events and public relations activities for the organization</li>
                <li>Help build a positive image of the organization</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Secretary I - BEM-FSAINTEK</h4>
              <h5>2023 - Now</h5>
              <p>
              <ul>
                <li>Manage the organization's administration and document archiving</li>
                <li>Organize and document meetings, and oversee the decision-making process</li>
                <li>Be responsible for preparing agendas, taking minutes, and distributing meeting records</li>
                <li>Coordinate with other departments and members to ensure smooth organizational activities</li>
              </ul>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/ruhu.png" class="testimonial-img" alt="">
                <h3>Siti Ruhu Salamah</h3>
                <h4>College Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  من جد و جد
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/zizah.png" class="testimonial-img" alt="">
                <h3>Siti Nurazizah</h3>
                <h4>College Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  trust to god, everything is gonna be okay
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/dinda.jpg" class="testimonial-img" alt="">
                <h3>Dinda Putri Khoirunnisa</h3>
                <h4>College Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/raina.jpg" class="testimonial-img" alt="">
                <h3>Raina Rahmawati Fitri</h3>
                <h4>College Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  يَرۡفَعِ ٱللَّهُ ٱلَّذِينَ ءَامَنُواْ مِنكُمۡ وَٱلَّذِينَ أُوتُواْ ٱلۡعِلۡمَ دَرَجَٰتٖۚ 
                  <p>Allah akan meninggikan orang-orang yang beriman di antaramu dan orang-orang yang diberi ilmu pengetahuan beberapa derajat [QS. Al Mujadalah : 11]</p>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/gandul.png" class="testimonial-img" alt="">
                <h3>Pirmansyah</h3>
                <h4>College Student</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Kamu memiliki kendali atas pikiranmu, bukan kejadian-kejadian diluar sana. Sadarlah maka kamu akan menemukan kekuatan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= My Portofolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portofolio</span>
          <h2>My Portofolio</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-sertif">Sertifikat</li>
          <li data-filter=".filter-bem">BEM-FSAINTEK</li>
          <li data-filter=".filter-ppk">PPK ORMAWA</li>
          <li data-filter=".filter-mygallery">MY GALLERY</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Webinar Design Thinking</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/sertif-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Sertifikat PPK ORMAWA</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Kickstart UI/UX Design Journey</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/sertif-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-4.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Mobile Programming Training</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/sertif-4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-5.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Sertifikat Penghargaan</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/sertif-5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-sertif">
            <div class="portfolio-img"><img src="assets/img/portfolio/sertif-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Sertifikat Penghargaan</h4>
              <p>Sertifikat</p>
              <a href="assets/img/portfolio/sertif-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sertifikat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bem">
            <div class="portfolio-img"><img src="assets/img/portfolio/bem-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Konsolidasi Pengurus BEM-FSAINTEK</h4>
              <p>BEM-FSAINTEK</p>
              <a href="assets/img/portfolio/bem-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="BEM-FSAINTEK"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bem">
            <div class="portfolio-img"><img src="assets/img/portfolio/bem-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Buka Bersama</h4>
              <p>BEM-FSAINTEK</p>
              <a href="assets/img/portfolio/bem-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="BEM-FSAINTEK"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bem">
            <div class="portfolio-img"><img src="assets/img/portfolio/bem-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pelantikan Pengurus BEM-FSAINTEK</h4>
              <p>BEM-FSAINTEK</p>
              <a href="assets/img/portfolio/bem-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="BEM-FSAINTEK"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ppk">
            <div class="portfolio-img"><img src="assets/img/portfolio/ppk-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Seminar Teknologi</h4>
              <p>PPK ORMAWA</p>
              <a href="assets/img/portfolio/ppk-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PPK ORMAWA"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ppk">
            <div class="portfolio-img"><img src="assets/img/portfolio/ppk-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Sosialisasi PPK ORMAWA</h4>
              <p>PPK ORMAWA</p>
              <a href="assets/img/portfolio/ppk-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PPK ORMAWA"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ppk">
            <div class="portfolio-img"><img src="assets/img/portfolio/ppk-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Instalasi PRABU</h4>
              <p>PPK ORMAWA</p>
              <a href="assets/img/portfolio/ppk-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PPK ORMAWA"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mygallery">
            <div class="portfolio-img"><img src="assets/img/portfolio/galeri-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>View</h4>
              <p>My GALLERY</p>
              <a href="assets/img/portfolio/galeri-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MY GALLERY"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mygallery">
            <div class="portfolio-img"><img src="assets/img/portfolio/galeri-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>View</h4>
              <p>My GALLERY</p>
              <a href="assets/img/portfolio/galeri-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MY GALLERY"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mygallery">
            <div class="portfolio-img"><img src="assets/img/portfolio/galeri-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>View</h4>
              <p>My GALLERY</p>
              <a href="assets/img/portfolio/galeri-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MY GALLERY"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mygallery">
            <div class="portfolio-img"><img src="assets/img/portfolio/galeri-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>View</h4>
              <p>My GALLERY</p>
              <a href="assets/img/portfolio/galeri-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MY GALLERY"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
    <class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>Please contact me for more information</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="https://x.com/_midden" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://web.facebook.com/fauzanmakarim.rambe" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/sarahrambe__/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://join.skype.com/invite/szH5VBSCaZDk" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="https://bit.ly/sarahrambe" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>rambesarah03@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p>+62 85872322510</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <div class="alert alert-primary alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Thank you!</strong> Message Sent.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            <form name="contact-form">
              <div class="mb-3">
                <label for="full_name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="full_name" aria-describedby="full_name" name="full_name" autocomplete="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" autocomplete="email">
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="subject" name="subject" autocomplete="subject">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" name="message" autocomplete="message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-submit">Submit</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disable>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
            </button>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- Script Submit Contact Form to Google Sheet-->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycby8CeAYKj73NTkFpEmZbF0rfPavS9NgvuP8vPbHtGcApLp1LHFpJgYFIAZ0eStuy1rk/exec'
    const form = document.forms['contact-form']
    const btnSubmit = document.querySelector('.btn-submit');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', e => {
      e.preventDefault()
      btnLoading.classList.toggle('d-none');
      btnSubmit.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
          //menampilkan tombol kirim, dan menghilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnSubmit.classList.toggle('d-none');
          //menampilkan alert
          myAlert.classList.toggle('d-none');
          //menghilngkan semua isi form
          form.reset();
          console.log('Success!', response)
        })
        .catch(error => console.error('Error!', error.message))
    });
  </script>

<?=$this->endSection()?>