<section id="profile">
  <div class="box" style="border-color: #9fca99;">
    <h1 class="text-center">プロフィール</h1>
    <p>岡山市出身で大阪府在住のITエンジニアです。</p>
    <p>大学時代は、工学部の情報系学科で、プログラミング・UNIX・ネットワーク（TCP/IP）を学びました。</p>
    <p>大学院卒業後は、東京の独立系SIerに就職し、インフラエンジニアとして、サーバ・データベース・ネットワークなどに関わる仕事を行ってきました。</p>
    <p>約7年勤務した後、メーカー系SIerに転職し、現在もインフラエンジニアとして仕事を行っています。</p>
    <p>最も得意なことはプログラミングで、仕事ではスクリプト言語でのツール開発、趣味ではWebサイト制作やWebアプリ開発を行っています。</p>
    <p>サーバ・データベースの構築、ネットワークの設定からアプリケーション開発まで行うことができます。</p>
  </div>
</section>
<section id="my-product">
  <div class="box" style="border-color: #95ccff;">
    <h1 class="text-center">制作物</h1>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card my-2">
          <a href="/tech-note/">
            <figure class="figure">
              <img class="figure-img card-img-top" src="/portfolio/img/tech-note.webp" alt="Hiro's tech note">
              <figcaption class="figure-caption text-center">Hiro's tech note</figcaption>
            </figure>
          </a>
          <div class="card-body">
            <p>私の技術メモです。</p>
            <p><a href="https://github.com/hironet/tech-note">ソースコード</a></p>
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card my-2">
          <a href="/shopping-history/">
            <figure class="figure">
              <img class="figure-img card-img-top" src="/portfolio/img/shopping-history.webp" alt="買い物履歴管理システム">
              <figcaption class="figure-caption text-center">買い物履歴管理システム</figcaption>
            </figure>
          </a>
          <div class="card-body">
            <p>買い物履歴を記録し、出費を分かりやすく可視化するシステムです。</p>
            <p><a href="https://github.com/hironet/shopping-history">ソースコード</a></p>
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card my-2">
          <a href="/toraku-ritsu/">
            <figure class="figure">
              <img class="figure-img card-img-top" src="/portfolio/img/toraku-ritsu.webp" alt="騰落率計算ツール">
              <figcaption class="figure-caption text-center">騰落率計算ツール</figcaption>
            </figure>
          </a>
          <div class="card-body">
            <p>株価や評価額の変動幅と変動率を計算するツールです。</p>
            <p><a href="https://github.com/hironet/toraku-ritsu">ソースコード</a></p>
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card my-2">
          <a href="/stock-purchase/">
            <figure class="figure">
              <img class="figure-img card-img-top" src="/portfolio/img/stock-purchase.webp" alt="株式買付金額計算ツール">
              <figcaption class="figure-caption text-center">株式買付金額計算ツール</figcaption>
            </figure>
          </a>
          <div class="card-body">
            <p>保有銘柄の評価額を均等にするための購入金額と購入株数を計算するツールです。</p>
            <p><a href="https://github.com/hironet/stock-purchase">ソースコード</a></p>
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card my-2">
          <a href="/tetris/">
            <figure class="figure">
              <img class="figure-img card-img-top" src="/portfolio/img/tetris.webp" alt="テトリス">
              <figcaption class="figure-caption text-center">テトリス</figcaption>
            </figure>
          </a>
          <div class="card-body">
            <p>JavaScriptで作成したテトリスです。</p>
            <p><a href="https://github.com/hironet/tetris">ソースコード</a></p>
          </div>
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->
    <h2 class="mt-4 text-center">私の制作物を支えるITインフラ</h2>
    <ul>
      <li>仮想専用サーバサービスのConoHa VPSでLinuxサーバを構築。</li>
      <li>Linuxサーバでは、いくつかのドメイン（hironet.org, xxx.com, yyy.com, &hellip;）でアクセスされるWebサイト・Webアプリが複数稼働。</li>
      <li>各ドメイン毎に、Apache・PHP・MySQLのDockerコンテナを実行し、コンテンツを提供。</li>
      <li>インターネットからのアクセスは、Nginxのリバースプロキシの機能を使用し、各ドメインのDockerコンテナに転送。</li>
    </ul>
    <div class="text-center">
      <figure class="figure">
        <img class="figure-img img-fluid" src="/portfolio/img/infra.svg" alt="私の制作物を支えるITインフラの構成図" width="700">
        <figcaption class="figure-caption">私の制作物を支えるITインフラの構成図</figcaption>
      </figure>
    </div>
  </div><!-- box -->
</section>
<section id="my-skill">
  <div class="box" style="border-color: #f9a980;">
    <h1 class="text-center">スキル</h1>
    <h2 class="skill-class">クラウド (IaaS)</h2>
    <p>AWS (EC2), Microsoft Azure, IBM Cloud, ConoHa VPS</p>
    <h2 class="skill-class">仮想化</h2>
    <p>VMware vSphere, VMware vSAN, VMware NSX, KVM</p>
    <h2 class="skill-class">OS</h2>
    <p>Linux (Amazon Linux 2, RHEL, CentOS, Ubuntu), UNIX (FreeBSD), Windows Server (2012R2, 2016)</p>
    <h2 class="skill-class">ミドルウェア</h2>
    <p>Docker, Nginx, Apache, Sendmail, Samba, BIND, i-FILTER, ASTERIA Warp, Zabbix, Cacti, Avamar, NetBackup, Arcserve Backup, Acronis Backup</p>
    <h2 class="skill-class">ネットワーク</h2>
    <p>BIG-IP, Wireshark</p>
    <h2 class="skill-class">データベース</h2>
    <p>MySQL, phpMyAdmin, Oracle Database (10g, 11g), SAP Sybase Adaptive Server Enterprise</p>
    <h2 class="skill-class">アプリケーション・ツール</h2>
    <p>Vim, Visual Studio Code, Git, GitHub, Redmine, WordPress, Chef, Serverspec, Vagrant</p>
    <h2 class="skill-class">グラフィック</h2>
    <p>GIMP, Inkscape</p>
    <h2 class="skill-class">コーディング・プログラミング</h2>
    <p>HTML, CSS, bootstrap, JavaScript, PHP, Ruby, C, Java, Bash</p>
  </div>
</section>
<section id="my-career">
  <div class="box" style="border-color: #d58d9d;">
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
  </div><!-- box -->
</section>
