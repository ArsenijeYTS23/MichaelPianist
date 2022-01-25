
    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Press</h2>

        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
          <div class="col-lg-2 col-md-4">
            <div class="venue-gallery" style="height: 350px;
    overflow: hidden;">
                <a href="img/1.png" class="venobox" data-gall="venue-gallery">
                    <img src="img/1.png" alt="" class="img-fluid">
              </a>

            </div>
            <p style="font-size: 80%; text-align: center;">2/8/2019 pianistmagazine.com</p>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="venue-gallery" style="height: 350px;
    overflow: hidden;">
                <a href="img/2.png" class="venobox" data-gall="venue-gallery">
                    <img src="img/2.png" alt="" class="img-fluid">
              </a>

            </div>
            <p style="font-size: 80%; text-align: center;">30/7/2019 Classic Fm radio</p>
          </div>
            @if($presses)
             @foreach($presses as $press)
          <div class="col-lg-2 col-md-4">
            <div class="venue-gallery">
                <a href="img/press/{{ $press->id }}.jpg" class="venobox" data-gall="venue-gallery">
                    <img src="img/press/{{ $press->id }}.jpg" alt="" class="img-fluid">
              </a>
                <p style="font-size: 80%; text-align: center;">{{ $press->title }}</p>
            </div>
          </div>
             @endforeach
             @endif
        </div>
      </div>

    </section>
