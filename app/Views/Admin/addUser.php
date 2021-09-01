<?=$this->extend('layouts/adminLayout')?>
<?php $session = \Config\Services::session()?>

<?=$this->section('content')?>
<div class="container p-10">
    <h3>Files Upload</h3>
    <div class="col-md-12">
        <button type="button" id="newEvent" class="btn btn-success btn-sm mb-2 pull-right" data-toggle="modal"
            data-target="#event">
            </i> Add
        </button>

    </div>


    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>File Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
        <tfoot>

        </tfoot>
    </table>



</div>
<!-- =========downloads Instruction======== -->
<div class="modal fade" id="event">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card login-form">
                    <div class="card-body">

                        <div class="card-text">
                            <!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                            <form action="<?=base_url()?>/registerUser" method="post">
                                <!-- to error: add class "has-danger" -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control form-control-sm" name="firstname" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control form-control-sm" name="lastname" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control form-control-sm" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
                                    <input type="password" class="form-control form-control-sm" name="password" required
                                        min(5)>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
            <?=form_close()?>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- ======================================= -->
<div class="modal eventPreview fade" id="event">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div>
                    <h3 id="a-title"></h3>

                    <spans id="a-date"></spans>
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <p id="a-description"></p>

                <img src="" id="thumbnail" alt="" style="width: 100%; height:50%">

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <button type="button" id="publishBtn" class="btn btn-primary">Publish</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- A modal to edit an event -->
<div class="modal eventEdit fade" id="eventEdit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div>
                    <h3>Edit...</h3>

                    <!-- <spans id="a-date"></spans> -->
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="eventIdEdit" class="form-control" type="text" hidden>
                <div class="form-group">
                    <label for="my-input">Title</label>
                    <input id="eventTitleEdit" class="form-control" type="text" name="">
                </div>
                <div class="form-group">
                    <label for="my-input">Date</label>
                    <input id="eventDateEdit" class="form-control" type="date" name="">
                </div>

                <div class="form-group">
                    <label for="my-textarea">Description</label>
                    <textarea id="eventDescEdit" class="form-control" name="" rows="3"></textarea>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="updateBtn" class="btn btn-primary">Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
//====================================









function deleteNow(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            deleteDocument(id)

        }
    })





    //=================Delete event====================
    function deleteDocument(fileId) {



        $.ajax({
            type: "POST",
            url: "deleteUploadedFile",
            data: {
                id: fileId
            },
            dataType: "json",
            success: function(response) {

                Swal.fire(
                    'Deleted!',
                    `${response}`,
                    'success',
                    location.reload(true)
                )
            }
        });
    }


}
</script>
<?=$this->endSection()?>