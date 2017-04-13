<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $emailto = 'info@brooksrobison.com';
  $toname = 'Brooks Robison';
  $emailfrom = $_POST["email"];
  $fromname = $_POST["firstname"] . ' ' . $_POST["lastname"] ;
  $subject = 'Message From Portfolio';
  $messagebody = $_POST["message"];
  $headers =
  'Return-Path: ' . $emailfrom . "\r\n" .
  'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
  'X-Priority: 3' . "\r\n" .
  'X-Mailer: PHP ' . phpversion() .  "\r\n" .
  'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
  'MIME-Version: 1.0' . "\r\n" .
  'Content-Transfer-Encoding: 8bit' . "\r\n" .
  'Content-Type: text/plain; charset=UTF-8' . "\r\n";
  $params = '-f ' . $emailfrom;
  //$test = mail($emailto, $subject, $messagebody, $headers, $params);




  // $email = $_POST["email"];
  // if (!empty($email)) {
  //
  //   $to = "brooks@brooksrobison.com";
  //   $subject = 'Message From Portfolio';
  //   $message = $_POST["message"];
  //   $from = $_POST["firstname"] . ' ' . $_POST["lastname"];
  //
  //
  //
  //   // To send HTML mail, the Content-type header must be set
  //   $headers  = 'MIME-Version: 1.0' . "\r\n";
  //   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  //
  //   // Add from to the header
  //   $headers .= 'From: ' . $email . ' ' . $from . "\r\n";
  //
  // Mail it
  if(mail($emailto, $subject, $messagebody, $headers, $params)) {
    // Message sent successfully
    $confirmation = '<p class="alert alert-success">Your message was sent successfully!</p>';
  } else {
    // Message was not successful
    $confirmation = '<p class="alert alert-danger">There was a problem sending your message. Please try again.</p>';
  }
  //}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Brooks Robison | Software Engineer</title>
  <link href="img/favicon.ico" rel="shortcut icon">
  <!--JQuery CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <!--BOOTSTRAP Javascript CDN Support-->
  <script src="js/bootstrap.min.js"></script>

  <!--MATCH HEIGHT-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>


  <!--BOOTSTRAP CSS-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!--FONT AWESOME-->
  <script src="https://use.fontawesome.com/webfontloader/1.6.24/webfontloader.js"></script>
  <script src="https://use.fontawesome.com/340f3f95eb.js"></script>
  <!-- MATERIAL DESIGN FOR BOOTSTRAP - http://fezvrasta.github.io/bootstrap-material-design/ -->
  <!-- <link rel="stylesheet" href="content/bootstrap-material-design.min.css" type="text/css"> -->

  <!--CUSTOM CSS-->
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!--CUSTOM JS-->
  <script src="js/index.js"></script>

</head>
<body>
  <header>
    <div class="container">
      <h1>
        <span class="name">Brooks </span>
        <span class="name">Robison</span>
      </h1>

      <br>

      <ul class="social-icons list-inline">
        <li><a href="https://github.com/bosoxfanx5" target="_blank">
          <i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
        </li>
        <li><a href="https://twitter.com/robison_brooks" target="_blank">
          <i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
        </li>
        <li><a href="linkedin.com/in/brooks-robison-a93a413b" target="_blank">
          <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>
        </li>
        <li><a href="https://www.facebook.com/brooks.robison.5" target="_blank">
          <i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
        </li>
      </ul>

      <hr>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <span class="do-while">
              <h2>do {</h2>
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <div class="do-while-body">
                      <h2>
                        cout << "Provide for my family";<br>
                        cout << "Increase knowledge and skills";<br>
                        cout << "Design and Create";<br>
                        cout << "Serve Others";<br>
                        cout << "Knock it out of the park!";<br>
                      </h2>
                    </div>
                  </div>
                </div>
                <h2>
                }while (passion == true);
              </h2>
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="slinks">
      <div class="container">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 text-center about">
              <a href="#about" class="hvr-float-shadow"><h2><span class="name">About</span></h2></a>
            </div>
            <div class="col-md-3 text-center skills">
              <a href="#skills" class="hvr-float-shadow"><h2><span class="name">Skills</span></h2></a>
            </div>
            <div class="col-md-3 text-center projects">
              <a href="#projects" class="hvr-float-shadow"><h2><span class="name">Projects</span></h2></a>
            </div>
            <div class="col-md-3 text-center contact">
              <a href="#contact" class="hvr-float-shadow"><h2><span class="name">Contact</span></h2></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <br><br>
      <div class="text-center">
        <a name="about"></a>
        <h4>About</h4>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 animation-element slide-left">
          <span>
            <p>
              Husband, Father, Golfer, Always a Student. Passionate about designing and
              creating useful products that are dynamic and modifiable, utilizing the best design
              techniques/patterns possible. Hard working teamplayer, with ablilty to pay attention to detail
              and possess ability to have 30,000 foot view. Knowledge of the Software Development Life Cycle mixed
              with a 'get it done' attitude. Understands requirement elicitation and requirement
              writing. Proficient in C++, Java, HTML5, Javascript, JQuery, CSS, Bootstrap, Object Oriented Programming,
              data structures, PHP, and database design and interaction using PostgreSQL and MySQL. Dabbles in
              and always expanding knowledge in C#, ReactJS, AngularJS, and Python.
            </p>
          </span>
        </div>
        <div class="col-md-6 animation-element slide-left">
          <img class="family-pic img-responsive" src="img/family.jpg"/>
        </div>
      </div>
    </div>

    <br><br><br>

    <div class="divider">
      <div class="container">
        <div class="text-center">
          <a name="skills"></a>
          <h3 class="white-title">Skills</h3>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="wrapper">
              <article>
                <section class="percentage-bar" data-percent="95%">
                  <div class="title"><span>C++</span></div>
                  <div class="bar"></div>
                  <div class="percent">95%</div>
                </section>
                <section class="percentage-bar" data-percent="70%">
                  <div class="title"><span>Java</span></div>
                  <div class="bar"></div>
                  <div class="percent">70%</div>
                </section>
                <section class="percentage-bar" data-percent="85%">
                  <div class="title"><span>HTML5</span></div>
                  <div class="bar"></div>
                  <div class="percent">85%</div>
                </section>
                <section class="percentage-bar" data-percent="75%">
                  <div class="title"><span>Javascript</span></div>
                  <div class="bar"></div>
                  <div class="percent">75%</div>
                </section>
                <section class="percentage-bar" data-percent="80%">
                  <div class="title"><span>CSS</span></div>
                  <div class="bar"></div>
                  <div class="percent">80%</div>
                </section>
                <section class="percentage-bar" data-percent="60%">
                  <div class="title"><span>jQuery</span></div>
                  <div class="bar"></div>
                  <div class="percent">60%</div>
                </section>
              </article>
            </div>
          </div>
          <div class="col-md-6">
            <div class="wrapper">
              <article>
                <section class="percentage-bar" data-percent="30%">
                  <div class="title"><span>React</span></div>
                  <div class="bar"></div>
                  <div class="percent">30%</div>
                </section>
                <section class="percentage-bar" data-percent="70%">
                  <div class="title"><span>Bootstrap</span></div>
                  <div class="bar"></div>
                  <div class="percent">70%</div>
                </section>
                <section class="percentage-bar" data-percent="90%">
                  <div class="title"><span>OOP</span></div>
                  <div class="bar"></div>
                  <div class="percent">90%</div>
                </section>
                <section class="percentage-bar" data-percent="80%">
                  <div class="title"><span>PHP</span></div>
                  <div class="bar"></div>
                  <div class="percent">80%</div>
                </section>
                <section class="percentage-bar" data-percent="80%">
                  <div class="title"><span>SQL</span></div>
                  <div class="bar"></div>
                  <div class="percent">70%</div>
                </section>
                <section class="percentage-bar" data-percent="60%">
                  <div class="title"><span>Databases</span></div>
                  <div class="bar"></div>
                  <div class="percent">65%</div>
                </section>
              </article>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>

    <br><br><br>

    <div class="container">
      <div class="text-center">
        <a name="projects"></a>
        <h4>Projects</h4>
      </div>
      <br>
      <h2>C++</h2>
      <hr>
      <br>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <div class="text-right">
            <a class="project-link" target="_blank" href="https://github.com/bosoxfanx5/Chess-Game">
              <h3>Chess Game</h3>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <img class="project-img img-responsive" src="img/chess.png"/>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-2 col-md-offset-4">
          <img class="project-img img-responsive" src="img/skeet.png"/>
        </div>
        <div class="col-md-4">
          <div class="text-left">
            <a class="project-link" target="_blank" href="https://github.com/bosoxfanx5/Skeet-Game">
              <h3>Skeet Game</h3>
            </a>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <div class="text-right">
            <a class="project-link" target="_blank" href="https://github.com/bosoxfanx5/Asteroids-Game">
              <h3>Asteroids Game</h3>
            </a>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <i class="img-responsive fa fa-gamepad fa-5x"></i>
        </div>
      </div>

      <div class="container">
        <br>
        <h2>Java</h2>
        <hr>
        <br>
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <div class="text-right">
              <a class="project-link" target="_blank" href="https://github.com/bosoxfanx5/ScAndroid">
                <h3>Barcode Scanner</h3>
              </a>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <i class="img-responsive fa fa-barcode fa-5x"></i>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-2 col-md-offset-4">
            <img class="project-img img-responsive" src="img/iHangry.jpg"/>
          </div>
          <div class="col-md-4">
            <div class="text-left">
              <a class="project-link" target="_blank" href="https://cs313team.herokuapp.com/">
                <h3>iHangry</h3>
              </a>
            </div>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <div class="text-right">
              <a class="project-link" target="_blank" href="https://github.com/bosoxfanx5/cs313/tree/master/web/09DiscussionForum">
                <h3>Discussion Board</h3>
              </a>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <i class="img-responsive fa fa-clipboard fa-5x"></i>
          </div>
        </div>
        <div class="container">
          <br>
          <h2>Web</h2>
          <hr>
          <br>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <div class="text-right">
                <a class="project-link" target="_blank" href="https://mysterious-bayou-55662.herokuapp.com/Project/mobile.php">
                  <h3>Reet Deets</h3>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <img class="project-img img-responsive" src="img/rd.png"/>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-2 col-md-offset-4">
              <img class="project-img img-responsive" src="img/iHangry.jpg"/>
            </div>
            <div class="col-md-4">
              <div class="text-left">
                <a class="project-link" target="_blank" href="https://cs313team.herokuapp.com/">
                  <h3>iHangry</h3>
                </a>
              </div>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <div class="text-right">
                <a class="project-link" target="_blank" href="https://mysterious-bayou-55662.herokuapp.com/survey.php">
                  <h3>Survey</h3>
                </a>
              </div>
            </div>
            <div class="col-md-2 text-center">
              <i class="img-responsive fa fa-question-circle fa-5x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>

    <div class="divider">
      <div class="container">
        <div class="text-center">
          <a name="contact"></a>
          <h3 class="white-title">Contact Me</h3>
        </div>
        <div class="row">
          <div class="my-container col-md-6 col-md-offset-3">
            <form action="#" method="POST">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">

              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">

              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="Your email...">

              <label for="message">Subject</label>
              <textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>

              <input type="submit" value="Submit">
            </form>
            <?php echo $confirmation; ?>
            <br>
          </div>
        </div>
      </div>
    </div>


  </main>

  <br><br><br><br>



  <br><br><br>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-left">
          <ul class="social-icons list-inline">
            <li><a href="https://github.com/bosoxfanx5" target="_blank">
              <i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
            </li>
            <li><a href="https://twitter.com/robison_brooks" target="_blank">
              <i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
            </li>
            <li><a href="linkedin.com/in/brooks-robison-a93a413b" target="_blank">
              <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>
            </li>
            <li><a href="https://www.facebook.com/brooks.robison.5" target="_blank">
              <i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-md-offset-7 text-right">
          <img class="img-responsive ssl-icon" src="img/sslicon.png">
        </div>
      </div>
    </div>
  </footer>
  <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
    <i class="fa fa-chevron-up"></i>
  </a>
</body>
</html>
