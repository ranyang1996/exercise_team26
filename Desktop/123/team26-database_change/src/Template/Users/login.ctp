<!--<div>
    <h2>Login</h2>

    <?= $this->Form->create(); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('password', array('type' => 'password')); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
    <?= $this->Form->end(); ?>
</div>
<div>
    <?= $this->Html->link('Register', ['controller' => 'users', 'action' => 'register.ctp'], array( 'class' => 'button')); ?>
</div>-->
<?php echo $this->Html->css('register'); ?>
<header class="masthead" style="background-image: url('<?= \Cake\Routing\Router::url('/img/beach-sunset-28806-29523-hd-wallpapers.jpg', true) ?>')">
    <div class="overlay"></div>
    <div class="container">
<!DOCTYPE html>



    <br><br>
<!--    <div class="btn-group" style="width:100%" >
  <button style="width:20%">Home</button>
  <button style="width:20%">My Enrolments</button>
  <button style="width:20%">My Sessions</button>
  <button style="width:20%">My Resources</button>
  <button style="width:20%">FAQs And Support</button>
</div>

-->
<h1>Mindfulness 4 Life</h1>
    <form method="post" accept-charset="utf-8" action="../users/login">
      <div id="sidenote">
          <h3>Available sessions for enrolment:</h3>
          <i>You must be a registered member of<br>
          Mindfulness 4 Life to sign-in and book a session</i><br/><br/><br/>
      </div>
      <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>

        <div id="logincontainer" class="container">
            <br><br><br>
        <div class="input email"><input type="email" name="email" id="email" placeholder="Enter Email Address" required style = "Width:450px"/></div><br>

        <div class="input password"><input type="password" name="password" id="password" placeholder="Enter Password"re quired style = "Width:450px"/></div>
        <label><br><br>
          <input type="checkbox" checked="checked" name="remember"> Remember me &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <span class="psw"> <?php echo $this->Html->link("Forgot Password",['controller'=>'Users','action'=>'forgotPassword']);?></span>
        </label>
            <br />
            <input name ="signin" type="submit" class="button" value="Sign in"/>
        <br><br><br>
        </div>

    </form>
    <div id="createaccoutcontainer" class="container" style="float: top ">
        <form method="" action="../users/register">
            <h2>New to this website?</h2>
            <input name="registerbutton" type = "submit" class = "button" value = "Create an account" />
            <br />
            <br/>
        </form>
        <br />
        <br />
    </div>
        </div>

