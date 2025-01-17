<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>タブ切り替え</title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<div class="container">        <!-- 全体を囲むコンテナ -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
        <span class="sr-only">ナビゲーション</span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php bloginfo('template_url'); ?>/index.html" class="navbar-brand">My room</a>
    </div>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="<?php bloginfo('template_url'); ?>/page.html"><span class="glyphicon glyphicon-home"></span>ホーム</a>
        </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('template_url'); ?>/page1.html">連絡</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron"
     style="color:#FFF; text-shadow: 2px 2px 4px #666; 
            height:230px; background:url(<?php bloginfo('template_url'); ?>/photo/top.JPG); background-size:cover;">
  <span class="h2">たかしの部屋</span>
  <p style="font-size:16px"></p>
</div>

<h1>予定・新着情報</h1>
<ul class="nav nav-tabs">
  <li class="active"><a href="<?php bloginfo('template_url'); ?>/21tue" data-toggle="tab">今週</a></li>
  <li><a href="<?php bloginfo('template_url'); ?>/24fri" data-toggle="tab">来週</a></li>
  <li><a href="<?php bloginfo('template_url'); ?>/25sat" data-toggle="tab">臨時</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="21tue">
    <h3>未定</h3>
    <p><br class="hidden-xs">
       <br class="hidden-xs">
       <br><br>
       <b></b>　
    </p>
  </div>

<br>

<h1 class="page-header">ウェルカムボード</h1>
<p>以下の三つを目標に活動していく告知板です。</p>

<h3 class="page-header">システム開発</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/system.jpg" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p>システム受注、委託承ります。<br>サービスも順次リリースしています。連絡お待ちしております。</p>
  </div>
</div>

<h3 class="page-header">お笑い</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/warai.jpg" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p>相方募集!漫才とかyoutubeとか興味ある方。<br>
就活とか世界一周とかなしで毎日ひまなひとが嬉しい。</p>
  </div>
</div>

<h3 class="page-header">アゲアゲ企画</h3>
<div class="row">
  <div class="col-xs-12 col-sm-5">
    <img src="<?php bloginfo('template_url'); ?>/photo/osaka.jpg" class="img-responsive">
  </div>
  <div class="col-xs-12 col-sm-7">
    <div class="visible-xs" style="height:10px;"></div>
    <p>キタミナミで熱く!!<br>
街中をテーマパークにする計画及び新しい民放を創る計画に興味ある方アポ夜露死苦!
</p>
  </div>
</div>

<br><br>
<div class="panel panel-default">
  <div class="panel-heading">毎日　朝/夜</div>
  <div class="panel-body">
    （モーニング）6:00～10:00とか<br>（ナイト）18:00～22:00とか<br>
	※昼は暑いからＮＧ<br>
	パークス、道頓堀、心斎橋筋、御堂筋、アメ村、四ツ橋、ハルカス<br>
    グランフロント、大阪駅、茶屋町、堂島、北新地、中之島、曽根崎<br>
    この辺に出没！
  </div>
</div>

</div>        <!-- 全体を囲むコンテナ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
