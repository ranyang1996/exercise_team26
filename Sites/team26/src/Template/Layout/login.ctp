<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  
  
  <link rel='stylesheet prefetch' href='/css/Open+Sans.css'>

      <link rel="stylesheet" href="/css/style 2.css">

  
</head>

<body>

  <p class="tip">Click on button in image container</p>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
        <?=$this->Form->control('email',
            array('label'=>false,
                'class'=>'form-control',))?>
    </label>
    <label>
      <span>Password</span>
        <?=$this->Form->control('password',
            array('label'=>false,
                'class'=>'form-control',))?>
    </label>
     <label>
    <a class="forgot-pass" href="http://Google.com">Forgot password?</a></label>
    <label> <button type="button" class="submit">Sign In</button></label>


  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Create an account and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Create an Account</h2>
      <label>
        <span>First Name</span>
          <?=$this->Form->control('first_name',
              array('label'=>false,
                  'class'=>'form-control',))?>
      </label>
        <label>
            <span>Last Name</span>
            <?=$this->Form->control('last_name',
                array('label'=>false,
                    'class'=>'form-control',))?>
        </label>
      <label>
        <span>Email</span>
          <?=$this->Form->control('email',
              array('label'=>false,
                  'class'=>'form-control',))?>
      </label>
      <label>
        <span>Password</span>
          <?=$this->Form->control('password',
              array('label'=>false,
                  'class'=>'form-control',))?>
      </label>
        <label>
            <span>Confirm Password</span>
            <input type="password" />
        </label>
        <label>
            <span>Confirm Password</span>
            <input type="password" />
        </label>
      <button type="button" class="submit">Sign Up</button>
    </div>
  </div>
</div>


<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
  
  

    <script  src="/js/index.js"></script>




</body>

</html>
