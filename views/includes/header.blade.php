<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Michael Andreas Hearinger</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="twitter:card" content="summary_large_image"></meta>
  <meta name='twitter:url' content='http://www.michael-andreas-pianist.com'>
  <meta name='twitter:title' content='Michael'>

  <meta name="twitter:image:src" content="http://carobnanota.com/img/photos/248.jpg">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">



  <link href="//db.onlinewebfonts.com/c/ca6f91c0cad2fe33614026d17117601d?family=Edwardian+Script+ITC" rel="stylesheet">


  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <style>
  #schedule .dialog:hover {
  background-color: black;
}
.modal-backdrop
{
    opacity:0.07 !important;
}
/* .fade.show{
  opacity:0.01 ;
} */
  </style>

  <!-- <script>
  $(function(){
    $('.selectpicker').selectpicker();
});
  </script> -->



  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
    @if($home)
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
<!--        <h1><a  href="#main">M<span>A</span>H</a></h1>-->
       <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">

        <ul class="nav-menu">

          <li class="menu-active"><a href="#intro">{{ $home->home }}</a></li>
          <li><a href="#about">{{ $home->biography }}</a></li>
<!--          <li><a href="#speakers">Speakers</a></li>-->
          <li><a href="#schedule">{{ $home->schedule }}</a></li>

<!--          <li><a href="#hotels">Hotels</a></li>-->
 <li><a href="#compositions">{{ $home->compositions }}</a></li>


          <li><a href="#gallery1">{{ $home->gallery }}</a></li>
          <li><a href="#video">{{ $home->videos }}</a></li>
          <li><a href="#venue">{{ $home->newspapers }}</a></li>
<!--         <li><a href="#venue">{{ $home->social_media }}</a></li>-->
<!--          <li><a href="#supporters">Sponsors</a></li>-->
          <li><a href="#subscribe">{{ $home->contact }}</a></li>
          <li> </li>

         </ul>


<!--          </li>
          <li style="margin-left: 50px;">
            <iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:4ikPJGH7I7IyhdBJs1GMhh&size=detail&theme=light" width="200" height="40" scrolling="no" frameborder="0" style="border:none; overflow:visible;" allowtransparency="true"></iframe>
          </li>-->
<!--          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>-->

      </nav><!-- #nav-menu-container -->

          





        @endif
    </div>

  </header><!-- #header -->
