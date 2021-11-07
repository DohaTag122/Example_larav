<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name','User Management system')}}</title>

      
            <link href ="{{ asset( 'css/app.css' ) }}" rel ="stylesheet" >
            <!-- js -->
            <script src="{{ asset('js/app.js') }}" defer> </script>
         

    
    </head>
    <body >
    
    <nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbar-brand" href="#">{{config('app.name','User Management system')}}<</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Users</a>
        </li>
      </ul>
      <div class="container">
      @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
  </div>
</nav>
<main class="container">
  @yield('content')  
</main>
          
    </body>
</html>
