@extends('layouts.pattern')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$header}}</h1>
      <p>{{$text}}</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
<!-- Example row of columns -->
    <div class="row">
        
      @if($message)

        <div>
          <h2>{{$message->theme}}</h2>
          <p>{{$message->text}}</p>
        </div>

      @endif

    </div>
    <hr>
  </div> 
<!-- /container -->
@endsection