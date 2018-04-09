<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield("page_title")</title>
        @yield('head')
        <!-- Bootstrap core CSS -->
        <link href="{{ url('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ url('assets/front/css/blog-home.css') }}" rel="stylesheet">
        <script type="text/javascript">
            var config = {
                admin_url: "{{ url('/admin') }}",
                base_url: "{{ url('/') }}"
            };
        </script>
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="javascript:;">Aqar Map Task</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row">
                @yield("content")
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Aqar map task 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="{{ url('assets/front/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        @yield("page_scripts")
    </body>

</html>
