  <!-- ======= Hero Section ======= -->

  <section id="hero" style="height:90vh;">
      <div class="hero-container">
          <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

              <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

              <div class="carousel-inner" role="listbox">

                  <!-- Slide 1 -->
                  <div class="carousel-item active"
                      style="background-image: url('https://images.pexels.com/photos/1408221/pexels-photo-1408221.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">
                      <div class="carousel-container">
                          <div class="carousel-content container">
                              <h2 class="animate__animated animate__fadeInDown hero-title">Image 1 </h2>


                          </div>
                      </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="carousel-item active"
                      style="background-image: url('https://images.pexels.com/photos/2480072/pexels-photo-2480072.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');">
                      <div class="carousel-container">
                          <div class="carousel-content container">
                              <h2 class="animate__animated animate__fadeInDown hero-title">Image 2 </h2>


                          </div>
                      </div>
                  </div>




              </div>

              <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>
      </div>
  </section><!-- End Hero -->

  <script>
var owl = $('#heroCarousel');
owl.owlCarousel();
  </script>