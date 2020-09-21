<!-- General JS Scripts -->
<script src="{{asset('assets/stisla/modules/jquery.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/popper.js')}}"></script>
<script src="{{asset('assets/stisla/modules/tooltip.js')}}"></script>
<script src="{{asset('assets/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/stisla/modules/moment.min.js')}}"></script>
<script src="{{asset('assets/stisla/js/stisla.js')}}"></script>

<!-- JS Libraies -->
@yield('JsLibraries')

<!-- Page Specific JS File -->
@yield('JsSpecific')

<!-- Template JS File -->
<script src="{{asset('assets/stisla/js/scripts.js')}}"></script>
<script src="{{asset('assets/stisla/js/custom.js')}}"></script>

@yield('JsCustom')