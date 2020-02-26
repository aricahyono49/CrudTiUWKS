    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
        <title>@yield('title', 'kosong')</title>
        <style>
            body {
                overflow-x: hidden;
            }

        </style>
    </head>

    <body class="pl-3 pr-3 mt-3">

        {{-- this is the template header --}}
        <header>
            <div class="col-12">
                <div class="row">
                    <div class="col-1 text-center">
                        <img src="{{ asset('images/Logo-uwks.PNG') }}" alt="" style="height: 120px;">
                    </div>

                    <div class="col-8 ml-4 mt-4">
                        <h3>Teknik Informatika</h3>
                        <h6>Fakultas Teknik</h4>
                            <h6>Univeritas Wijaya Kusuma Surabaya</h6>
                    </div>
                </div>
                <hr class="mb-2">
            </div>

            <nav>
                <div class="row">
                    <div class="col-12">
                        <span class="float-left ml-2">Selamat Datang</span>
                        <span class="float-right">halo, Ari</span>
                    </div>
                </div>
                <hr class="mt-1">
            </nav>
        </header>
        {{-- this is the template header limit --}}

        {{-- This is input for content --}}
        @yield('content')
        {{-- this is the input limit for the content --}}

        {{-- this is the template footer  --}}
        <footer>
            <hr>
            <div class="col-12 text-right">
                <p>&copy; Uwks <b>{{ date('Y') }} </b></p>
            </div>
        </footer>

        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    </body>

    </html>
    {{-- this is the template footer limit --}}
