
<section id="gallery1" class="section-with-bg">

      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Photos</h2>
      <ul class="nav nav-tabs" role="tablist">
            @foreach($albums as $album)
            <li  class="nav-item" style="margin-bottom: 1px;">
                @if ($loop->first)
                <a   class="nav-link active" href="#day-{{ $album+1 }}" role="tab" data-toggle="tab" style="padding: 7px 50px;">
                    @else
                <a   class="nav-link" href="#day-{{ $album+1 }}" role="tab" data-toggle="tab" style="padding: 7px 50px;">
                    @endif
                    <div id='album' >Album-{{$album}}</div></a>
          </li>
            @endforeach
        </ul>
        </div>





        <div class="tab-content row justify-content-center">
           @foreach($albums as $album)
        @if ($loop->first)
          <div role="tabpanel" class="col-lg-12  tab-pane fade show active" id="day-{{ $album+1 }}">
              @else
          <div role="tabpanel" class="col-lg-12  tab-pane fade" id="day-{{ $album+1 }}">
              @endif
         <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

             @foreach($photoses->where('album',$album) as $photo)
          <div class="col-lg-3 col-md-4">
              <div  class="venue-gallery">
                  <div class="photo-album" style="margin:1px;">
                <a href="img/photos/{{ $photo->id }}.jpg" class="venobox" data-gall="venue-gallery">
                    <img src="img/photos/{{ $photo->id }}.jpg" alt="" class="img-fluid">
              </a>
                  </div>
                <p style="font-size: 80%; text-align: center;">{{ $photo->title }}</p>
            </div>
          </div>
             @endforeach
        </div>
      </div>



          </div>
         @endforeach

        </div>

      </div>

    </section>
