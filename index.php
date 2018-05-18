<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js gt-ie8">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>Elvis Presley</title>

<!--=================================
Meta tags
=================================-->

<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!--=================================
Style Sheets
=================================-->
<!--Google Fonts-->
<link href='assets/fonts.googleapis.com/css8f84.css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='assets/fonts.googleapis.com/css757b.css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<!--Plugins CSS Files-->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<link rel="stylesheet" type="text/css" href="assets/css/bigvideo.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<!--custom styles for Poison-->
<link rel="stylesheet" href="assets/css/main.css">

<!--
<link rel="stylesheet" type="text/css" href="assets/css/colors/color1.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color2.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color3.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color4.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color5.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color6.css">
<link rel="stylesheet" type="text/css" href="assets/css/colors/color7.css">
-->

<script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>


<body data-spy="scroll" data-target="#sticktop" data-offset="70">








<!--=====================================
Preloader
========================================-->
<div id="jSplash">
	<figure class="preload_logo">
		<img src="assets/img/basic/logo2.png" alt=""/>
	</figure>
</div>
<div class="wide_layout box-wide">
    <!--=================================
    Vegas Slider Images
    =================================-->
    <ul class="vegas-slides hidden" data-speed="8000">
      <li><img data-fade='2000' src="assets/img/BG/Elvis1.jpg" alt="" /></li>
      <li><img data-fade='2000' src="assets/img/BG/Elvis2.jpg" alt="" /></li>
    </ul>
    <!--================
     Banner
    ====================-->
    <section id="section_1" class="banner banner_slider hero_section banner-right-align">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
          	<ul class="vegas-controls">
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
            <div class="hero_content banner-content animatedParent animateLoop" data-sequence="700">

                <h1 class="animated bounceInLeft" data-id="1">Elvis Presley</h1>
                <p class="animated bounceInLeft" data-id="2"> Elvis Aaron Presley foi um cantor,
									 músico e ator norte-americano, mundialmente denominado como o Rei do Rock e com a alcunha de "Elvis,
									  The Pelvis", pela forma extravagante, mas ousada como dançava e se mexia, adquirida na década de 50 </p>




            </div>
          </div>
      	</div>
      </div>
    <!--=================================
    JPlayer (Audio Player)
    =================================-->

		<!--=================================
    	Lista 50 Sings do Elvis para rodar no player
    =================================-->

<?php
	$path = "assets/mp3/";
	$diretorio = dir($path);
		$i = 0;
		while($arquivo = $diretorio -> read()){
			$data[$i]['musica']  = $arquivo;
			$data[$i]['genero']  = 'Rock';
			$data[$i]['caminho'] = $path.$arquivo;
			$data[$i]['nome']    = 'Elvis Presley';
			$i++;
		}
	$diretorio -> close();
	?>





      <!--Do not edit this section Unless you have to modify HTML structure of Playlist-->
      <div class="rock_player pre_sticky">
      <div class="sticky_player" data-sticky="true">
        <div class="play_list">
          <div class="list_scroll">
            <div class="container ">
              <ul class="music_widget player_data">
                <li class="music_row_header">
                  <div class="column_one"> # </div>
                  <div class="column_two"> &nbsp;<!--no header for picture column-->
                  </div>
                  <div class="column_three" style="width: 680px;"> Musica </div>
                  <div class="column_four"> Genero </div>
                  <div class="column_five"> Compositor </div>
                  <div class="column_seven"> &nbsp;<!--no header for play column-->
                  </div>
                  <div class="column_eight"> &nbsp;<!--no header for btn column-->
                  </div>
                </li>

								<?php foreach ($data as $musica){

									 ?>

                <li class="music_row">
                  <div class="column_one track_index"></div>
                  <div class="column_two track_thumb"></div>
                  <div class="column_three track_title"  style="width: 680px;"></div>
                  <div class="column_four track_genre"></div>
                  <div class="column_five track_composer"></div>
                  <div class="column_seven"> <a class="play_it" href="#"><span class="fa fa-play"></span></a></div>
                </li>

							  <?php

						} ?>

              </ul>
              <!--music_widget-->
            </div>
            <!--container-->
          </div>
        </div>

        <!--//=============================================================
        Edit or Modify Playist content in the following Hypertext
        ==============================================================-->
        <div class="jp-playlist hidden">
          <!--Add Songs In mp3 formate here-->
          <ul class=" playlist-files">

						<?php foreach ($data as $musica){

							 ?>

            <li
                   data-thumb="assets/img/media/media_01.jpg"
                   data-title="<?php echo $musica['musica']; ?>"
                    data-genre="rock"
                   data-artist="<?php echo $musica['nome']; ?>	"
                   data-length="2:03"
                   data-itunes="http://xvelopers.com"
                   data-video="http://xvelopers.com"
                   data-mp3="<?php echo $musica['caminho']; ?>"></li>

						<?php } ?>

          </ul>
          <!--Playlist ends-->
        </div>
        <div class="container player_wrapper">
          <div class="row">
            <div id="player-instance" class="jp-jplayer"></div>
            <div class="jp-title audio-title">little black bag pack</div>
            <div class="rock_controls controls">
              <div  class="fa fa-play jp-play"></div>
              <div  class="fa fa-pause jp-pause"></div>
            </div>
            <!--controls-->
            <div class="audio-progress">
              <div class="jp-seek-bar">
                <div class="audio-play-bar jp-play-bar" style="width:20%;"></div>
              </div>
              <!--jp-seek-bar-->
            </div>
            <!--audio-progress-->
            <div class="audio-timer"> <span class="jp-current-time">01:02</span> </div>
            <div class="jp-volume">
              <ul>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
            <a href="#" class="playlist_expander fa fa-bars"></a> </div>
        </div>
      </div></div>
    </section>
    <!--//banner-->
    <!--=========================
     Header
    ===========================-->
    <header>
      <nav id="sticktop" class="navbar navbar-default" data-sticky="true">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"><img src="assets/img/basic/logo.png" alt="logo"/></a> </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#section_2">Origem</a></li>
              <li><a href="#section_5">Carreira</a></li>
              <li><a href="#section_7">Albuns</a></li>
              <li><a href="#section_9">Musicas</a></li>
              <li><a href="#section_11">Downloads</a></li>
              <li><a href="#section_13">Conecte</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </nav>
    </header>


    <div class="sections_wrapper">
      <!--================
     News
    ====================-->

      <section id="section_2" class="news_section section_first">
        <div class="container animatedParent ">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget">
                <h2 class="animated fadeInDown">Elvis Presley</h2>
                <h5 class="animated fadeInLeft">Origem</h5>
              </div>
            </div>
            <!--column-->
          </div>
          <!--row-->
        </div>
        <!--contaier-->
        <div class="news_widget">
          <div class="container controls_wrapper animatedParent ">
            <div class="carousel_controls"> <span id="news-prev" class="fa fa-angle-left animated fadeInLeft"></span> <span id="news-next" class="fa fa-angle-right animated bounceInRight "></span> </div>
            <!--controls-->
          </div>
          <!--//controls_wrapper//carousel_overlay-->

          <div class="news_carousel animatedParent ">
            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n1.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="1">
                      Read Full Article
                  </a>
                </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n2.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="2">
                      Read Full Article
                  </a>
               </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n3.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="3">
                      Read Full Article
                  </a>
                </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n4.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="4">
                      Read Full Article
                  </a>
                </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n5.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="5">
                      Read Full Article
                  </a>
                </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

            <div class="news_box fadeInUp animated">
              <figure><img src="assets/img/news/n6.jpg" alt="" /></figure>
              <div class="news_info_wrapper">
                <div class="news_info">
                  <h5>poison fragnances coming soon</h5>
                  <ul class="news_meta">
                    <li>by POISON</li>
                    <li>Sep 20, 2013</li>
                  </ul>
                  <!--//news_meta-->
                  <h6>3 comments</h6>
                </div>
                <!--news_info-->
              </div>
              <!--//news_info_wrapper-->
              <div class="hover">
                  <a class="triggerNews" href="news.html" data-number="6">
                      Read Full Article
                  </a>
                </div>
              <!--//hover-->
            </div>
            <!--//news_box bounceInUp animated-->

          </div>
          <!--//news_carousel-->

        </div>
        <!--//news_widget-->
      </section>
      <!--//News-->

      <section id="newsAjaxWrapper" class="container">
            <a class="closeNewsAjax" href="#section_2"><i class="fa fa-times"></i></a>
            <div id="newsAjax" class="content_expander"></div>
      </section>

      <!--================
     Newsletter
    ====================-->
      <section id="section_3" class="newsletter_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h3>we have special news &amp; prizes only <br>
                for our biggest poison fans!</h3>
              <div class="team_prizes">
              	<figure class="team_stand animatedParent" data-sequence="400">
                	<img class="animated fadeInUp" data-id="1" src="assets/img/team/man1.png" alt=""/>
                    <img class="animated fadeInRight" data-id="2" src="assets/img/team/man2.png" alt=""/>
                    <img class="animated fadeInLeft" data-id="3" src="assets/img/team/man3.png" alt=""/>
                    <img class="animated fadeInRight" data-id="4" src="assets/img/team/man4.png" alt=""/>
                    <img class="animated fadeInLeft" data-id="5" src="assets/img/team/man5.png" alt=""/>
                </figure>
                <div class="newsletter_form">
                  <form>
                    <input type="text" placeholder="Name"/>
                    <input type="email" placeholder="Email"/>
                    <button>Access</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--//Newsletter-->

      <!--======================================
    Parallax/facebook page promotion Section
    ==========================================-->
      <section id="section_4" class="parallax parallax_one facebook_promo animatedParent " data-stellar-background-ratio="0.5">
        <div class="parallax_inner ">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="animated fadeInUp">Poison music</h1>
                <h3 class="animated fadeInDown">"Like" If you love them! </h3>
                <a href="#" class="btn btn_fb">like us on facebook</a> </div>
              <!--column-->
            </div>
            <!--row-->
          </div>
          <!--container-->
        </div>
        <!--parallax_inner-->
      </section>
      <!--//parallax-->

    <!--=============
    Music Tracks
    ===============-->
      <section id="section_5" class="track_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-8">
              <div class="section_head_widget animatedParent ">
                <h2 class="animated fadeInLeft">poison Music</h2>
                <h5 class="animated bounceInRight">All Albums</h5>
              </div>
              <!--section_head_widget-->
            </div>
            <div class="col-xs-12 col-sm-4 text-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    2014 <span class="fa fa-caret-down"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">2013</a></li>
                    <li><a href="#">2012</a></li>
                    <li><a href="#">2011</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <!--row-->
          <div class="row tracks_widget">
            <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n1.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>Loremipsum Per hour</h4>
                    <h6>13 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover"> <a class="triggerTrack" href="albums.html" data-number="1"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->

             <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n2.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>Loremipsum</h4>
                    <h6>12 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover">  <a class="triggerTrack" href="albums.html" data-number="2"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->

            <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n3.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>Against the lorem</h4>
                    <h6>12 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover"> <a class="triggerTrack" href="albums.html" data-number="3"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->

            <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n4.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>Everything is lorem</h4>
                    <h6>11 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover"> <a class="triggerTrack" href="albums.html" data-number="4"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->

            <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n5.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>Loremipsum myself</h4>
                    <h6>9 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover"> <a class="triggerTrack" href="albums.html" data-number="5"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->

            <div class="col-sm-4 col-xs-12 animatedParent">
              <div class="track_box animated fadeInUp">
                <figure><img src="assets/img/news/n6.jpg" alt="" /></figure>
                <div class="track_info_wrapper">
                  <div class="track_info">
                    <h4>The lorem Years</h4>
                    <h6>14 tracks</h6>
                  </div>
                  <!--news_info-->
                </div>
                <!--//news_info_wrapper-->
                <div class="hover"> <a class="triggerTrack" href="albums.html" data-number="6"> Read Full Article </a> </div>
                <!--//hover-->
              </div>
              <!--//news_box-->
            </div>
            <!--column-->
          </div>

        </div>
        <div class="clearfix"></div>
        <!--=============================tracks-Details=========================-->
        <div class="trackLoading"><i class="fa fa-spin fa-refresh"></i></div>
        <section id="tracksAjaxWrapper" class="container">
        	<a class="closeTrackAjax" href="#section_5"><i class="fa fa-times"></i></a>
            <div id="tracksAjax" class="content_expander music_widget">
        	</div>
        </section>


        <!--//tracks-Details-->

        <div class="container">
          <ul class="channels_list row animatedParent ">
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
            <li class="col-xs-12 col-sm-4 animated fadeInLeft"><a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
          </ul>
       </div>

    </section>


<!--======================================
    Parallax/Testimonial Section
    ==========================================-->
      <div id="section_6" class="parallax parallax_two testimonial" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="testimonial_quotes owl-carousel owl-theme ">
                  <blockquote> <b class="fa fa-quote-left"></b> This album is amazing!!! Im in love
                    with this album from start to finish.
                    Welcome back poison! <b class="fa fa-quote-right"></b> <a class="author_name" href="#">by Budlish</a> </blockquote>
                  <blockquote> <b class="fa fa-quote-left"></b> This album is amazing!!! Im in love
                    with this album from start to finish.
                    Welcome back poison! <b class="fa fa-quote-right"></b> <a class="author_name" href="#">by Budlish</a> </blockquote>
                  <blockquote> <b class="fa fa-quote-left"></b> This album is amazing!!! Im in love
                    with this album from start to finish.
                    Welcome back poison! <b class="fa fa-quote-right"></b> <a class="author_name" href="#">by Budlish</a> </blockquote>
                </div>
                <!--testimonial_quotes carousel end here-->

              </div>
              <!--column-->
            </div>
            <!--row-->
          </div>
          <!--container-->
          <a href="#" class="btn_itunes"><span class="fa fa-music"></span>poison itunes</a> </div>
        <!--parallax_inner-->
      </div>
      <!--//parallax-->

    <!--======================================
    Media Section
    ==========================================-->
      <section id="section_7" class="media_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-8">
              <div class="section_head_widget animatedParent">
                <h2 class="animated fadeInLeft">poison Media</h2>
                <h5 class="animated bounceInUp">photos &amp; videos</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 text-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    2014 <span class="fa fa-caret-down"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">2013</a></li>
                    <li><a href="#">2012</a></li>
                    <li><a href="#">2011</a></li>
                  </ul>
                </div>
            </div>
            <!--section_head_widget-->
          </div>
          <!--row-->

          <div class="row media_widget">
            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop">
                	<img src="assets/img/media/media_01.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>Behind the scenes</h6>
                  25 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop2">
                	<img src="assets/img/media/media_02.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>poison in news</h6>
                  35 photos
                </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop3">
                	<img src="assets/img/media/media_03.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>paris live concert</h6>
                  105 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop4">
                	<img src="assets/img/media/media_04.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>poison in news</h6>
                  95 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop5">
                	<img src="assets/img/media/media_05.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>photos by fans</h6>
                  70 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop6">
                	<img src="assets/img/media/media_06.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>the lorem</h6>
                  23 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop7">
                	<img src="assets/img/media/media_07.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>on red carpet</h6>
                  49 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop8">
                	<img src="assets/img/media/media_08.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>during live concert</h6>
                  32 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

           <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop9">
                	<img src="assets/img/media/media_09.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>fashion show in dublin</h6>
                  70 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop10">
                	<img src="assets/img/media/media_10.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>the Lorem</h6>
                  23 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop11">
                	<img src="assets/img/media/media_11.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>party with friends</h6>
                  49 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

            <div class="col-xs-12 col-sm-4 col-md-3 animatedParent">
              <figure class="animated fadeInUp">
              	<a href="#" data-toggle="modal" data-target="#gal_pop12">
                	<img src="assets/img/media/media_12.jpg" alt="" />
                </a><!--hyperlink-->
                <figcaption>
                  <h6>during live concert</h6>
                  32 photos </figcaption>
              </figure>
              <!--figure-->
            </div>
            <!--Column / media item-->

          </div>
        </div>
        <!--container-->
      </section>
      <!--//media_section-->

      <!--======================================
    Parallax/event_promo Section
    ==========================================-->
      <section id="section_8" class="parallax parallax_three event_promo" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 animatedParent ">
                <h1 class="animated fadeInDown">performing live!</h1>
                <h3 class="animated bounceInRight">stars tour de paris</h3>
                <h5  class="animated bounceInUp">november 5th 2013</h5>
                <a href="#" class="btn">book tickets now</a> </div>
              <!--column-->
            </div>
            <!--row-->
          </div>
          <!--container-->
        </div>
        <!--parallax_inner-->
      </section>
      <!--//parallax-->

      <!--======================================
    Tours Section
    ==========================================-->
      <section id="section_9" class="tours_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget">
                <h2>poison tours</h2>
                <h5>all tours this year</h5>
              </div>
            </div>
            <!--section_head_widget-->
          </div>
          <!--row-->

          <div class="tours_widget">
            <div class="tour_row_header">
              <div class="column_one"> Date </div>
              <div class="column_two"> &nbsp;<!--no header for picture column-->
              </div>
              <div class="column_three"> Location </div>
              <div class="column_four"> Venue </div>
              <div class="column_five"> Notes </div>
              <div class="column_six"> Tickets </div>
            </div>
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>10/10/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_07.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>10/11/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_01.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Events Center </div>
                <div class="column_four"> Pittsburgh, PA US </div>
                <div class="column_five"> with Emblem3 </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>15/11/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_05.jpg" alt="" /> </div>
                <div class="column_three"> TD Lorem </div>
                <div class="column_four"> Boston, MA US </div>
                <div class="column_five"> with Emblem3 </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>20/11/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_01.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket sold_out" href="#">Sold Out</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>25/11/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_08.jpg" alt="" /> </div>
                <div class="column_three"> Wells Fargo Center </div>
                <div class="column_four"> Philadelphia, PA US </div>
                <div class="column_five"> with Emblem3 </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>30/11/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_07.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>1/12/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_06.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> with Emblem3 </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>10/12/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_02.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>15/12/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_03.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> with Emblem3 </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>20/12/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_04.jpg" alt="" /> </div>
                <div class="column_three"> Lorem Center </div>
                <div class="column_four"> Fairfax, VA US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket sold_out" href="#">Sold Out</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>25/12/14</span>
                </div>
                <div class="column_two"> <img src="assets/img/media/media_05.jpg" alt="" /> </div>
                <div class="column_three"> Ipsum! Center </div>
                <div class="column_four"> Louisville, KY US </div>
                <div class="column_five"> vIP Offers Sold Out </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="#">buy tickets</a> </div>
              </div>
            </div>
            <!--tour row-->
          </div>
        </div>
        <!--container-->
      </section>
      <!--//tours-->

      <!--======================================
    Parallax/Tweets Section
    ==========================================-->
      <div id="section_10" class="parallax parallax_four latest_tweets" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
          <div class="container">
            <div class="row">
              <div class="col-xs-12"> <span class="fa fa-twitter tweet_icon"></span>
                <div class="tweet"></div>
              </div>
              <!--column-->
            </div>
            <!--row-->
          </div>
          <!--container-->
        </div>
        <!--parallax_inner-->
      </div>
      <!--//parallax-->
      <!--======================================
    Team/Band Members
    ==========================================-->
      <section id="section_11" class="team_section">
        <div class="container overlayNews">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget">
                <h2>poison band</h2>
                <h5>band biography</h5>
              </div>
            </div>
            <!--column-->
          </div>
          <!--row-->
        </div>
        <!--contaier-->
        <div class="team_widget">
          <div class="container controls_wrapper animatedParent ">
            <div class="carousel_controls"> <span id="member-prev" class="fa fa-angle-left animated fadeInLeft"></span> <span id="member-next" class="fa fa-angle-right animated bounceInRight"></span> </div>
            <!--controls-->
          </div>
          <!--//controls_wrapper//carousel_overlay-->

          <div class="members_carousel animatedParent" data-sequence="400">
            <figure class="animated fadeInLeft" data-id="1"> <img src="assets/img/team/member-1.jpg" alt=""/>
              <figcaption><a href="#">jackson peterson</a></figcaption>
            </figure>
            <figure class="animated fadeInLeft" data-id="2"> <img src="assets/img/team/member-2.jpg" alt=""/>
              <figcaption><a href="#">willaims Adam Jonas</a></figcaption>
            </figure>
            <figure class="animated fadeInLeft" data-id="3"> <img src="assets/img/team/member-3.jpg" alt=""/>
              <figcaption><a href="#">jacobs Jerry Jonas</a></figcaption>
            </figure>
            <figure class="animated fadeInLeft" data-id="4"> <img src="assets/img/team/member-4.jpg" alt=""/>
              <figcaption><a href="#">michael Jonas II</a></figcaption>
            </figure>
            <figure class="animated fadeInLeft" data-id="5"> <img src="assets/img/team/member-5.jpg" alt=""/>
              <figcaption><a href="#">david Tomlinson</a></figcaption>
            </figure>
          </div>
          <!--members_carousel-->
        </div>
      </section>

      <!--======================================
    About
    ==========================================-->
      <section id="section_12" class="about_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget animatedParent ">
                <h1 class="animated fadeInDown">Their amazing story</h1>
                <h4>how they came to be so famous.</h4>
              </div>
            </div>
            <!--section_head_widget-->
          </div>
          <!--row-->

          <div class="row">
            <div class="col-xs-12">
              <div class="text_widget">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero ligula, mollis eget ipsum a, aliquet pellentesque nisi. Donec mollis vel orci eget consequat. Etiam ultrices eu erat eu facilisis. Morbi nec suscipit tortor. Sed eu est leo. Phasellus a enim a sem auctor sodales. Vestibulum interdum ultrices tincidunt. Vivamus suscipit odio id pretium commodo. Donec vitae pellentesque dui. Nullam a hendrerit mi, vel placerat neque. Nunc et nunc turpis. Mauris sed congue lectus, ut blandit diam. Sed pellentesque egestas magna in feugiat. Praesent in ipsum velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Quisque lacinia euismod lobortis. Pellentesque purus orci, consequat vel mi id, pretium accumsan urna. In hac habitasse platea dictumst. Aenean ut accumsan nunc. Nam ac bibendum mi. Maecenas ultricies blandit vehicula. Nullam posuere metus congue odio dictum vestibulum. Quisque pharetra, nisl sit amet fermentum dignissim, est felis consequat sapien, eu pellentesque nulla mi sed lacus. Aenean molestie condimentum consequat.</p>
                <p>Sed a lectus suscipit, blandit arcu a, vehicula nisi. Quisque faucibus elit ac mauris sodales auctor. Quisque scelerisque aliquam accumsan. Donec ullamcorper tortor nec nisl egestas, vitae interdum diam dignissim. Donec sollicitudin eu tellus in fermentum. Ut eu dui sit amet erat euismod euismod in non turpis. Pellentesque luctus dui massa.</p>
              </div>
            </div>
          </div>
        </div>
        <!--container-->
      </section>


    <!--=====================================
    Gallery Pop Ups :
    You can create as many modals/poups as needed,
    ==========================================-->

      <div class="modal fade" id="gal_pop" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>Behind the scenes</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>poison in news</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>paris live concert</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>poison in news</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>photos by fans</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>the lorem</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>on red carpet</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>during live concert</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>fashion show in dublin</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>the Lorem</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>party with friends</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="gal_pop12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">

                  <div class="gallery_popup container">
                  	<ul class="gallayoutOption">
                    	<li class="active"><a href="#" class="fa fa-th gridGallery"></a></li>
                        <li><a href="#" class="fa fa-picture-o sliderGallery"></a></li>
                    </ul>

                    <h2>during live concert</h2>
                    <h6>24 Photos</h6>

                    <div class="galery_widget">
                        <ul class="gal_list">
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g5.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g6.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g7.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g8.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g9.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g10.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g11.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g12.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g13.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g14.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g15.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g16.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g17.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g18.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g19.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g20.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g1.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g2.jpg" alt="" /></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""/></a></li>
                            <li class="trigger_slider"><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""/></a></li>
                        </ul>

                        <ul class="social_share">
                            <li><a class="btn-share twitter" href="#">Tweet</a><span class="share-count">896</span></li>
                            <li><a class="btn-share facebook" href="#">Like</a><span class="share-count">2k</span></li>
                            <li><a class="btn-share google-plus" href="#">1+</a><span class="share-count">18</span></li>
                        </ul>

                        <ul class="channels_list row">
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                          <li class="col-xs-12 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                          <li class="col-xs-12 col-sm-4"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                        </ul>

                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div>


      <!--======================================
    Footer
    ==========================================-->
      <footer id="section_13" class="parallax parallax_five footer" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
          <div class="container">
              <!--=========================
              Contact Form
              ===========================-->
            <div class="contact_Us">
       		   <div class="tabs-wrap tabs-wrap-active clearfix">
                    <ul class="tabs">
                        <li class="tab-link tab-link1 active" data-tab="tab1">
                            <span>Get Social</span>
                        </li>
                        <li class="tab-link tab-link2" data-tab="tab2">
                            <span>Message Us</span>
                        </li>
                    </ul>
                </div><!--tab wrapper-->

                <div id="tab1" class="tab-content active">
                    <ul class="channels_list row animatedParent " data-sequence="400">
                      <li class="col-xs-12 col-sm-4 animated fadeInLeftShort" data-id="1"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
                      <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="2"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
                      <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="3"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
                      <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="4"> <a href="#"><i class="fa fa-instagram"></i>poison Instagram</a></li>
                      <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="5"> <a href="#"><i class="fa fa-flickr"></i>poison Flicker</a></li>
                      <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="6"> <a href="#"><i class="fa fa-pinterest"></i>poison pinterest</a></li>
                    </ul>
                </div>
                <div id="tab2" class="tab-content animatedParent">
                    <div class="contactFormWrapper ">
                        <form id="contactform" action="http://xvelopers.com/html/poison/assets/php/submit.php" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <input type="text" id="name" placeholder="Name"/>
                                </div><!--column-->
                                <div class="col-xs-12 col-md-4">
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                </div><!--column-->
                                <div class="col-xs-12 col-md-4">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                                </div><!--column-->
                                <div class="col-xs-12 col-md-8">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div><!--column-->
                                <div class="col-xs-12 col-md-4">
                                    <button class="btn btn-default" id="submit1" type="submit">
                                        send message
                                    </button>
                                </div><!--column-->

                            </div><!--row-->
                        </form>
                        <div id="valid-issue" style="display:none;"> Please Provide Valid Information</div>
                    </div>
                </div>

            </div>


            <div class="row">
              <div class="col-xs-12">
                <div class="copyrights">&copy; 2014 <a href="#">poison music</a>.</div>
              </div>
            </div>
          </div><!--container-->
        </div><!--parallax_inner-->
      </footer><!--//parallax-->
    </div>

</div>
<!--===================================================================
Scripts
====================================================================-->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jpreloader.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing-1.3.pack.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="assets/js/tweetie.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/jPlayer/jquery.jplayer.min.js"></script>
<script src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script src="assets/js/jquery.vegas.min.js"></script>
<script src="assets/js/css3-animate-it.js"></script>
<script src="assets/js/jquery.fractionslider.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
<script src="assets/js/jquery.waitforimages.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/bigvideo.js"></script>
<script src="assets/js/main.js"></script>
<script>

$('body').jpreLoader({
		splashID: "#jSplash",
		loaderVPos: '50%',
		autoClose: true,
});
/*====================================================================
Put Your Google Tracker Code here
===================================================================*/
</script>

</body>

<!-- Mirrored from xvelopers.com/html/poison/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 19:35:31 GMT -->
</html>
