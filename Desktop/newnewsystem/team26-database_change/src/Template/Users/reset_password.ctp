<!-- <div class="users">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Forgot password') ?></legend>
        <?= $this->Form->input('new_password',['type'=>'password']) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->



<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/change_pwd.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm-12">
<h1 align="center">Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Use the form below to change your password.</p>
<form method="post" id="passwordForm">
<input type="password" class="input-lg form-control" name="password" id="password" placeholder="New Password" autocomplete="off">
<br>
<input type="password" class="input-lg form-control" name="confirm_password" id="confirm_password" placeholder="Repeat Password" autocomplete="off">
<br>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>

</body>
</html>