@extends('layouts.pattern')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$header}}</h1>
      <p>{{$text}}</p>
      <p><a class="btn btn-primary btn-lg" href="add" role="button">Добавить новое сообщение &raquo;</a></p>
    </div>
  </div>

  <div class="container">
<!-- Example row of columns -->
    <div class="row">
        
      @foreach ($messages as $message)

        <div class="col-md-4">
          <h2>{{$message->theme}}</h2>
          <p>{{$message->text}}</p>
          <p><a class="btn btn-secondary" href="{{ route('messageShow', ['id'=>$message->id]) }}" role="button">Ссылка на текст &raquo;</a></p>
          <form action="{{ route('messageDelete', ['message' => $message->id]) }}" method="post">
            {{ method_field('DELETE') }} <!--<input type="hidden" name="_method" value="DELETE"> -->
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">
            Удалить сообщение
            </button>            
          </form>

        </div>

      @endforeach

    </div>
    <hr>
  </div> <!-- /container -->
@endsection