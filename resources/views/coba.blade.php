<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('TRL.header')

  <div class="container-fluid">
    <div class="row">
    
      @include('TRL.sidebar')
  
      <main class="col-md-9 ms-sm-auto col-lg-10">
          @yield('content')
      </main>
    </div>
  </div>
</body>
</html>