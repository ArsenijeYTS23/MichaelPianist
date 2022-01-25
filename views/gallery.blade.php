 <!--==========================
      Gallery Section
    ============================-->
    <section style="background: #f6f7fd" id="gallery" class="wow fadeInUp">

      <div class="container">
          <div style="margin: 0px;" class="section-header">
          <h2>Gallery</h2>
          <ul style="text-align: center; padding: 0 0 0 0;" class="list-inline-mb-0">
          @foreach($albums as $album)
          <li class="list-inline-item"><a href="#album{{ $album }}"><p>Album {{ $album }}</p></a></li>          
          @endforeach       
        </ul>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel photo">
          @foreach($photoses as $photo)
         
          @if($photo->number==1)
          <a  href="img/photos/{{ $photo->id }}.jpg" data-hash="album{{ $photo->album }}" class="venobox" data-gall="gallery-carousel"><div style=" height:200px; overflow: hidden;"><img src="img/photos/{{ $photo->id }}.jpg" alt=""></div></a>
          
          @else
          <a href="img/photos/{{ $photo->id }}.jpg" class="venobox" data-gall="gallery-carousel"><div style=" height:200px; overflow: hidden;"><img src="img/photos/{{ $photo->id }}.jpg" alt=""></div>{{ $photo->album }}</a>
          
          @endif
          
          @endforeach
<!--          <a href="img/gallery/11.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/11.jpg" alt=""></a>
        <a href="img/gallery/12.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/12.jpg" alt=""></a>
        <a href="img/gallery/13.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/13.jpg" alt=""></a>
        <a href="img/gallery/14.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/14.jpg" alt=""></a>-->
       
            </div>

    </section>
       
  