<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- DataTables JQuery --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('datatables/datatables.min.css') }}" />

    <title>@yield('title')</title>
</head>

<body>

    <div class="container">

        @include('template/navbar')

        <div class="mt-3">
            @yield('container')
        </div>

    </div>

    <div id="footer">
        <p>&copy; 2019 | sekolahku app</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('datatables/datatables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap-4.3.1/js/bootstrap.min.js') }}">
    </script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>
</body>

</html>