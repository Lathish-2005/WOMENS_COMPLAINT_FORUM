<?php
include 'db_connect.php'; // Include your database connection file
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Women's Complaints Forum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="assests/Main-Logo_noBG.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <nav>
      <div class="navbar">
        <div class="logo">
          <a href="#"><img src="assests/Title-Logo-NoBG.png" alt="" /></a>
        </div>
        <ul class="menu">
          <li><a href="#Home" style="color: #bd1616">Home</a></li>
          <li><a href="#About" style="color: #bd1616">About</a></li>
          <li><a href="#Contact" style="color: #bd1616">Contact Us</a></li>
        </ul>
      </div>
    </nav>
    
    <section class="homepage" id="Home">
      <div class="main-content-intro">
        <img src="assests/Title-Logo-NoBG.png" alt="" />
        <div class="homepage-p">
          <p>Submit your experience with valid identification and company details. Our team reviews each submission to ensure accuracy and authenticity.</p>
        </div>
        <div class="activity-buttons">
          <a href="view-page.php"><button class="button-s">View Complaints</button></a>
          <a href="reporting1.php"><button class="button-report">Report</button></a>
        </div>
      </div>
    </section>

    <section class="next-home-page">
      <div class="welcome-section">
        <h1>Welcome to Women's Complaints forum</h1>

        <p>
          Women's Complaints forum is a community-driven platform dedicated to promoting
          workplace safety and accountability. Our platform allows corporate
          women to share their workplace experiences securely and anonymously.
        </p>
        <h3><i class="fa-solid fa-shapes"></i> Features</h3>

        <p>
          Share Your Experience: Contribute to our database by sharing your
          workplace encounters with verified identification.
        </p>
        <h3><i class="fa-solid fa-circle-info"></i> Access Information</h3>
        <p>
          Explore our database to learn about the safety record of potential
          employers.
        </p>
        <h3><i class="fa-solid fa-handshake-angle"></i> Support Our Mission</h3>
        <p>
          Join our community in advocating for safer work environments for all.
        </p>
      </div>
    </section>
    <section class="about-section" id="About">
      <div class="about-section-info">
        <h1>About</h1>
        <h3>About Us</h3>

        <p>
          Welcome to Women's Complaints forum, a dedicated platform for corporate women to share
          their workplace experiences and contribute to building safer work
          environments. At ReportIt, we believe in transparency, accountability,
          and empowerment.
        </p>

        <h3>Our Mission</h3>

        <p>
          Our mission is to provide a safe and confidential space for corporate
          women to share their experiences of workplace harassment,
          discrimination, or any form of misconduct. By collecting and
          documenting these incidents with verified identities, we aim to create
          a comprehensive database that can be accessed by women seeking
          information about the safety record of potential employers.
        </p>

        <h3>How It Works</h3>

        <p>
          To contribute to our database, users must submit their experiences
          with valid identification and details of their company and branch.
          Each submission is carefully reviewed, and appropriate action is taken
          to address reported issues. We are committed to maintaining the
          privacy and confidentiality of all users while promoting transparency
          and accountability in corporate environments.
        </p>

        <h3>Join Us</h3>

        <p>
          Whether you want to share your experience, access information about a
          potential employer, or support our mission, we invite you to join our
          community. Together, we can create safer workplaces for all.
        </p>
      </div>
    </section>
    
    <section class="contact-us-section" id="Contact Us">
      <div class="contact-section-info">
        <h1>Contact Section</h1>
        <p>
          Contact Us If you have any questions, concerns, or feedback, please
          don't hesitate to reach out to us. We're here to assist you.
          <br/>Email: <a href="mailto:support@women.com">latishkumarkotla781@gmail.com</a> <br/>Phone: <a href="https://www.truecaller.com/">8019596349</a>
          <br/>Mailing Address: <a href="mailto:support@women.com" style="color: #bd1616;">220101120209@cutm.ac.in</a>
        </p>
      </div>
    </section>
    
<!-- FOOTER -->

<footer class="footer-distributed" style="text-align: center;">
      <div class="footer-left" >
        <a href="#"><img src="assests/Title-Logo-NoBG.png" alt="" /></a>

        <p class="footer-links" >
          <a href="#Home" class="link-1">Home</a>
          <a href="#About">About</a>
          <a href="#Contact Us">Contact Us</a>
        </p>
        <p class="footer-company-name" >Women © 2024</p>
      </div><br><br>
      
      <div class="footer-center" >
        <p style="justify-content: center;">
          <div class="gps">
          <a href="https://www.google.com/maps/@18.8057012,84.1442401,1329m/data=!3m1!1e3!5m1!1e4?authuser=0&entry=ttu"><i class="fa-solid fa-location-dot"></i></a>
          R.Sitapur,Gajapati, Odisha<br></div>
          <div class="phone">
          <a href="https://www.truecaller.com/"><i class="fa fa-phone"></i></a>
          +7978937573<br></div>
          <div class="mail">
          <a href="mailto:support@women.com" style="color: black;"><i class="fa fa-envelope"></i>220101120209@cutm.ac.in</a></div>
        </p>
      </div>
      <br>
      <br>
      <div class="footer-center" >
        <p class="footer-company-about">
          <span>About the company</span>
          Women's Complaints forum is a community-driven platform dedicated to promoting
          workplace safety and accountability. Our platform allows corporate
          women to share their workplace experiences securely and anonymously.
        </p>
      </div>

    
      <div class="footer-icons" style="align-items: center;">
        <div class="facebook"> 
          <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
          <div class="twitter">
          <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></div>
          <div class="linkedin">
          <a href="https://in.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a></div>
          <div class="github">
          <a href="https://github.com/"><i class="fa-brands fa-github"></i></a></div></div>
      </div>
      
      
    </footer>
    <!-- FOOTER END -->
  </body>
</html>
