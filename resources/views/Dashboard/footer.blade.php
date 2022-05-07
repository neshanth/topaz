<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- Datatable -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<footer class="main-footer text-center">
    <a href="https://topazfoundation.org.in/">Topaz</a>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>