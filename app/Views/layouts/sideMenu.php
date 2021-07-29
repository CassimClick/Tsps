<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>/directorDashboard" class="brand-link">

        <span class="brand-text font-weight-bold ml-3"> TSPS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- entire link open -->

                <li class="nav-item">
                    <a href="<?= base_url() ?>/dashBoard" class="nav-link ">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <!-- <ion-icon class="nav-icon" name="speedometer-outline"></ion-icon> -->
                        <p>
                            Dashboard

                        </p>
                    </a>
                    </>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/galleryAdmin" class="nav-link ">
                        <i class="fas fa-image nav-icon"></i>
                        <!-- <ion-icon class="nav-icon" name="speedometer-outline"></ion-icon> -->
                        <p>
                            Gallery

                        </p>
                    </a>


                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>/announcements" class="nav-link ">
                        <i class="fas fa-bullhorn nav-icon"></i>
                        <!-- <ion-icon class="nav-icon" name="speedometer-outline"></ion-icon> -->
                        <p>
                            Announcements

                        </p>
                    </a>


                </li>
                <li class="nav-item">
                    <a href="<?=base_url()?>/events" class="nav-link ">
                        <i class="fas fa-star nav-icon"></i>
                        <!-- <ion-icon class="nav-icon" name="speedometer-outline"></ion-icon> -->
                        <p>
                            Events

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url()?>/viewFeedback" class="nav-link ">
                        <i class="fas fa-user nav-icon"></i>
                        <!-- <ion-icon class="nav-icon" name="speedometer-outline"></ion-icon> -->
                        <p>
                            Feedback

                        </p>
                    </a>
                </li>


                <li class="nav-item ">
                    <a href="<?=base_url()?>/publishResult" class="nav-link ">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>
                            Results
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?=base_url()?>/joining" class="nav-link ">
                        <i class="fas fa-file-pdf nav-icon"></i>
                        <p>
                            Joining Instructions
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?=base_url()?>/fileUpload" class="nav-link ">
                        <i class="fas fa-upload nav-icon"></i>
                        <p>
                            Files Upload
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>