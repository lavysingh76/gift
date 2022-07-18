<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- <script src=" {{asset('admin/plugins/chart.js/Chart.min.js')}}"></script> -->
<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
 <!-- jQuery -->
 <script src=" {{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src=" {{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src=" {{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src=" {{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src=" {{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- ChartJS -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
 
</script>

<script type="text/javascript">
        // add row
        let row_count = 0;
        $("#addRow").click(function () {
          
          
            var html = '';
       
       
            row_count++;
            html += '<br>';
            html += '<div class="card-header">';
            html += '<h3 class="card-title">Add Category</h3>';
            html += '</div>';
            html += '<br>';
          

            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>';
            html += '<div class="col-sm-10">';
            html += '<input type="text" name="name[]"  class="form-control" placeholder="Category Name" required/>';
            html += '</div>';
            html += '</div>';

          

            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>';
            html += '<div class="col-sm-10">';
            html += '<textarea type="text" name="description[]" class="form-control"/></textarea>';
            html += '</div>';
            html += '</div>';

            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>';
            html += '<div class="col-sm-10">';
            html += '<input type="file" name="image[]" class="btn btn-primary col start" required>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
      
        });
        </script>


      <script type="text/javascript">
        // add row
        // console.log(val);
        $("#addSubRow").click(function () {
          
          
            var html = '';
            var i ;
            
            row_count++;
            html += '<br>';
            html += '<div class="card-header">';
            html += '<h3 class="card-title">Add Sub Category</h3>';
            html += '</div>';
            html += '<br>';
          
          if(type == 'show'){
            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Select Category </label>';
            html += '<div class="col-sm-10">';
            html += '<select class="form-control select2" requried>';
            html += '<option value="">Select Category</option>'
            for(i = 0; i< val.length; i++){
              html += '<option value='+val[i].id+'>'+val[i].name+'</option>';
            }
          }

            html += '</select>';
            html += '</div>';
            html += '</div>';


            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Sub Category Name</label>';
            html += '<div class="col-sm-10">';
            html += '<input type="text" name="name[]"  class="form-control" placeholder="Category Name" required/>';
            html += '</div>';
            html += '</div>';

          

            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>';
            html += '<div class="col-sm-10">';
            html += '<textarea type="text" name="description[]" class="form-control"/></textarea>';
            html += '</div>';
            html += '</div>';

            html += '<div class="form-group row">';
            html += '<label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>';
            html += '<div class="col-sm-10">';
            html += '<input type="file" name="image[]" class="btn btn-primary col start" required>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
      
        });
        </script>
  
</body>
</html>
