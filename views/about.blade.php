
    <!--==========================
      About Section
    ============================-->
    <section style="background: #151010;" id="about">
        <div  class="container">
        <div class="row">
          <div class="col-lg-12">
              @if($bio)
            <h2>{{ $bio->title }}</h2>

            <p>Michael Andreas Haeringer</p>
            <p><a href="MichaelHPdf.pdf" download>
  Download biography (pdf)
</a></p>
 <img  class="rounded" style="float: left;  margin-right:40px; margin-bottom: 20px;" src="img/about/1.jpg">

 <p style="text-align: justify;">{{ $bio->description1 }}</p>
 <img  class="rounded" style="float: right; width: 200px; margin-left: 40px;" src="img/about/2.jpg">
 <p style="text-align: justify;">{!! $bio->description2 !!} </p>
    <img  class="rounded" style="float: left; margin-right: 40px; margin-bottom: 20px;" src="img/about/3.jpg">
 <p style="text-align: justify;">{!! $bio->description3 !!} </p>
 <img  class="rounded" style="float: right; margin-left: 40px;" src="img/about/4.jpeg">
 <p style="text-align: justify;">{!! $bio->description4 !!}  </p>
(Updated on {{ $bio->updated }})
@endif
          </div>

        </div>
      </div>
    </section>
