 <!--==========================
      Gallery Section
    ============================-->
 
 <section style="background: rgba(1, 4, 14, 0.98); color: white" id="compositions" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
            <h2 style="color: white; font-size: 160%;">{{ $own_compositiones }}</h2>
        </div>
      </div>
           @if($compositions)
           <div  class="owl-carousel gallery-carousel" style="margin-bottom: 100px;">
          
          @foreach($compositions as $composition)
          <a  href="{{ $composition->link }}" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"><img src="img/compositiones/{{ $composition->id }}.jpg" alt="W3Schools.com">
           <p style="color: white;  text-align: center;">{{ $composition->title }}</p>
       </a>
          @endforeach
          
                    </div>
           @endif

    </section>
       
     