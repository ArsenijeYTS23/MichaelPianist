 <!--==========================
      Gallery Section
    ============================-->

    <section style="background: rgba(1, 4, 14, 0.98); color: white" id="video" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2 style="color: white;">Video</h2>
<!--          <p>Check our gallery from the recent events</p>-->
        </div>
      </div>

        <div class="owl-carousel gallery-carousel" style="margin-bottom: 100px;">

          @foreach($videos->sortByDesc('id')->values() as $video)
       <a href="{{ $video->link }}" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"><img src="img/video/{{ $video->id }}.jpg" alt="W3Schools.com">
           <p style="color: white;  text-align: center;">{{ $video->title }}</p>
       </a>
          @endforeach

                    </div>

    </section>
