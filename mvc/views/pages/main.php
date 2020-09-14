<main id="main">
    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey, Welcome !</h2>
            <p class="mb-0"></p>
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".web">Web</a>
              <a href="#" data-filter=".design">Design</a>
              <a href="#" data-filter=".branding">Branding</a>
              <a href="#" data-filter=".photography">Photography</a>
            </div>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
        <?php while($row= mysqli_fetch_array($data["Pro"])) {?>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3><?php echo $row["productname"]?></h3>
                <span><?php echo $row["price"]?></span>
              </div>
              <img class="img-fluid" src="public/images/<?php echo $row["image"]?>">
            </a>
          </div>
        <?php }?>
        </div>
      </div>
    </section><!-- End  Works Section -->

   
   
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->