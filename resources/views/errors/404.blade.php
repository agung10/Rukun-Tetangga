
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>404 &mdash; RuTe</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stisla/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/stisla/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stisla/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
              Halaman yang dicari tidak ditemukan
            </div>
            <br>
            <a href="#" class="btn btn-primary" onclick="goBack()">Back to Home</a>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; RuTe <script>document.write(new Date().getFullYear()); </script>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/stisla/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/stisla/modules/popper.js')}}"></script>
  <script src="{{asset('assets/stisla/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/stisla/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/stisla/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/stisla/js/scripts.js')}}"></script>
  <script src="{{asset('assets/stisla/js/custom.js')}}"></script>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>