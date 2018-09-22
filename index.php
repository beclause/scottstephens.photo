<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link rel="stylesheet" href="css/index.css">

      <title>Scott Stephens | Photographer</title>
    </head>
    <body>
      <div id="landing-section" class="landing-container">
        <!-- Overlay to give the site a darker feel -->
        <div class="landing-overlay"></div>

        <!-- Navigation -->
        <div id="navigation-container" class="navigation-container">
          <div class="nav-row n1"><h1>Scott Stephens</h1></div>
          <div class="nav-row n2"><p class="nav-text">About</p></div>
          <div class="nav-row n3"><p class="nav-text">Gallery</p></div>
          <div class="nav-row n6"><p class="nav-text">Contact</p></div>
          
        </div>
      </div>

      <!-- Little quarter page about section -->
      <div id="about-section" class="about-container">
        <!-- Splitting this thing up into four parts -->
        <div class="about-row about-l">
          <div class="about-holder">
            <h2 class="about-header">
              Photographer <br />
              Refueler <br />
              Airplane Junky
            </h2>
          </div>
        </div>
        <div class="about-row about-m">
          <div class="about-text-holder-left">
            <p class="about-text-left">
              Lorem ipsum, dolor sit amet consectetur 
              adipisicing elit. Iure minima provident quia sequi 
              repellat velit hic quas possimus amet iste? 
              Nam totam neque quam natus ratione ad impedit hic commodi.
            </p>
          </div>
          <div class="about-text-holder-right">
            <p class="about-text-right">
              Lorem ipsum, dolor sit amet consectetur 
              adipisicing elit. Iure minima provident quia sequi 
              repellat velit hic quas possimus amet iste? 
              Nam totam neque quam natus ratione ad impedit hic commodi.
            </p>
          </div>
        </div>
        <div class="about-row about-r">
          <div class="about-pic-holder">
            <img class="about-profile" src="pictures/scott-profile.jpg" alt="Scott Stephens">
          </div>
        </div>
      </div>

      <div id="gallery-section" class="gallery-container">
        <div class="gallery-row">
          <div class="gallery-column">
            <img src="pictures/landing-3.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-2.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-7.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-12.jpg" alt="Scott Stephens" class="gallery-img">
          </div>
          <div class="gallery-column">
            <img src="pictures/landing.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-5.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-10.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-15.jpg" alt="Scott Stephens" class="gallery-img">
          </div>
          <div class="gallery-column">
            <img src="pictures/landing-2.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-3.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-13.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-8.jpg" alt="Scott Stephens" class="gallery-img">
          </div>
        </div>

        <div class="gallery-row-mobile">
          <div class="gallery-column-mobile">
            <img src="pictures/landing-3.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-2.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-7.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-12.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-5.jpg" alt="Scott Stephens" class="gallery-img">
          </div>
          
          <div class="gallery-column-mobile">
            <img src="pictures/landing-2.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-3.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-13.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-8.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-10.jpg" alt="Scott Stephens" class="gallery-img">
            <img src="pictures/landing-15.jpg" alt="Scott Stephens" class="gallery-img">
          </div>
        </div>
      </div>

      <div class="contact-container">
        <div class="contact-holder">
          <form class="contact-form" action="contact/send.php" method="post">
            <h2 class="form-header">Contact me</h2>
            <input type="text" name="name" id="name-input" placeholder="Name">
            <input type="email" name="email" id="email-input" placeholder="Email">
            <textarea name="message" id="message-input" cols="30" rows="10" placeholder="Message"></textarea>
            <button class="send">Send</button>
          </form>
        </div>

        <div id="c-i-container" class="c-i-container">
          <img src="pictures/landing-15.jpg" alt="Scott Stephens" class="c-i-img-1" />
          <img src="pictures/landing-5.jpg" alt="Scott Stephens" class="c-i-img-2">
        </div>
      </div>

      <div class="extra-space"></div>

      <script src="js/index.js"></script>

    </body>
  </html>