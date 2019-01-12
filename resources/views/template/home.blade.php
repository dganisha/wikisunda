<!DOCTYPE html>
<!-- saved from url=(0075)https://mdbootstrap.com/previews/docs/latest/html/carousel/video/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wikisunda - Discover Sundanese</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="{{ asset("/wikisunda/homebro_files/all.css") }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("/wikisunda/homebro_files/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset("/wikisunda/homebro_files/mdb.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/wikisunda/public/css/style.css") }}">
    @if(Auth::user())
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    @endif
    <style type="text/css">
      /* Navigation*/
      .navbar {
        background-color: transparent;
      }
      .scrolling-navbar {
        transition: background .5s ease-in-out, padding .5s ease-in-out;
      }
      .top-nav-collapse {
        background-color: #34456a;
      }
      footer.page-footer {
        background-color: #34456a;
      }
      @media only screen and (max-width: 768px) {
        .navbar {
          background-color: #34456a;
        }
      }

      /* Necessary for full page carousel*/
      html,
      body,
      .view {
        height: 100%;
      }

      /* Carousel*/
      .carousel,
      .carousel-item,
      .carousel-item.active {
        height: 100%;
      }
      .carousel-inner {
        height: 100%;
      }
      .carousel .carousel-item video {
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<body aria-busy="true">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color darken-1 fixed-top">

      <!-- Navbar brand -->
      @if(Auth::user())
        @php $url = "/admin"; @endphp
      @else
        @php $url = "/"; @endphp
      @endif
      <a class="navbar-brand" href="{{ $url }}">WIKISUNDA</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
        
        <!-- Menu -->
        @if(Auth::user())
        @include('include.menubar_admin')
        @else
        @include('include.menubar')
        @endif

       
      </div>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

    <!-- Main Content -->
    @yield('content')

    <!--Footer-->
    @if(!Auth::user())
    @include('include.footer')
    @endif
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset("/wikisunda/homebro_files/jquery-3.3.1.min.js.download") }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset("/wikisunda/homebro_files/popper.min.js.download") }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset("/wikisunda/homebro_files/bootstrap.min.js.download") }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset("/wikisunda/homebro_files/mdb.min.js.download") }}"></script><div class="hiddendiv common"></div>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    @if(Auth::user())
    <!-- CK Editor -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        $('#article').DataTable()
        $('#table').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('artikel_editor')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
    </script>
    @endif
</body>
</html>