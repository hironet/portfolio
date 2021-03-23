<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="このサイトはITエンジニアHiroのポートフォリオサイトです。Hiroの制作物・スキル・キャリアをご紹介しております。">
  <meta name="keywords" content="Hiro,Hiro エンジニア,Hiro プログラミング">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Hiroのポートフォリオ</title>
  <style>
    body {
      padding-top: 2.0rem;
    }

    #nav {
      opacity: 0.9;
    }

    #profile {

    }

    #my-product {

    }

    #my-skill {

    }

    #my-career {

    }
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
        </div>
      </div><!-- container-fluid -->
    </nav>
  </header>
  <div class="bg-light p-3 p-sm-5 mt-4 mb-4 border-top">
    <div class="container">
      <h1 class="display-4">Hiroのポートフォリオ</h1>
      <hr class="my-4">
      <p class="lead">ITエンジニアのHiroと申します。</p>
      <p class="lead">このサイトは私のポートフォリオサイトです。</p>
      <p class="lead">私の制作物・スキル・キャリアをご紹介しております。</p>
    </div><!-- container -->
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
        <main>
<?php include_once(__DIR__ . '/main.php'); ?>
        </main>
      </div><!-- col -->
      <div class="col-12 col-lg-3">
        <aside>
<?php include_once(__DIR__ . '/sidebar.php'); ?>
        </aside>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
  <hr class="featurette-divider">
  <footer>
    <div class="container text-center my-3">
      <small>&copy; <?= date('Y') ?> ITエンジニア Hiro</small>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="common.js"></script>
<?php include_once(__DIR__ . '/analyticstracking.php'); ?>
</body>
</html>
