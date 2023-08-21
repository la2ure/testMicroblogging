<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel='stylesheet' href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
</head>

<body>
  <div class="container mx-auto">
    <div class="row my-2">
      <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
          <h2 class="relative px-5 py-2.5 transition-all ease-in duration-75 text-black bg-white bg-transparent rounded-md group-hover:bg-opacity-0">@yield('heading')</h2>
        </button>
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
          <a href="@yield('link')" class="relative px-5 py-2.5 transition-all ease-in duration-75 text-black bg-white bg-transparent rounded-md group-hover:bg-opacity-0">@yield('link_text')</a>
        </button>

      </div>
    </div>
    <hr class="my-2">

    @yield('content')

  </div>
  <script src='https://cdn.tailwindcss.com'></script>
</body>

</html>