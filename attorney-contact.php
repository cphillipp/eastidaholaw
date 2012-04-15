<?php
session_start();
if($_SESSION['message']) {
  $display_message = $_SESSION['message'];
  $_SESSION['message'] = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Idaho Falls and Driggs Idaho Law Offices Contact Page | Thompson Smith Woolf &amp; Anderson</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/styles.css" />
  <link href='http://fonts.googleapis.com/css?family=Forum|Abel' rel='stylesheet' type='text/css'>
  <script src="js/jquery1.7.2.min.js"></script>
  <script src="js/forms.js"></script>
  <!--[if lt IE 9]>
  <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('footer');
  </script>
  <![endif]-->
</head>
<body>
  <header>
    <div class="wrapper">
      <h1><a href="index.html" title="Idaho Falls and Driggs Idaho Law Offices">Thompson Smith Woolf &amp; Anderson</a></h1>
      <p class="info">208.525.8792 &#8226; 3480 Merlin Drive &#8226; Idaho Falls ID, 83404</p>
      <ul>
        <li><a href="index.html" title="Idaho Falls and Driggs Idaho Law Offices">Home</a></li>
        <li><a href="attorney-practices.html" title="Idaho Falls and Driggs Idaho Law Offices Practice Areas">Practices</a></li>
        <li><a href="law-firm-attorneys.html" title="Idaho Falls and Driggs Idaho Law Offices List of Attorneys">Attorneys</a></li>
        <li><a href="idaho-law-firm.html" title="Idaho Falls and Driggs Idaho Law Offices Firm Details">The Firm</a></li>
        <li><a href="attorney-contact.php" title="Idaho Falls and Driggs Idaho Law Offices Contact Page" class="active">Contact</a></li>
      </ul>
      <section class="banner">
        <img src="images/idaho-law-firm-justice-image02.jpg" alt="Idaho falls law firm upholds justice image" />
      </section>
    </div>
  </header>
  <section class="content">
    <div class="wrapper">
      <div class="full-col">
        <div class="profile">
          <h2>Address</h2>
          <h4>Idaho Falls</h4>
          <p class="address">3480 Merlin Drive<br /> Idaho Falls, ID 83404</p>
          <ul class="info">
            <li><span>Phone</span>208-525-8792</li>
            <li><span>Fax</span>208-525-5266</li>
            <li><span>Email</span>tswa@eastidaholaw.net</li>
          </ul>
          <h4>Driggs</h4>
          <p class="address">81 N Main St Unit B<br />Driggs, ID 83422<br />PO Box 65</p>
          <ul class="info">
            <li><span>Phone</span>208-354-0110</li>
            <li><span>Fax</span>208-354-0115</li>
            <li><span>Email</span>tswa@eastidaholaw.net</li>
          </ul>
        </div>
        <div class="profile">
          <h2>Map</h2>
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?ie=UTF8&amp;q=thompson+smith+woolf+and+anderson&amp;fb=1&amp;gl=us&amp;hq=thompson+smith+woolf+and+anderson&amp;hnear=0x5354594e739512b5:0x2311c9fc094c49c9,Idaho+Falls,+ID&amp;cid=0,0,16825674730879410015&amp;t=m&amp;iwloc=A&amp;ll=43.466351,-112.000197&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
        </div>
        <div class="profile">
          <h2>Contact Form</h2>
          <form method="post" action="form.php" id="contact-form">
            <fieldset>
              <label class="name">
                <input name="name" type="text" value="Name">
                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> 
              </label>
              <label class="email invalid">
                <input name="email" type="text" value="Email">
                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
              </label>
              <label class="phone invalid">
                <input name="phone" type="tel" value="Telephone">
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
              </label>
              <label class="message invalid">
                <textarea name="message">Message</textarea>
                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
              </label>
              <span class="link" data-type="reset">clear</span>
              <input type="submit" value="submit" data-type="submit" class="submit" />
              <?php
                if(isset($display_message)) {
                    echo "<p name='bottom' class='thank-you'>" . $display_message . "</p>";
                }
              ?>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="outer">
    <div class="wrapper">
      <div class="col">
        <h3>Who We Are</h3>
        <p>TSWA regularly handles many of the largest, most complex and demanding transactions in the Idaho Falls and Driggs area. We counsel both public and private acquirors and targets, advising on a wide range of corporate matters.</p>
        <a href="#">Read More</a>
      </div>
      <div class="col">
        <h3>Experience</h3>
        <p>Each of our practice areas is highly regarded, and our lawyers are recognized around the south east area for their commitment to the representation of our clients' interests.</p>
        <a href="#">Read More</a>
      </div>
      <div class="col">
        <h3>Overview</h3>
        <p>Throughout our history, we have played a central role in developing how law is practiced, how lawyers are trained and how business risk is managed.</p>
        <a href="#">Read More</a>
      </div>
      <div class="col">
        <h3>Consultations</h3>
        <p>TSWA approaches its clients' legal issues always within the larger framework of their strategic, business and financial goals. Please call for a free initial consultation.</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </section>
  <footer>
    <div class="wrapper">
      <ul>
        <li><a href="index.html" title="Idaho Falls and Driggs Idaho Law Offices">Home</a></li>
        <li><a href="attorney-practices.html" title="Idaho Falls and Driggs Idaho Law Offices Practice Areas">Practices</a></li>
        <li><a href="law-firm-attorneys.html" title="Idaho Falls and Driggs Idaho Law Offices List of Attorneys">Attorneys</a></li>
        <li><a href="idaho-law-firm.html" title="Idaho Falls and Driggs Idaho Law Offices Firm Details">The Firm</a></li>
        <li><a href="attorney-contact.php" title="Idaho Falls and Driggs Idaho Law Offices Contact Page">Contact</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
      <ol>
        <li><span>Idaho Falls:</span></li>
        <li>208.525.8792</li>
        <li>3480 Merlin Drive</li>
        <li>Idaho Falls, ID 83404</li>
      </ol>
      <ol>
        <li><span>Driggs:</span></li>
        <li>208.354.0110</li>
        <li>81 N Main St Unit B</li>
        <li>Driggs, ID 83422</li>
        <li>PO Box 65</li>
      </ol>
      <div class="clear-left"></div>
      <a href="#" class="facebook" target="_blank" title="Law Offices Facebook Page"></a>
      <a href="#" class="twitter" target="_blank" title="Law Offices Twiiter Page"></a>
      <p>Copyright &copy; 2012 - Thompson Smith Woolf &amp; Anderson Law</p>
    </div>
  </footer>
</body>
</html>