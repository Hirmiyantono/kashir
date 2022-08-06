<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <title></title>
  @livewireStyles
</head>
<body class="antialiased bg-gray-100 dark-mode:bg-gray-900">
    @include('layouts.header')

    <div class="">
      <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
          
        @include('layouts.sidebar')
        
        <div class="container mx-auto px-6 mt-6">
          @yield('container')    
        </div>
            
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireScripts
</body>
</html>