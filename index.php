<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="index.css" />
    <?php require("links.php");?>
    
  </head>
  <body>
    <?php require("header.php");?>

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
            <a href="login_signup.php" class="sign-up">SIGN UP</a>
        </button>
        <button class="login-wrapper">
            <a href="login_signup.php" class="sign-up">LOGIN</a>
        </button>
    </div>
    <?php require("footer.php");?>

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
