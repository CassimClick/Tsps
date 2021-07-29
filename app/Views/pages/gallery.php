<?=$this->extend('layouts/coreLayout')?>
<?=$this->section('content')?>
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="assets/images/sps/pre.jpg">
    <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white text-center">Our Gallery</h2>
                    <ol class="breadcrumb text-left text-black mt-10">
                        <li><a class="text-white" href="<?=base_url()?>">Home</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<?=$this->include('components/gallery')?>


</section>
<?=$this->endSection()?>