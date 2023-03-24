<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=IBM Plex Sans:wght@600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@400&display=swap"
    />
  </head>
  <body>
  <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">DriveEase<span>.</span></a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="#about">about</a>
            <a href="#products">services</a>
            <a href="review.php">review</a>
            <a href="#contact">contact</a>
        </nav>
    </header>

    <div class="intro">
        <img
        class="pexels-erik-mclean-9331826-1-icon"
        alt=""
        src="./public/pexelserikmclean9331826-1@2x.png"
        />
        <section class="intro-child" id="overlay1"></section>
        <main class="welcome-to-driveease-parent" data-animate-on-scroll>
            <div class="welcome-to-driveease">Welcome to DriveEase</div>
            <div class="find-the-best">
            Find the best possible parking space near by your desired destination
            </div>
        </main>
        <button class="sign-up-wrapper">
            <a href="signup.php" class="sign-up">SIGN UP</a>
        </button>
        <button class="login-wrapper">
            <a href="login.php" class="sign-up">LOGIN</a>
        </button>

        <footer class="footer-ui" id="footer">
        <div class="footer-ui-child"></div>
        <div class="about-us">About us</div>
        <div class="privacy-policy">Privacy Policy</div>
        <div class="disclaimer">Disclaimer</div>
        <div class="contact-us">Contact us</div>
        <div class="help">Help</div>
        <div class="copyright-2018">Copyright © 2018 • Lift Media Inc.</div>
        <div class="information">
          <!-- <div class="social">
            <a class="youtube-color1"
              ><div class="rectangle"></div>
              <img class="youtube-icon" alt="" src="./public/youtube.svg" /></a
            ><a class="instagram-black1"
              ><div class="rectangle"></div>
              <img
                class="instagram-icon"
                alt=""
                src="./public/instagram.svg" /></a
            ><a class="googleplus-black1"
              ><div class="rectangle"></div>
              <img
                class="googleplus-icon"
                alt=""
                src="./public/googleplus.svg" /></a
            ><a class="linkedin-black1"
              ><div class="rectangle"></div>
              <img class="linkedin-icon" alt="" src="./public/linkedin.svg"
            /></a>
            <div class="facebook-black1-parent">
              <a class="facebook-black1"
                ><div class="rectangle"></div>
                <img
                  class="facebook-icon"
                  alt=""
                  src="./public/facebook.svg" /></a
              ><img
                class="rss-black1-icon"
                alt=""
                src="./public/rss-black1.svg"
              />
            </div> -->
            <!-- <a class="twitter-black1"
              ><img class="twitter-icon" alt="" src="./public/twitter.svg"
            /></a>
            <div class="social-media">Social Media</div>
          </div> -->
          <div class="location">
            <div class="faulconer-drive">
              Tech Zone-2, Bennett University, Greater Noida 201310
            </div>
            <img
              class="round-place-24px-icon"
              alt=""
              src="./public/roundplace24px.svg"
            />
          </div>
          <a class="phone" href="tel:+919836397444"
            ><img
              class="round-phone-24px-icon"
              alt=""
              src="./public/roundphone24px.svg"
            />
            <div class="div">+919836397444</div></a
          >
        </div>
        <div class="footer-ui-item"></div>
        <img class="logo-lift-icon" alt="" src="./public/logo-lift.svg" />
      </footer>
    </div>

    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>
