<!-- <div class="users form ">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Forgot password') ?></legend>
        <?= $this->Form->input('email',['label'=>'Enter your registered email address']) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->

<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm-12">
<h1 align="center">Forgot Password?</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Enter your registered email address to reset password</p>
<form method="post" id="passwordForm">
<input type="email" class="input-lg form-control" name="email" id="email" placeholder="Email" autocomplete="off">
<br>

<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Submit..." Submit">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>

</body>
</html>