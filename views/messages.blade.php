@extends('template')
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <div class="container">
      <div class="row">
      <div class="col-3">
  <h1>E-Mail</h1>
  <ul class="list-group">
      @if($messages)
      @foreach($messages->unique('email') as $message)
      <li class="list-group-item">{{ $message->email  }}</li>
      @endforeach
      @endif
  </ul>
      </div>
      <div class="col-9">
          <h1>Messages</h1>
          @if($messages)
          <ul class="list-group">
          @foreach($messages as $message)
          @if($message->message)
          <li class="list-group-item">
              <p>{{ $message->message }}</p>
              <h3>{{ $message->email  }}</h3>
              
          </li>
          @endif
          @endforeach
          </ul>
          @endif
      </div>
      </div>
  
  
  
  
  
  
  
  </div>

  


@stop
       