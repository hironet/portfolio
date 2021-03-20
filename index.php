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
  <main>
    <div class="bg-light p-3 p-sm-5 mt-4 mb-4 border-top">
      <div class="container">
        <h1 class="display-4">Hiroのポートフォリオ</h1>
        <hr class="my-4">
        <p class="lead">ITエンジニアのHiroと申します。</p>
        <p class="lead">このサイトは私のポートフォリオサイトです。</p>
        <p class="lead">私の制作物・スキル・キャリアをご紹介しております。</p>
      </div><!-- container -->
    </div>
    <section id="profile">
      <div class="container">
        <h1 class="text-center">プロフィール</h1>
        <p>岡山市出身で大阪府在住のITエンジニアです。</p>
        <p>大学時代は、工学部の情報系学科で、プログラミング・UNIX・ネットワーク（TCP/IP）を学びました。</p>
        <p>大学院卒業後は、東京の独立系SIerに就職し、インフラエンジニアとして、サーバ・データベース・ネットワークなどに関わる仕事を行ってきました。</p>
        <p>約7年勤務した後、メーカー系SIerに転職し、現在もインフラエンジニアとして仕事を行っています。</p>
        <p>最も得意なことはプログラミングで、仕事ではスクリプト言語でのツール開発、趣味ではWebサイト制作やWebアプリ開発を行っています。</p>
        <p>サーバ・データベースの構築、ネットワークの設定からアプリケーション開発まで行うことができます。</p>
      </div><!-- container -->
    </section>
    <section id="my-product">
      <div class="container">
        <h1 class="text-center">制作物</h1>
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">
                <a href="https://hironet.org/tech-note">Hiro's tech note</a>
              </div>
              <div class="card-body">
                <p>私の技術メモです。</p>
                <p><a href="https://github.com/hironet/tech-note">ソースコード</a></p>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <a href="/shopping-history/">
                <figure class="figure">
                  <img class="figure-img card-img-top" src="img/shopping-history.webp" alt="買い物履歴管理システム">
                  <figcaption class="figure-caption text-center">買い物履歴管理システム</figcaption>
                </figure>
              </a>
              <div class="card-body">
                <p>買い物履歴を記録し、出費を分かりやすく可視化するシステムです。</p>
                <p><a href="https://github.com/hironet/shopping-history">ソースコード</a></p>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <a href="/toraku-ritsu/">
                <figure class="figure">
                  <img class="figure-img card-img-top" src="img/toraku-ritsu.webp" alt="騰落率計算ツール">
                  <figcaption class="figure-caption text-center">騰落率計算ツール</figcaption>
                </figure>
              </a>
              <div class="card-body">
                <p>株価や評価額の変動幅と変動率を計算するツールです。</p>
                <p><a href="https://github.com/hironet/toraku-ritsu">ソースコード</a></p>
              </div>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <a href="/stock-purchase/">
                <figure class="figure">
                  <img class="figure-img card-img-top" src="img/stock-purchase.webp" alt="株式買付金額計算ツール">
                  <figcaption class="figure-caption text-center">株式買付金額計算ツール</figcaption>
                </figure>
              </a>
              <div class="card-body">
                <p>保有銘柄の評価額を均等にするための購入金額と購入株数を計算するツールです。</p>
                <p><a href="https://github.com/hironet/stock-purchase">ソースコード</a></p>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">
                <a href="/tetris/">テトリス</a>
              </div>
              <div class="card-body">
                <p>JavaScriptで作成したテトリスです。</p>
                <p><a href="https://github.com/hironet/tetris">ソースコード</a></p>
              </div>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </section>
    <section id="my-skill">
      <div class="container">
        <h1 class="text-center">スキル</h1>
        <h2 class="text-center">最近使用している技術</h2>
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">クラウド (IaaS)</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">ConoHa VPS</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">OS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Linux (Ubuntu)</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">ミドルウェア</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Docker</li>
                <li class="list-group-item">Nginx</li>
                <li class="list-group-item">Apache</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">データベース</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">MySQL, phpMyAdmin</li>
               </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">アプリケーション・ツール</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Vim</li>
                <li class="list-group-item">Visual Studio Code</li>
                <li class="list-group-item">Git, GitHub</li>
                <li class="list-group-item">Redmine</li>
                <li class="list-group-item">WordPress</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">プログラミング言語</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">HTML</li>
                <li class="list-group-item">CSS, bootstrap</li>
                <li class="list-group-item">JavaScript</li>
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">Bash</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
        <h2 class="text-center">以前使用していた技術</h2>
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">クラウド (IaaS)</div>
              <ul class="list-group">
                <li class="list-group-item">Azure</li>
                <li class="list-group-item">IBM Cloud</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">仮想化</div>
              <ul class="list-group">
                <li class="list-group-item">VMware vSphere</li>
                <li class="list-group-item">VMware vSAN</li>
                <li class="list-group-item">VMware NSX</li>
                <li class="list-group-item">KVM</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">OS</div>
              <ul class="list-group">
                <li class="list-group-item">UNIX (FreeBSD)</li>
                <li class="list-group-item">Linux (RHEL, CentOS)</li>
                <li class="list-group-item">Windows Server (2012R2, 2016)</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">ミドルウェア</div>
              <ul class="list-group">
                <li class="list-group-item">ZABBIX</li>
                <li class="list-group-item">Arcserve Backup</li>
                <li class="list-group-item">Acronis Backup</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">データベース</div>
              <ul class="list-group">
                <li class="list-group-item">Oracle Database (10g, 11g)</li>
                <li class="list-group-item">SAP Sybase Adaptive Server Enterprise</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">ネットワーク</div>
              <ul class="list-group">
                <li class="list-group-item">BIG-IP</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">アプリケーション・ツール</div>
              <ul class="list-group">
                <li class="list-group-item">Chef</li>
                <li class="list-group-item">Serverspec</li>
                <li class="list-group-item">Vagrant</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 col-lg-4">
            <div class="card my-2">
              <div class="card-header">プログラミング言語</div>
              <ul class="list-group">
                <li class="list-group-item">C</li>
                <li class="list-group-item">Java</li>
                <li class="list-group-item">Ruby</li>
              </ul>
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </section>
    <section id="my-career">
      <div class="container">
        <h1 class="text-center">キャリア</h1>
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2002年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>高校2年の時、将来はITの世界で働くことを決意し、大学は工学部の情報系学科を目指すことにしました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2004年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>悲願の大学に合格し、UNIXやプログラミングの演習、専門科目の勉強に打ち込みました。</p>
            <p>独学で自作のPCにLinuxをインストールしたり、簡単なWebサイトを作成してインターネットに公開したりしていました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2007年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>大学4年から大学院2年の間、ネットワークの研究室に配属され、TCP/IPの性能改善に関する研究を行いました。</p>
            <p>TCP/IPの新しい方式を検討してそれをUNIXのOSに実装し、数台のPCで構築したテストネットワークでスループットを計測する日々を過ごしていました。</p>
            <p>この時期に、プログラミング・UNIX・TCP/IPに関する知識とスキルは飛躍的に向上しました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2010年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>東京の独立系SIerに就職し、ITエンジニアとしてのキャリアをスタートしました。</p>
            <p>私はプログラミングが得意でしたので、アプリケーション開発の道を選ぶこともできたのですが、この頃はITインフラの世界に魅力を感じていたので、インフラエンジニアの道を選びました。</p>
            <p>そして、顧客業務システムのサーバ・ストレージ・データベース・ネットワーク・ジョブ・監視・バックアップなど、ITインフラの幅広い領域を担当し、それらの構築や運用を行うことでスキルと経験を積み上げました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2015年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>金融系の顧客向けに大規模なサーバ仮想化基盤を構築するプロジェクトのリーダーを務めました。</p>
            <p>この時、はじめてITインフラの本格的な要件定義・設計・構築・テスト・移行の一通りの流れを経験しました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2017年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>ITエンジニアとして能力をさらに伸ばすため、メーカー系のSIerに転職しました。</p>
            <p>ここではじめてDockerに出会い、これを使いこなしたシステムに衝撃を受けました。</p>
          </div>
        </div><!-- row -->
        <div class="row">
          <div class="col-12 col-lg-2">
            <p class="text-center">2020年〜</p>
          </div>
          <div class="col-12 col-lg-10">
            <p>数年前からWebの技術に興味を持ち始めていたため、まずはWordPressで自分のブログを作るところからスタートしました。</p>
            <p>その後現在に至るまで、Webサイト・アプリ開発について基礎から独学し、動的なWebサイト作成に挑戦しています。</p>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section>
    <hr class="featurette-divider">
  </main>
  <footer>
    <div class="container text-center my-3">
      <small>&copy; <?= date('Y') ?> ITエンジニア Hiro</small>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="common.js"></script>
</body>
</html>
