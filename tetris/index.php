<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>テトリス</title>
  <style>
    html {
      overflow: hidden;  /* スクロールを禁止 */
      touch-action: manipulation;
    }

    .btn {
      color: white;
    }

    #left-btn {
      background-color: #1e90ff;
    }

    #under-btn {
      background-color: #32cd32;
    }

    #right-btn {
      background-color: #ff8c00;
    }

    #rotate-btn {
      background-color: #ff69b4;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 text-center">
        <canvas id="can"></canvas>
      </div>
      <div class="col-12 col-lg-4 text-center">
        <button id="left-btn" class="btn btn-secondary btn-lg" type="button">左</button>
        <button id="under-btn" class="btn btn-secondary btn-lg" type="button">下</button>
        <button id="right-btn" class="btn btn-secondary btn-lg" type="button">右</button>
        <button id="rotate-btn" class="btn btn-secondary btn-lg" type="button">回転</button>
      </div>
    </div>
  </div>
  <script src="js/tetris.js"></script>
</body>
</html>
