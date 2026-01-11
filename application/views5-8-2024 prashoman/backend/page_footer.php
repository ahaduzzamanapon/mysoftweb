  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs"><b>Admin Panel Version</b> 2.0</div>
    <strong>Copyright &copy; 2017 <a href="http://www.mysoftheaven.com/">mysoftheaven.com</a>.</strong> All Rights Reserved.
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>awedget/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="<?=base_url();?>awedget/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?=base_url();?>awedget/assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>awedget/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>awedget/assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>awedget/assets/js/demo.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<script src="https://cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>

<!-- Select2 -->
<script src="<?=base_url();?>awedget/assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?=base_url();?>awedget/assets/plugins/input-mask/jquery.inputmask.min.js"></script>
<script src="<?=base_url();?>awedget/assets/plugins/input-mask/jquery.inputmask.date.extensions.min.js"></script>
<script src="<?=base_url();?>awedget/assets/plugins/input-mask/jquery.inputmask.extensions.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?=base_url();?>awedget/assets/plugins/daterangepicker/daterangepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url();?>awedget/assets/plugins/datepicker/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?=base_url();?>awedget/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>


<script>
      $('textarea#tiny').tinymce({
        height: 500,
        menubar: false,
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
          'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
          'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });
    </script>

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>


<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    CKEDITOR.replace('editor5');
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
  });

  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY-MM-DD h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });

</script>


<!-- DataTables -->
<script src="<?=base_url();?>awedget/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>awedget/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://mysoftheaven.com/awedget/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- add new link  -->
<script src="https://mysoftheaven.com/awedget/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="https://mysoftheaven.com/awedget/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="https://mysoftheaven.com/awedget/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="https://mysoftheaven.com/awedget/assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="https://mysoftheaven.com/awedget/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="https://mysoftheaven.com/awedget/assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://mysoftheaven.com/awedget/assets/js/demo.min.js"></script>

<!-- end new link -->


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>
