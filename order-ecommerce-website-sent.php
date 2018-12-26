<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Order Sent! | Arshad Moolla - Website Design and Development</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/icons/icon16.png" sizes="16x16">  
    <link rel="icon" type="image/png" href="images/icons/icon32.png" sizes="32x32">  
    <link rel="icon" type="image/png" href="images/icons/icon96.png" sizes="96x96">
    <meta property="og:image" content="https://arshadmoolla.com/images/website-og.png" />
    <!-- Start External Links -->
      <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css"> 
    <link rel="stylesheet" type="text/css" href="css/contact-form.css">     
      <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="js/pageScroll.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- End External Links -->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="header>">
          <div class="heading">
            <div class="heading"><a href="index.html" style="text-decoration:none; color: #fff">ARSHAD MOOLLA</a></div> 
            <div class="burger"><img src="images/menu.svg" alt="Menu" width="30"></div>
          </div>
          <div class="hello-big">
          Professional Web Design & Development
          </div>
        </div>
      </header>
      <nav id="nav">
        <ul>
          <li><a href="index.html">HOME</a></li>         
          <li><a href="portfolio.html">PORTFOLIO</a></li>
          <li><a href="services.html">SERVICES</a></li>
          <li><a href="contact.html" class="no-border-nav">CONTACT</a></li>
        </ul>
      </nav>
      <div class="message">
      <img src="images/calendar.svg" alt="Calendar" class="calendar-img animated zoomIn">
      <?php
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['number']);
        $message = trim($_POST['message']);
        $formcontent =  "From: ".str_replace("\r\n", "", $name)."\n".
                        "Email Address: ".str_replace("\r\n", "", $email)."\n".
                        "Contact Number: ".str_replace("\r\n", "", $phone)."\n\n".
                        str_replace("\r\n", "", $message)."\n";
        $recipient = "hello@arshadmoolla.com";
        $subject = "eCommerce Website Package Order From " . $name;
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "<p style='color:#3a4061; text-align:center; font-size:26px; font-family:Raleway, sans-serif; padding:25px 7px 5px 7px;'>" . "Thank you for ordering the eCommerce Website Package." . "</p>" ;
        echo "<p style='color:#3a4061; text-align:center; font-size:20px; font-family:Raleway, sans-serif; padding:0px 7px 0px 7px;'>" . "I will get back to you soon to discuss the details of your project." . "</p>" ;
        echo "<p style='color:#3a4061; text-align:center; font-size:18px; font-family: Raleway, sans-serif; padding:45px 7px 0px 7px;'>" . "<a href='index.html' style='color:#3a4061;'>" . "<i class='fas fa-arrow-circle-left'>" . "</i>" . " Back to Home" . "</a>" . "</p>" ;
        ?>
        </div>
    <footer>
      <div class="social">
        <a href="http://www.facebook.com/arshadmoolla" target="_blank">
          <img src="images/facebook.png" class="social2" title="Facebook" alt="Facebook">
        </a>&nbsp;&nbsp;&nbsp;
        <a href="http://www.instagram.com/arshadmoolla" target="_blank">
          <img src="images/instagram.png" class="social2" title="Instagram" alt="Instagram">
        </a>&nbsp;&nbsp;&nbsp;
        <a href="http://www.twitter.com/arshadmoolla" target="_blank">
          <img src="images/twitter.png" class="social2" title="Twitter" alt="Twitter">
        </a>&nbsp;&nbsp;&nbsp;
        <a href="http://www.behance.net/arshadmoolla" target="_blank">
          <img src="images/behance.png" class="social2" title="Behance" alt="Behance">
        </a>&nbsp;&nbsp;&nbsp;
        <a href="http://www.github.com/arshadmoolla" target="_blank">
          <img src="images/github.png" class="social2" title="GitHub" alt="GitHub">
        </a>
      </div>
      <!-- <div class="footerForBig">
        <p>Website by Arshad Moolla</p>
      </div>
      <div class="footerForSmall">
        <p>Website by Arshad Moolla</p>
      </div> -->
      <div class="copyright">Copyright &copy; 2019 ArshadMoolla.com</div>
    </footer>
    </div>
  </body>
</html>