 <section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 style="font-family: Didot,Didot LT STD,Hoefler Text,Garamond,Times New Roman,serif;"  class="mb-4 pb-0">{{ $home->name }}<br> {{ $home->lastname }}</h1>
<!--        <h1 style="font-family: 'Edwardian Script ITC';"  class="mb-4 pb-0">{{ $home->name }}<br> {{ $home->lastname }}</h1>-->
<!--     <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>-->
<!--      <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
      <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>-->
           @if($home->link)
      <a href="{{ $home->link }}" class="venobox play-btn mb-4" data-vbtype="video"
         data-autoplay="true" style="margin-bottom: 5px;"></a>
         @endif
         @if($home->text)
        <p class="mb-4 pb-0">{{ $home->text }}</p>
        @endif
<!--      <a href="#about" class="about-btn scrollto">Biography</a>-->
<div><iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:4SCnvy41kTvpfWwqLhqnpa&size=basic&theme=dark" width="143" height="25" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe></div>
<div id="newsocial-links">

              <a target="_blank" href="https://www.facebook.com/MichaelAndreasMusic/"  target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://www.youtube.com/user/mahaeringer" class="youtube"><i class="fa fa-youtube-play"></i></a>
              <a target="_blank" href="https://open.spotify.com/artist/4SCnvy41kTvpfWwqLhqnpa" class="spotify"><i class="fa fa-spotify"></i></a>
              <a target="_blank" href="https://www.instagram.com/michaelandreasmusic/" class="instagram"><i class="fa fa-instagram"></i></a>
              
<!--              <a href="#" class="music"><i class="fa fa-music"></i></a>-->
              <a target="_blank" href="https://music.apple.com/us/album/summertime-single/1133956462?app=itunes&l=it&ls=1" class="apple"><i class="fa fa-apple"></i></a>

            </div>
    </div>


  <!-- Modal -->

    <!-- <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script> -->
  </section>


  <main id="main">
