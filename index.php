<?php
$contents_title = 'Hiroのポートフォリオ';
$contents_desc = 'このサイトはITエンジニアHiroのポートフォリオサイトです。Hiroの制作物・スキル・キャリアをご紹介しております。';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $contents_desc ?>">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://engineer-hiro.com/">
  <meta name="twitter:title" content="<?= $contents_title ?>">
  <meta name="twitter:description" content="<?= $contents_desc ?>">
  <meta name="twitter:image" content="https://engineer-hiro.com/img/ogp.png">
  <!-- /Twitter -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" type="image/svg+xml" href="/img/favicon.svg">
  <link rel="icon alternate" type="image/png" href="/img/favicon.png">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
  <title><?= $contents_title ?></title>
  <style>
<?php include_once(__DIR__ . '/style.php'); ?>
  </style>
</head>
<body id="top">
  <header>
    <nav id="nav" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#top">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my-product">制作物</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my-skill">スキル</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my-career">キャリア</a>
            </li>
          </ul>
        </div><!-- /#navbarNav -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <div class="bg-light p-3 p-sm-5 mt-4 mb-4 border-top">
    <div class="container">
      <h1 class="display-4">Hiroのポートフォリオ</h1>
      <hr class="my-4">
      <p class="lead">ITエンジニアのHiroと申します。</p>
      <p class="lead">このサイトは私のポートフォリオサイトです。</p>
      <p class="lead">私の制作物・スキル・キャリアをご紹介しております。</p>
    </div><!-- /.container -->
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <main>
<?php include_once(__DIR__ . '/main.php'); ?>
        </main>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  <hr class="featurette-divider">
  <footer>
    <div class="container text-center my-3">
      <small>&copy; <?= date('Y') ?> ITエンジニアHiro</small>
    </div>
    <button id="page-top"></button>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="https://tech-note.engineer-hiro.com/js/common.js"></script>
</body>
</html>
