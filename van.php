<!DOCTYPE html>
<html>
<title>varun.com</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/w3images/avatar_smoke.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#music" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>My playlist</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Varun Badave.</h1>
    <p>Android Application and Web Designer.</p>
    <img src="https://78.media.tumblr.com/tumblr_m609tv014l1ru1ka3o1_500.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About varun</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Web development</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">EDM player</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">Android application</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:40%"></div>
    </div><br>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="music">
    <h2 class="w3-text-light-grey">Feel the lyrics</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for music -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <iframe src="https://open.spotify.com/embed/playlist/2Wh9e5lAdGT7H3Wk5pVjC5&theme=black" width="1000" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
    <!-- End music grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><a href="tel: +919742432391" target="_blank""><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i></a> Phone: +91 9742432391</p>
      <p><a href = "mailto: varunbadave99@gmail.com target="_blank""><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"></i></a> Email: varunbadave99@gmail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="insert.php" method="post" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name"  name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email"  name="email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject"  name="subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message"  name="message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
   <ul>
<li><a href="https://m.facebook.com/varun.badave.1?ref=bookmarks" target="_blank" ><i class="fa fa-facebook"></i></a></li>
<li><a href="https://www.instagram.com/varun._007/" target="_blank"><i class="fa fa-instagram"></i></a></li>
</ul>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
