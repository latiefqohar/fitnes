</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="<?= base_url(''); ?>">E-Member</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src=""></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
	<!-- sweet alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>assets/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/template/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/template/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets/template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/template/dist/js/demo.js"></script>
<script src="<?= base_url(); ?>assets/custom.js"></script>
<script><?= $this->session->flashdata('msg') ?>;</script>
<script>
function cek_paket() {
  $.ajax({
        url: '<?= base_url('Paket_aktif/hitung_paket'); ?>', 
        type: 'post',
        dataType: 'json', 
        data: {
            'id': $('#id_kategori').val(),
           
        },
        success: function (result) { 
            console.log(result);
           $('#tgl_exp').val(result.hasil);
           $('#harga').val(result.harga);
        }
    })
}

function cek_harga() {
  $.ajax({
        url: '<?= base_url('Kasir/cek_harga'); ?>', 
        type: 'post',
        dataType: 'json', 
        data: {
            'id': $('#paket').val(),
           
        },
        success: function (result) { 
            console.log(result);
           $('#total').val(result.harga);
           $('#harga').val(result.harga);
           $('#totalf').html(result.harga);
        }
    })
}

function runScript(e) {
    //See notes about 'which' and 'key'
    var harga = $('#harga').val()
    if (e.keyCode == 13) {
      $.ajax({
        url: '<?= base_url('Kasir/cek_member'); ?>', 
        type: 'post',
        dataType: 'json', 
        data: {
            'id': $('#id_member').val(),
           
        },
        success: function (result) { 
            console.log(result);
            if (result == null) {
              notifikasi("Gagal!","Member Tidak Memiliki Paket","error")
            }else{
              notifikasi("SUKSES!","Member menggunakan paket","success")
              $('#nama_member').val(result.nama);
              $('#diskon').val(harga);
              $('#total').val("0");
              $('#totalf').html("0");
            }
          
        }
    })
    }
}
$(function () {
$('#reservation').daterangepicker()
})
</script>

</body>
</html>
