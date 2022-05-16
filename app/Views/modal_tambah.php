<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <p>One fine body&hellip;</p> -->
        <div class="form-group">
          <label>Kode Barang</label>
          <input class="form-control" placeholder="Masukan Kode Barang" required>
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <input class="form-control" placeholder="Masukan Nama Barang" required>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Stok Minimal</label>
              <input type="number" class="form-control" placeholder="Contoh: 1" min="10" required>
            </div>
          </div>
          <div class="col">
          <div class="form-group">
          <label>Stok Awal</label>
          <input class="form-control" placeholder="Contoh: 1" max="50" required>
        </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Simpan</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->