@extends('template')
@section('content')
  <!--==========================
    Intro Section
  ============================-->

 @include('home')
 @include('about')
 @include('schedule')
 @include('compositiones')

 @include('gallery1')
  @include('video')
 @include('venue')
 @include('dialog')

    <section id="subscribe" style="background:#0b1126">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>{{ $newsletter_text }}</p>
        </div>

        <form method="POST" action="{{ url('newsletter') }}">

          <div class="form-row justify-content-center">
            <div class="col-auto">
                <input type="text" class="form-control" name="email" placeholder="Enter your Email" required>
                <h2 style="color: white; text-align: center;">{{ $newsletter }}</h2>
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
             <?php echo csrf_field(); ?>
        </form>

      </div>
    </section>


@stop
