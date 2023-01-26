<!doctype html>
<html>

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title') | {{ config('app.name') }}</title>
     <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
          integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
     </script>
     @vite('resources/css/app.css')
     @stack('style')
     <link href="/css/app.css" rel="stylesheet">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
     <script>
          tailwind.config = {
               theme: {
                    extend: {
                         colors: {
                              clifford: '#fffff',
                         }
                    }
               }
          }
     </script>
     <style>
          div.content {
               margin-left: 200px;
               padding: 1px 16px;
               height: 1000px;
          }

          @media screen and (max-width: 700px) {
               div.content {
                    margin-left: 0;
               }
          }

     </style>
</head>

<body>

     @include('admin/shared/_sidebar')
     <div class="content">
          @yield('content')
     </div>

     <script src="../path/to/flowbite/dist/flowbite.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
          AOS.init();
     </script>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="../path/to/flowbite/dist/flowbite.js"></script>

</body>

</html>
