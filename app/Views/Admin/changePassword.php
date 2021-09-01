<?=$this->extend('layouts/adminLayout')?>
<?php $pageSession = \Config\Services::session()?>

<?=$this->section('content')?>
<br>
<br>
<br>
<section class="content body">
    <div class="container-fluid">
        <?=form_open(base_url() . '/changePassword')?>
        <div class="row card col-md-6 p-4">
            <?php if ($pageSession->getFlashdata('Success')): ?>
            <div id="message" class="alert alert-success text-center" role="alert">
                <?=$pageSession->getFlashdata('Success');?>
            </div>
            <?php endif;?>
            <?php if ($pageSession->getFlashdata('error')): ?>
            <div id="message" class="alert alert-danger text-center" role="alert">
                <?=$pageSession->getFlashdata('error');?>
            </div>
            <?php endif;?>
            <div class="form-group">
                <label for="my-input">Old Password</label>
                <input id="my-input" class="form-control" type="password" name="oldPassword"
                    value="<?=set_value('oldPassword')?>">
                <span class="text-danger"><?=displayError($validation, 'oldPassword')?></span>
            </div>
            <div class="form-group">
                <label for="my-input">New Password</label>
                <input id="my-input" class="form-control" type="password" name="newPassword"
                    value="<?=set_value('newPassword')?>">
                <span class="text-danger"><?=displayError($validation, 'newPassword')?></span>
            </div>
            <div class="form-group">
                <label for="my-input">Confirm New Password</label>
                <input id="my-input" class="form-control" type="password" name="confirmNewPassword">
                <span class="text-danger"><?=displayError($validation, 'confirmNewPassword')?></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
        </div>
        <?=form_close()?>
    </div>

</section>
<?=$this->endSection()?>