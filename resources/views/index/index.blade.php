<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" href="{{asset('img/HIMIT.png')}}" type="image/png" sizes="16x16">

    <title>Event Himit</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.material.min.css">
    <link href="{{ asset('css/paper-kit.css?v=2.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.material.min.js"></script>

</head>
<body class="add-product">

@if ($message = Session::get('success'))

    <div id="notifications">

        <div class="alert alert-success alert-with-icon" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <div class="message"><i class="nc-icon nc-bell-55"></i> Data Anda sudah berhasil di upload.</div>
                </div>
            </div>
        </div>
    </div>
@endif
@if ($errors->any())
    <div id="notifications">

        <div class="alert alert-danger alert-with-icon" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <div class="message"><i class="nc-icon nc-bell-55"></i> Data Tidak Boleh Ada Yang Kosong</div>
                </div>
            </div>
        </div>
    </div>
@endif


@yield('content')


<footer class="footer footer">
    <div class="container">
        <div class="row">

            <div class="credits ml-auto">
				<span class="copyright" style="color: black">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Rizky Putra
				</span>
            </div>
        </div>
    </div>
</footer>

</body>



<!-- Core JS Files -->
<script src="{{asset('js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>

<!--  Plugins for Tags -->
<script src="{{asset('js/bootstrap-tagsinput.js')}}" type="text/javascript"></script>

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/paper-kit.js?v=2.1.0')}}" type="text/javascript"></script>

<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

</html>
