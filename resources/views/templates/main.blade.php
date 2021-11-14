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
    <a class="navbar-brand" href="#">{{config('APP_NAME','User Management system')}}</a>
      <span class="navbar-toggler-icon">
   
      <div class="container">
      @if (Route::has('auth.login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"> Log out</a>
                       <form id='logout-form' action="{{ route('/logout') }}" method="POST">
                         @csrf
                       </form>
                      @else
                      <a href="{{ route('auth.login') }}" >Login</a>

                        @if (Route::has('/register'))
                            <a href="{{ route('/register') }}">Register</a>
                        @endif
                        @endauth
                 </div>
            @endif
    </div>
    </span>
  </div>
</nav>

<nav class="navbar navbar-expand-lg">
    <div class="container">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.users.index') }}"> Users</a>
        </li>
      </ul>
  </div>
  </div>
</nav>






<main class="container">
  @include('partials.alerts')
  @yield('content')  
</main>
          
    </body>
</html>
