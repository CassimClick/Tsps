<?=$this->extend('layouts/adminLayout') ?>
<?=$this->section('content') ?>
<div class="container-fluid">
    <br>
    <h3 class="">Admin page</h3>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-2 p-10"><i class="fas fa-bullhorn"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Announcements</span>
                    <span class=""><?=$announcements?></span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-2 p-10"><i class="fas fa-image"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Gallery</span>
                    <span class="">55</span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-2 p-10"><i class="fas fa-star"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Events</span>
                    <span class=""><?=$events?></span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-2 p-10"><i class="fas fa-comments"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Feedback</span>
                    <span class=""><?=$feedbacks?></span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-orange elevation-2 p-10"><i class="fas fa-file-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Results</span>
                    <span class=""><?=$results?></span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-purple elevation-2 p-10"><i class="fas fa-file-pdf"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Joining Instructions</span>
                    <span class=""><?=$joining ?></span><br>

                </div>

            </div>

        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-navy elevation-2 p-10"><i class="fas fa-upload"></i></span>

                <div class="info-box-content">
                    <span class="info-box-number">Files Uplods</span>
                    <span class=""><?=$uploads?></span><br>

                </div>

            </div>

        </div>
    </div>
</div>
<?=$this->endSection() ?>