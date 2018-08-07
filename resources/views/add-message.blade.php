@extends('layouts.pattern')  

@section('content')
	<div class="jumbotron">
      	<div class="container">
        	<h1>{{$header}}</h1>
        	<p>{{$text}}</p>
        	<p><a class="btn btn-primary btn-lg" href="../public" role="button">Вернуться на главную страницу &raquo;</a></p>
      	</div>
    </div>
    
    <div class="container">
      <!-- Example row of columns -->
      	<div class="row">
			<div class="form">
				<form method="POST" action="{{route('messageStore')}}">
				  	<div class="form-group">
				    	<label for="title">Тема сообщения</label>
				    	<input type="text" class="form-control" id="theme" name="theme" placeholder="Тема сообщения">
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputFile">Полный текст</label>
				    	<textarea class="form-control" name="text"></textarea>
				  	</div>
				  	<button type="submit" class="btn btn-default">Отправить</button>
				   	{{ csrf_field() }} <!-- Защита от межсайтовых подделок запросов --> 
				</form> 
	        </div>
      	</div>
     	<hr>

      	<footer>
        <p>&copy; 2016 Company, Inc.</p>
      	</footer>
    </div> <!-- /container -->
@endsection