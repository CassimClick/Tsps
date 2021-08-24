<?=$this->extend('layouts/coreLayout')?>
<?=$this->section('content')?>
<section class="inner-header divider parallax layer-overlay overlay-dark-5"
    data-bg-img="<?=base_url()?>/assets/images/sps/frontBlocks.jpg">
    <div class="container pt-70 pb-40">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white text-center"><?=$announcement->title?></h2>
                    <h4 class="text-white text-center"><?=dateFormatter($announcement->date)?></h4>
                    <ol class="breadcrumb text-left text-black mt-10">
                        <li><a class="text-white" href="<?=base_url()?>">Home</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="events" class="divider parallax overlay-dark-0" data-stellar-background-ratio="0">
    <div class="container pt-70 pb-40">
        <div class="section-title mb-30">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <!-- <h2 class="mt-0 line-height-1 text-center mb-10 text-dark text-uppercase">Upcoming Events</h2> -->

                </div>
            </div>
        </div>
        <div class="section-content">
            <h2 class="title text-dark text-left"><?=$announcement->title?></h2>
            <div class="row">
                <p>
                    <?=$announcement->description?>
                </p>

            </div>
            <!-- MountainRange@2005 -->


        </div>
    </div>
</section>
<?=$this->endSection()?>