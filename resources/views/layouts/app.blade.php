@include('layouts.includes.header')

@yield('styles')

<body>
@include('layouts.includes.contact_info')
@include('layouts.includes.navigation')

@yield('content')

<!-- /.container -->

<!-- /.container -->

@include('layouts.includes.footer')

@yield('scripts')

<!-- Bootstrap core JavaScript -->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/popper/popper.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>--}}

</body>

</html>
