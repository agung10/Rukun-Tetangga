@include('layouts.head.head')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('layouts.header.header')
      @include('layouts.sidenav.sidenav')

      @yield('content')
      @include('layouts.footer.footer')
    </div>
  </div>

  @include('layouts.script.js.js')
  
  @include('layouts.modal.createModal')
  @include('layouts.modal.editModal')
  @include('layouts.modal.deleteConf')
  @include('layouts.modal.modalInfo')
  @include('layouts.modal.detailModal')
</body>
    <script>
         setInterval(function(){
          $('#Info').css('background', '#2196f3').fadeIn("slow");
        }, 400);
        setInterval(function(){
          $('#Info').css('background', '#6f42c1').fadeIn("slow");
        }, 800);
    </script>
</html>