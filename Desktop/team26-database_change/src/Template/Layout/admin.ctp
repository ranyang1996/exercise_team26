
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Mindfulness4Life</title>


      <!-- FONTAWESOME STYLES-->

      <!-- CUSTOM STYLES-->
      <?php echo $this->Html->css('custom'); ?>
      <?php echo $this->Html->css('bootstrap');?>
      <?php echo $this->Html->css('font-awesome');?>
      <!-- GOOGLE FONTS-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div id="wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="adjust-nav">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Mindfulness 4 Life</a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                  </ul>
              </div>

          </div>
      </div>
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
              <ul class="nav" id="main-menu">
                  <li>
                      <a><i class="fa fa-desktop "></i>Manage Area</a>
                  </li>
                  <li>
                      <a href="#">Clients<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <?= $this->Html->link(__('Add Customers'), ['controller' => 'Users', 'action' => '/add'])  ?>
                          </li>
                          <li>
                              <?= $this->Html->link(__('List Customers'), ['controller' => 'Users', 'action' => '/index'])  ?>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="#">Enrolments<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <?= $this->Html->link(__('Add Enrolments'), ['controller' => 'Enrolments', 'action' => '/add'])  ?>
                          </li>
                          <li>
                              <?= $this->Html->link(__('List Enrolments'), ['controller' => 'Enrolments', 'action' => '/index'])  ?>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="#">Files<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <?= $this->Html->link(__('Add Files'), ['controller' => 'Files', 'action' => '/add'])  ?>
                          </li>
                          <li>
                              <?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => '/index'])  ?>
                          </li>
                      </ul>
                  </li>



                  <li>
                      <a href="#">Event<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="#">Add Event</a>
                          </li>
                          <li>
                              <a href="#">List Event</a>
                          </li>
                      </ul>
                  <li>
                  <li>
                      <a href="#">Practitioners<span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                          <li>
                              <a href="#">Add Practitioners</a>
                          </li>
                          <li>
                              <a href="#">List Practitioners</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#">Products<span class="fa arrow"></span></a>
                      <ul class="nav nav-third-level">
                          <li>
                              <a href="#">Add Products</a>
                          </li>
                          <li>
                              <a href="#">List Products</a>
                          </li>

                      </ul>
                  </li>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-qrcode "></i>Attendance</a>
                  </li>
              </ul>
          </div>
      </nav>


      <!-- /. ROW  -->


  </div>
  <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <section id="main-content"> 
      <div class="wrapper"> 
          <div class="row"> 
              <div class="col-lg-12 main-chart"> 
                  <?= $this->fetch('content') ?> 
              </div><!-- /col-lg-12 --> 
          </div><! --/row --> 
      </div> 
  </section>
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <?=$this->Html->script('jquery')?>
  <?=$this->Html->script('jquery-1.8.3.min')?>
  <!-- JQUERY SCRIPTS -->
  <?=$this->Html->script('bootstrap.min')?>
  <?=$this->Html->script('jquery.metisMenu')?>
  <!-- METISMENU SCRIPTS -->
  <?=$this->Html->script('custom')?>

  <?=$this->Html->script('jquery.scrollTo.min')?>

  <?=$this->Html->script('jquery.nicescroll')?>
  <?=$this->Html->script('jquery.sparkline')?>
  <?=$this->Html->script('common-scripts')?>
  <?=$this->Html->script('jquery.dcjqaccordion.2.7');?>
  <!-- BOOTSTRAP SCRIPTS -->

  <script>           /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */ 
      var dropdown = document.getElementsByClassName("dropdown-btn"); 
      var i;            for (i = 0; i < dropdown.length; i++) { 
          dropdown[i].addEventListener("click", function() { 
              this.classList.toggle("active");
              var dropdownContent = this.nextElementSibling; 
              if (dropdownContent.style.display === "block") { 
                  dropdownContent.style.display = "none"; 
              } else { 
                  dropdownContent.style.display = "block"; 
              } 
          }); 
      } 
  </script>
  <script> 
      var prevScrollpos = window.pageYOffset; 
      window.onscroll = function() { 
          var currentScrollPos = window.pageYOffset; 
          if (prevScrollpos > currentScrollPos) { 
              document.getElementById("sidebar").style.top = "0"; 
          } else { 
              document.getElementById("sidebar").style.top = "-50px"; 
          }               prevScrollpos = currentScrollPos; 
      } 
  </script>
  </body>
</html>
