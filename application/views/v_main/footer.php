</body>
<!--   Core JS Files   -->
<script src="<?= base_url()?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/bootstrap.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap-confirmation.js"></script>
<script src="<?= base_url()?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Library for adding dinamically elements -->
<script src="<?= base_url()?>assets/js/arrive.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/jquery.toast.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<!-- Promise Library for SweetAlert2 working on IE -->
<script src="<?= base_url()?>assets/js/es6-promise-auto.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?= base_url()?>assets/js/moment.min.js"></script>
<script src="<?= base_url()?>assets/js/moment-with-locales.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="<?= base_url()?>assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?= base_url()?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?= base_url()?>assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?= base_url()?>assets/js/jquery.sharrre.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?= base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?= base_url()?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="<?= base_url()?>assets/js/nouislider.min.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?= base_url()?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?= base_url()?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="<?= base_url()?>assets/js/sweetalert2.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url()?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?= base_url()?>assets/js/fullcalendar.min.js"></script>
<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?= base_url()?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url()?>assets/js/material-dashboard.js"></script>

<script type="text/javascript">
  $(function() { 
  $('#wktu_down_lapor').datetimepicker();
  $('#wktu_down').datetimepicker();
   
  $('#wktu_up').datetimepicker();
   
   $('#wktu_down').on("dp.change", function(e) {
    $('#wktu_up').data("DateTimePicker").minDate(e.date);
  });
  
   $('#wktu_up').on("dp.change", function(e) {
    $('#wktu_down').data("DateTimePicker").maxDate(e.date);
      CalcDiff()
   });
  
});

function CalcDiff(){
    var a=$('#wktu_down').data("DateTimePicker").date();
    var b=$('#wktu_up').data("DateTimePicker").date();
    var diff = new Date(b - a);
    var days = Math.floor(diff/1000/60/60/24);
    var hours = Math.floor((diff % ( 1000 * 60 * 60 * 24)) / 1000 / 60 / 60);
    var minutes = Math.floor((diff % ( 1000 * 60 * 60)) / 1000 / 60);
    $("#lama_gangguan").val(days+' Hari '+hours+' Jam '+minutes+' Menit');

}
</script>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari Data",
            }

        });
        $('#datatables2').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari Data",
            }

        });
    });
</script>

<script> 
    $('[data-toggle=confirmation]').confirmation({
      rootSelector: '[data-toggle=confirmation]',
      // other options
    });
</script>

</html>