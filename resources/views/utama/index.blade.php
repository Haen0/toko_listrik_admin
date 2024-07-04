<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/style.css">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
@include('utama.header')

<main class="col-md-9 ms-sm-auto col-lg-10">
    @yield('content')
</main>

<script src="/js/main.js"></script>
<script src="/js/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>