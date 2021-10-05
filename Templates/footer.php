</div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap4.min.js"></script>
<script src="dataTables.responsive.min.js"></script>
<script src="responsive.bootstrap4.min.js"></script>
<script src="dataTables.buttons.min.js"></script>
<script src="buttons.bootstrap4.min.js"></script>
<script src="jszip.min.js"></script>
<script src="pdfmake.min.js"></script>
<script src="vfs_fonts.js"></script>
<script src="buttons.html5.min.js"></script>
<script src="buttons.print.min.js"></script>
<script src="buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
