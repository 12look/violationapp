<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	@if ($__env->yieldContent('title'))
    	@yield('title')
    	| На дороге
	@else
		На дороге
	@endif
	</title>

	<link href="/css/all.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="/">Главная</a>
        </li>
        <li>
          <a href="/violation/create">Добавить нарушение</a>
        </li>
        <li>
          <a href="#">О проекте</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3>Стали свидетелем нарушения?<br />
          Есть доказательства?<br />
          Добавляйте информацию на сайт.
          <p class="lead"></p>
        </h3>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="well well-lg"> 
          <form id="search" class="input-group" action="{{ route('search.results') }}">
            <input class="form-control" placeholder="Введите номер авто" type="text" name="query">
            <span class="input-group-btn">
        		<button class="btn btn-default" type="submit">Поиск</button>
      		</span>
          </form>
        </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>


<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
          
          @yield('main')
        
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<hr>

<!-- <div class="container" id="footer">
  <div class="row">
    <div class="col col-sm-12">
      
      <h1>Follow Us</h1>
      <div class="btn-group">
       <a class="btn btn-twitter btn-lg" href="#"><i class="icon-twitter icon-large"></i> Twitter</a>
	   <a class="btn btn-facebook btn-lg" href="#"><i class="icon-facebook icon-large"></i> Facebook</a>
	   <a class="btn btn-google-plus btn-lg" href="#"><i class="icon-google-plus icon-large"></i> Google+</a>
      </div>
      
    </div>
  </div>
</div> -->


<footer id="footer">
	<div class="text-center">2015 г.</div>
</footer>

	<!-- Scripts -->
	<script src="/js/app.js"></script>
</body>
</html>
