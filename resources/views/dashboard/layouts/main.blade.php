@include('dashboard.layouts.head')

<body>

@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    
    @include('dashboard.layouts.sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @yield('container')
        <canvas class="my-10 w-150" id="myChart" width="900" height="470"></canvas>


    </main>

  </div>

</div>



<!-- Only call `feather.replace` once on each page -->
<script>
  document.addEventListener('trix-file-except', function(e) {
        e.preventDefault();
    })
</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            feather.replace()
          </script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="js/dashboard.js"></script>
    </body>
</html>
