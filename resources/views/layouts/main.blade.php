<!DOCTYPE html>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<html lang="en">

<head>
  <title>Carozza App</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand text-uppercase" href="">
        <strong>Carozza</strong> App
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="/manufacturers" class="nav-link">Manufacturers</a></li>
          <li class="nav-item"><a href="/cars" class="nav-link">Cars</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
</body>

</html>

<script>
  const filterManufacturerId = document.getElementById('filter_manufacturer_id');

  if (filterManufacturerId) {
    filterManufacturerId.addEventListener('change', () => {
      const manufacturerId = filterManufacturerId.value || filterManufacturerId.options[filterManufacturerId.selectedIndex].value;
      const baseUrl = window.location.href.split('?')[0];
      window.location.href = `${baseUrl}?manufacturer_id=${manufacturerId}`;
    });
  }

  document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
      event.preventDefault()
      if (confirm("Are you sure?")) {
        let action = this.getAttribute('href')
        let form = document.getElementById('form-delete')
        form.setAttribute('action', action)
        form.submit()
      }
    })
  })
</script>