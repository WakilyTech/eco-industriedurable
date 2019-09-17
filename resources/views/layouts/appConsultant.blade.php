<!DOCTYPE html>
<html>
@include('layouts.header')


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Page wrapper -->
    @include('layouts.topnavbar')
    <!-- Navigation -->
    @include('layouts.navigationConsultant')

    <!-- Main view  -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div> <!-- container -->
        </div> <!-- content -->

        <!-- Footer -->
        @include('layouts.footer')
    </div>

</div>
<!-- End page wrapper-->
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('js2/jquery.min.js') }}"></script>
<script src="{{ asset('js2/bootstrap.min.js') }}"></script>
<script src="{{ asset('js2/detect.js') }}"></script>
<script src="{{ asset('js2/fastclick.js') }}"></script>
<script src="{{ asset('js2/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js2/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js2/waves.js') }}"></script>
<script src="{{ asset('js2/wow.min.js') }}"></script>
<script src="{{ asset('js2/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js2/jquery.scrollTo.min.js') }}"></script>

<script src="{{ asset('js2/jquery.app.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('plugins2/moment/moment.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('plugins2/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('plugins2/counterup/jquery.counterup.min.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('plugins2/sweetalert/dist/sweetalert.min.js') }}"></script>


<!-- flot Chart -->
<script src="{{ asset('plugins2/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('plugins2/flot-chart/jquery.flot.crosshair.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('pages/jquery.todo.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('pages/jquery.chat.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('pages/jquery.dashboard.js') }}"></script>

<script type="text/javascript">
    /* ==============================================
     Counter Up
     =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script>

    $('#infos').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var motif = button.data('whatever')
        var modal = $(this)
        modal.find("#motif").text( motif)
    })</script>

<script>

    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var entreprise_id = button.data('entreprise')
        var modal = $(this)
        modal.find('.modal-body #entreprise_id').val(entreprise_id);
    })

</script>

</body>
</html>