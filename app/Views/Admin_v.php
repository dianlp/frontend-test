<!DOCTYPE html>
<html lang="en">
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row justify-content-start mb-2">
          <div class="col-sm-2">
            <h1 class="m-1">Inventory</h1>
          </div><!-- /.col -->
          <div class="col">
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-default">+ Tambah Data</button>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-table">
        <div class="card-body">
          <table id="table-inv" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Minimal Stok</th>
                <th>Stok</th>
                <th>Status Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('plugins/jszip/jszip.min.js') ?>"></script>
  <script src="<?= base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
  <!-- AdminLTE -->
  <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>

  <script>
    var editor;
    $(document).ready(function() {

    var myTable = $('#table-inv').DataTable({
      "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
        $('td:eq(0)', nRow).html(iDisplayIndexFull + 1);
      },
      "lengthMenu": [
        [10, 15, 25, -1],
        [10, 15, 25, "All"]
      ],
      "ajax": 'Data.txt',
      "columns": [{
          "data": null
        },
        {
          "data": "kode_barang"
        },
        {
          "data": "nama_barang"
        },
        {
          "data": "minimal_stok"
        },
        {
          "data": "stok"
        },
        {
          "data": "status_stok"
        },
        {
          "data": null,
          render: function(data, type, row) {
            return '<a type="button" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></a> <a type="button"><i class="fas fa-history"></i></a> <a type="button"><i class="fas fa-trash"></i></a>'
          }
        }
      ],
      "columnDefs": [{
        "targets": 0, 
        "orderable": false,
   },
   {
        "targets": 5,
        "className": "text-center",
        "width": "195px",
   },
   {
        "targets": 6,
        "className": "text-center",
        "orderable": false,
        "width": "198px",
   }],
    });

    $('#table-inv tbody').on('click', 'button.btn-hapus', function() {
      item = myTable.row($(this).parents('tr')).data();
      Swal.fire({
        icon: 'error',
        text: 'Apakah Anda Yakin ingin hapus data ini',
        footer: '<a href="" type="button" class="btn btn-danger">Ya Hapus</a><a href="" type="button" class="btn btn-default">Batal</a>'
      });
    });

    });
  </script>

</body>

</html>