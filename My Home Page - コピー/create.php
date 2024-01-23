<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="create.css">

    <title>My Website(practice)</title>
    <style>
        body {
          margin: 0;
          overflow: hidden;
        }
      </style>
</head>

<body>
<canvas id="artCanvas"></canvas>
   <script src="create.js"></script>



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

    <div class="wrapper">
      <h5 class="button">Move the mouse!!</h5>
    </div>

    <script>
        const canvas = document.getElementById('artCanvas');
        const ctx = canvas.getContext('2d');

        // キャンバスサイズをウィンドウサイズに合わせる
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        // ランダムな色を生成する関数
        function getRandomColor() {
          const letters = '0123456789ABCDEF';
          let color = '#';
          for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          return color;
        }

        // 円を描く関数
        function drawCircle(x, y, radius, color) {
          ctx.beginPath();
          ctx.arc(x, y, radius, 0, 2 * Math.PI);
          ctx.fillStyle = color;
          ctx.fill();
        }

        // マウスが動いたときのイベントリスナー
        canvas.addEventListener('mousemove', (event) => {
          const x = event.clientX;
          const y = event.clientY;
          const radius = Math.random() * 50 + 10; // 半径をランダムに設定
          const color = getRandomColor();

          drawCircle(x, y, radius, color);
        });
      </script>
</body>

</html>
