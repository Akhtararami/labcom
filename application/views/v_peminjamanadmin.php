<?php echo form_open('peminjamanadmin/index')?>
<?= $this->session->flashdata('massage');?>
<div class="kontrol">
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input class="form-control" type="text" id="nama" placeholder="Nama" name="nama" required>
          </div>
          <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="tanggal_dipinjam">Tanggal dipinjam:</label>
                    <input class="form-control" type="date" id="tanggal_peminjaman" placeholder="" name="tanggal_peminjaman" required>
                </div>
                <div class="col-6">
                    <label for="tanggal_pengembalian">Tanggal dikembalikan:</label>
                    <input class="form-control" type="date" id="tanggal_pengembalian" placeholder="Jumlah" name="tanggal_pengembalian">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input class="form-control" type="text" id="nama_barang" placeholder="Nama Barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input class="form-control" type="text" id="jumlah" placeholder="Jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <label for="no_seri">No. Seri:</label>
            <input class="form-control" type="text" id="no_seri" placeholder="Jumlah" name="no_seri" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea class="form-control" id="keterangan" style="  border-radius: 0.8rem;
            background: #fafafa;
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;" placeholder="Keterangan" name="keterangan"></textarea>
        </div>        
         
      </div>
      <button class="tombol" type="submit"><i class="fa-solid fa-paper-plane"></i> Kirim</button>

        </div>
      </div>
    </div>
