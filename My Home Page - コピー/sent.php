<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/eea364082e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <title>My Website(practice)</title>

</head>
<body>
  <div id="particles-js"></div>
      <div class="header">
      <div class="header-logo">Website</div>
        <div class="header-list">
  <div class="wrapper2">
          <ul>
            <li><a href="Home.php" class="button2">Home</a></li>
            <li><a href="create.php" class="button2">create</a></li>
            <li><a href="like.php" class="button2">Like</a></li>
            <li><a href="About.php" class="button2">About</a></li>
            <li><a href="contact.php" class="button2">Contact</a></li>
    </ul>
          </div>

          </div>
            <span>&#9819;</span>


  </div>
        <div class="main">
    <div class="thanks-message"><br></br><h1>Thank you for Message!</h1></div>
    <div class="display-contact">
      <div class="form-title"><h2>入力内容</h2></div>


      <div class="form-item">■</div>
      <?php echo $_POST['body']; ?>

    </div>
  </div>

  <div class="footer">
    <div class="footer-logo">
      <p>&copy; 2023 My Website. All rights reserved.</p>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-4/js/5-4.js"></script>

  </body>
  </html>
