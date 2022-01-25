
    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
            @if($lang=='en')
          <h2>Upcoming Michaels concerts</h2>
           @elseif($lang=='de')
          <h2>DAS KOMMENDE MICHAELS-KONZERTE</h2>
          @else
          <h2>PRÓXIMOS CONCIERTOS DE MICHAELS</h2>
          @endif
        </div>

        <div class="tab-content row justify-content-center">


          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
              @if($schedule)
              @foreach($schedule as $day)
          <div class="row schedule-item">
                <div class="col-md-2"><time> {{ Carbon\Carbon::parse($day->date)->format('d-m-Y')}}</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/events/{{ $day->id}}.jpg" alt="Brenden Legros">
                </div>
                <h4>{{ $day->title }}</h4>
                <p>{{ $day->description }}</p>
                <p><span style="font-weight: bold;">{{ $day->time }}</span></p>
                @if($day->more_info)
                <p><span style="font-weight: bold;"><a href='{{ $day->more_info }}'>more info</a></span></p>
                @endif
              </div>
            </div>
              @endforeach
              @endif
<!--   slike su img/speakers-->
          </div>

        </div>

      </div>

    </section>
