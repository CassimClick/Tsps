<?php $session = \Config\Services::session()?>
<?=$this->extend('layouts/adminLayout')?>
<?=$this->section('content')?>
<div class="container p-10">



    <h3>Gallery</h3>

    <?php if (isset($validation)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <?=$validation->listErrors()?>
    </div>
    <?php endif;?>
    <div class="col-md-12">
        <button type="button" id="newEvent" class="btn btn-success btn-sm mb-2 pull-right" data-toggle="modal"
            data-target="#event">
            Add
        </button>

    </div>
    <?php if ($session->get('uploaded')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Photo Uploaded Successfully</strong>
    </div>
    <?php endif;?>
    <?php if ($session->get('deleted')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Photo Deleted Successfully</strong>
    </div>
    <?php endif;?>



    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">Photo Category</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photos as $photo): ?>

            <tr>
                <td><?=ucfirst($photo->category)?></td>

                <td><img style="width: 50px ; height:50px; border-radius:50%; box-shadow: -1px 4px 10px -1px rgba(36,36,36,0.6);"
                        class="event-thumb" src="<?=$photo->url?>" alt=""></td>
                <td>
                    <div class="button-group">

                        <a href="<?=base_url()?>/deletePhoto/<?=$photo->id?>" class="btn btn-sm btn-danger"><i
                                class="fas fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<!-- =========New Event======== -->
<div class="modal fade" id="event">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Photo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=form_open_multipart(base_url('uploadPhoto'))?>
                <form id="eventForm" method="post" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="my-input">Category</label>
                        <select class="form-control" name="category" id="">
                            <option value="Sports">Sports</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Academic">Academic</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="my-input">Photo</label>
                        <input id="image" class="form-control" type="file" name="photo" accept="image/*">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            <?=form_close()?>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<?=$this->endSection()?>