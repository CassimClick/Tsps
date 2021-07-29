<section id="gallery">
    <div class="container  pb-70">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our <span
                            class="text-theme-color-2"> Gallery</span></h2>

                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Filter -->
                    <div class="portfolio-filter font-alt align-center text-center mb-6 0">
                        <a href="#" class="active" data-filter="*">All</a>
                        <a href="#photos" class="" data-filter=".Sports">Sports</a>
                        <a href="#campus" class="" data-filter=".Graduation">Graduation</a>
                        <a href="#students" class="mt-10" data-filter=".Academic">Academic</a>
                        <a href="#students" class="mt-10" data-filter=".Other">Other</a>
                    </div>
                    <!-- End Portfolio Filter -->

                    <!-- Portfolio Gallery Grid -->
                    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                        <!-- Portfolio Item Start -->

                        <?php foreach ($photos as $photo): ?>

                        <div class="gallery-item <?=$photo->category?>">
                            <div class="thumb">
                                <img class="img-fullwidth" src="<?=$photo->url?>" alt="project" style="height:180px">
                                <div class="overlay-shade"></div>

                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                            <a href="<?=$photo->url?>" data-lightbox-gallery="gallery"
                                                title="Your Title Here"><i class="far fa-image"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>




                    </div>
                    <!-- End Portfolio Gallery Grid -->

                </div>
            </div>
        </div>
    </div>
</section>