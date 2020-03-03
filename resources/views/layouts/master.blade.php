<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jumbotron Template · Bootstrap</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

     </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <div class="navbar-header">
           <a class="navbar-brand" href="http://localhost:8000">TRUCK SHOP</a>
        </div>
        <div class="links">
        
          <a href="https://laracasts.com">Camione</a>
          <a href="https://laravel-news.com">Cauciucuri</a>
          <a href="https://blog.laravel.com">Motoare</a>
          <a href="https://nova.laravel.com">Suspensie</a>
          <a href="https://forge.laravel.com">Filtre</a>
          <a href="https://vapor.laravel.com">Fare</a>
         </div>
       </div></nav>
       @if(count($errors)>0)
       <div class="alert alert-danger">
       <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}
            </li>
            @endforeach
       </ul>
       @endif
       </div>
       @yield("content")
    
    <footer class="container">
  <p>&copy; 2020 Company, Inc.</p>
</footer>
</body>
</html>