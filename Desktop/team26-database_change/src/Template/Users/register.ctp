<!--<div>
    <h2>Register</h2>
    <?= $this->Form->create($user); ?>
        <?= $this->Form->hidden('status', array('value' => '1')); ?>
        <?= $this->Form->input('given name'); ?>
        <?= $this->Form->input('last name'); ?>
        <?= $this->Form->input('dob', array('type' => 'date')); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('password', array('type' => 'password')); ?>
        <?= $this->Form->input('mobile', array('type' => 'integer')); ?>
        <?= $this->Form->input('postcode', array('type' => 'postcode')); ?>
        <?= $this->Form->submit('Register', array('class' => 'button')); ?>
    <?= $this->Form->end(); ?>
</div>-->

<?php echo $this->Html->css('register'); ?>
<header class="masthead" style="background-image: url('<?= \Cake\Routing\Router::url('/img/rainforest_waterfall-wallpaper-2880x1620.jpg', true) ?>')">
    <div class="overlay"></div>
    <div class="container">
<!Doctype html>
<head>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/register.js"></script>
</head>


<!--
<div class="btn-group" style="width:100%" >
  <button style="width:20%">Home</button>
  <button style="width:20%">My Enrolments</button>
  <button style="width:20%">My Sessions</button>
  <button style="width:20%">My Resources</button>
  <button style="width:20%">FAQs & Support</button>
</div>
-->

<h1>Create an Account</h1>
<p>Complete the field to create your new account. All fields marked with * are required.</p>
<hr>

<form  id="registerForm" method="post" accept-charset="utf-8" action="../users/register">
          <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
          <input type="hidden" name="status" value="1"/>

    <div class="container">

                <label>First Name<span class="req">*</span>
                </label>
                <input class= "input" type="text" name="given_name" id="given_name" placeholder = "First Name" autocomplete="off"/>
              &emsp;
                <label>Last Name<span class="req">*</span>
                 </label>
                 <input class= "input" type="text" name="last_name" id="last_name" placeholder = "Last Name" autocomplete="off"/>

        <br>
              <label>Email Address<span class="req">*</span>
              </label>
                <input class= "input email" type="email" id="email" name="email" maxlength="40" id="email" placeholder = "Email Address" required autocomplete="off" style = "Width:600px"/>

        <br>
        <br>

                  <label for="password">Password<span class="req">*</span></label>
                  <input class="password" name="password" type="password" placeholder = "Password" />
                  <pre class="text">Password Strength:</pre>
                  <ul class="helper-text">
                      <li class="length">Must be at least 6 characters long.</li>
                      <li class="lowercase">Contains a lowercase letter.</li>
                      <li class="uppercase">Contains an uppercase letter.</li>
                      <li class="special">Contain a number or special character.</li>
                  </ul>
        <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input class= "input" type="password" id="confirm_password" name="confirm_password" placeholder = "Password" required autocomplete="off"/>

        <br>
        <br>
              <label>
                Postcode<span class="req">*</span>
              </label>
              <input class= "input" type="text" name="postcode" id="postcode" pattern="[0-9] {4}" title="Four digits" placeholder = "Postcode" required autocomplete="off"style = "Width:300px"/>
              &emsp;
              <label>
              	Mobile<span class="req">*</span>
              </label>
              <input class= "input" type="text" name="mobile" id="mobile" pattern="[0-9]{10}" placeholder = "Mobile" required autocomplete="off"/>

        <br>
              <label>
                Date of Birth<span class="req">*</span>
              </label>
              <input class= "input" type="date" id="dob" name="dob" placeholder = "Date of Birth" style = "Width:210px" required autocomplete="off" />
              &emsp;

<div class="container" style= "float:left;">

    <input name ="submit" type="submit" class="button" value="Register"/>

    <input onclick="window.history.go(-1); return false;" type="submit" value="Cancel and go back" />
</div>

        <br/>
        <br/>
        <br/>

</form>

