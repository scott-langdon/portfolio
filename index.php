<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scott Langdon</title>

    <link rel="shortcut icon" type="image/png" href="img/yingyang.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Scott Langdon</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio1">Web Developemnet</a>
        </li>
<!--         <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio2">Film Making</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio3">Photography</a>
        </li> -->
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1" style="font-family: 'Roboto', sans-serif;">SCOTT LANGDON</h1>
        <h3 class="mb-5">
          <em>Web Developer</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#portfolio1">Find Out More</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- Portfolio 1-->
    <section class="content-section" id="portfolio1">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Web Development</h3>
          <h2 class="mb-5" style="text-shadow: 0px 0px 0px lightslategrey">Recent Projects</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="php-crud-portfolio/index.html">
              <span class="caption">
                <span class="caption-content">
                  <h2>PHP CRUD App with MYSQL</h2>
                  <p class="mb-0"><b>Technology:</b> PHP, Javascript, HTML5, CSS3, BootstrapCSS</p>
                  <p class="mb-0"><b>Description:</b>An app to Create, Read, Update, Delete Products.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/coding.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <!-- <a class="portfolio-item" href="https://bringer-app.herokuapp.com/"> -->
            <a class="portfolio-item" href="bringer-portfolio/index.html">
              <span class="caption">
                <span class="caption-content">
                  <h2>Bringer</h2>
                  <p class="mb-0"><b>Technology:</b> Angular, MongoDB, Express, NodeJS.</p>
                  <p class="mb-0"><b>Description:</b> An app to create events for friends and family and to see who is bringing what.
                  <p class="mb-0"><b>Next:</b> Facebook Auth/Login, Edit/Update features for profile and events pages, & more.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/beachparty.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="https://scott-langdon.github.io/rsvp-app/">
              <span class="caption">
                <span class="caption-content">
                  <h2>RSVP App</h2>
                  <p class="mb-0"><b>Technology:</b> ReactJS, HTML5, CSS3.</p>
                  <p class="mb-0"><b>Description:</b> Invite and keep track of your attending guests.</p>
                  <p class="mb-0"><b>Next:</b> User registration/login & user unique events.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/rsvppic.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="https://www.rubydubyglam.com/">
              <span class="caption">
                <span class="caption-content">
                  <h2>RubyDubyGlam</h2>
                  <p class="mb-0"><b>Technology:</b> HTML5, CSS3, Bootstrap, JS, JQuery.</p>
                  <p class="mb-0"><b>Description:</b> Hair and Makeup that comes to you.</p>
                  <p class="mb-0"><b>Next:</b> Landing page redesign & page development.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/hair.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="content-section" id="contact">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Have a question?</h3>
          <h2 class="mb-5" style="text-shadow: 0px 0px 0px lightslategrey">Contact Me</h2>
        </div>

        <!--Section description-->
        <p class="section-description">Do you have any questions? Please do not hesitate to contact me directly. Response time is typically within an hour.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 col-xl-9">
                <form id="contact-form" name="contact-form" action="phpmailer/submitMessage.php" method="POST" onsubmit="return validateForm()">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="center-on-small-only">
                    <!-- <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a> -->
                    <a style="cursor: pointer;" class="btn btn-primary" onclick="validateForm()">Send</a>
                </div>
                <div class="status" id="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-xl-3">
                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>Los Angeles, CA USA</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>(805) 304-5884</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>scottlangdon247@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>
      </div>
    </section>
    <!--Section: Contact v.2-->

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.linkedin.com/in/scott-langdon/">
              <i class="icon-social-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://github.com/scott-langdon">
              <i class="icon-social-github"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
        </ul>
        <p>I'm a life long learner. The future is software, and everyday I get to wake up to learn and write new & useful code. Excited to see where it all takes us. #CoderForLife</p>
        <p class="text-muted small mb-0">Copyright &copy;  2018</p>
      </div>
    </footer>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
    <script>
      function validateForm() {
        var x =  document.getElementById('name').value;
        if (x == "") {
            document.getElementById('status').innerHTML = "Name cannot be empty";
            return false;
        }
        x =  document.getElementById('email').value;
        if (x == "") {
            document.getElementById('status').innerHTML = "Email cannot be empty";
            return false;
        } else {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(x)){
                document.getElementById('status').innerHTML = "Email format invalid";
                return false;
            }
        }
        x =  document.getElementById('subject').value;
        if (x == "") {
            document.getElementById('status').innerHTML = "Subject cannot be empty";
            return false;
        }
        x =  document.getElementById('message').value;
        if (x == "") {
            document.getElementById('status').innerHTML = "Message cannot be empty";
            return false;
        }
        //get input field values data to be sent to server
        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name'     : $('input[name=name]').val(),
            'email'    : $('input[name=email]').val(),
            'subject'  : $('input[name=subject]').val(),
            'message'  : $('textarea[name=message]').val()
        };

       $.ajax({
            url : "phpmailer/submitMessage.php",
            type: "POST",
            data : formData,
            success: function(data, textStatus, jqXHR) {
                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#status').text(jqXHR);
            }
        });
      }
    </script>

  </body>

</html>
