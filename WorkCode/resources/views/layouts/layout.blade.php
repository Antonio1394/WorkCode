@include('partials.head')

<body>
    @include('partials.nav')
    @include('partials.home')

    @yield('content')
    @include('partials.footer')
</body>

    @include('partials.script')

</html>
