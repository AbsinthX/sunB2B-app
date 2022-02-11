@include('layouts.header')


@yield('content')

@include('layouts.footer')


<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    @yield('javascript')
</script>
@yield('js-files')

</body>
</html>
