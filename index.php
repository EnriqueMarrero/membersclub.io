<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Web Development Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/modal.css">
  <link rel="stylesheet" href="css/matrix.css">
</head>
<body class="light">
  <div id="preloader">
    <div id="preloader-top" class="preloader-half"></div>
    <div id="preloader-bottom" class="preloader-half"></div>
    <div id="loading-logo-container">
      <img id="loading-logo" src="img/eth.svg" alt="Loading...">
    </div>
  </div>
  <canvas id="matrix-canvas"></canvas>
  <header></header>
  <main>
        <div class="center-content">
        <div id="theme-switch" class="btn-switch">
            <div id="toggleBtn">
  <i id="toggleIcon" class="fas fa-solid fa-rotate"></i>
</div>
            </div>
            <div class="text-container animated-text">
    <span id="animated-span" class="hidden"></span>
</div>
    <div class="content-container">
    <div class="card">
  <div class="card__face card__face--front">
    <img id="main-image" class="pfp" src="img/pfp.jpeg" alt="Your Image" />
  </div>
  <div class="card__face card__face--back">
    <img id="back-image" class="pfp" src="img/pfp-2.jpeg" alt="Your Image" />
  </div>
</div>
</div>
            

            <div id="social-media-icons">
                <a href="your-instagram-url"><i class="fab fa-instagram"></i></a>
                <a href="your-twitter-url"><i class="fab fa-twitter"></i></a>
                <a href="your-facebook-url"><i class="fab fa-discord"></i></a>
            </div>
            <button id="subscribe-button" class="btn">PRE-REGISTER</button>

        </div>
    </main>
    <footer>
    <p id="copyright">&copy; 2023 MEMBERSCLUB.IO</p>
  </footer>
  <div id="subscribe-modal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close-button">&times;</span>
    <h2>STAY AHEAD OF LAUNCH</h2>
    <div class="message-box"></div>
    <form id="subscribe-form" action="subscribe.php" method="post">
  <input type="email" id="email" name="email" placeholder="Your email address" required>
  <input type="submit" value="Subscribe">
</form>
  </div>
</div>
  <script src="js/main.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/matrix.js"></script>
</body>
</html>