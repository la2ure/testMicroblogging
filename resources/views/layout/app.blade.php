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
        <div>
          <h2 class="text-primary">@yield('heading')</h2>
        </div>
        <div>
          <a href="@yield('link')" class="btn btn-primary rounded-pill">@yield('link_text')</a>
        </div>

      </div>
    </div>
    <hr class="my-2">

    @yield('content')

  </div>
  <script src='https://cdn.tailwindcss.com'></script>
</body>

</html>