<?php echo form_open('inventarisadmin')?>
<?= $this->session->flashdata('massage'); ?>
<div class="kontrol">
    <div class="form-group">
        <label for="nama_barang">Nama Barang:</label>
        <input class="form-control" type="text" id="nama_barang" placeholder="Nama" name="nama_barang" required>
    </div>
    <div class="form-group">
        <label for="no_seri">Nomor Barang:</label>
        <input class="form-control" type="text" id="nomor_barang" placeholder="Nomor Barang" name="no_seri" required>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input class="form-control" type="text" id="jumlah" placeholder="Jumlah" name="jumlah" required>
    </div> 
    <div class="form-group">
            <label for="siswa_ion">Status</label>
            <div class="input-group">
                <select class="form-select" id="siswa_ion" name="status" required style="width: 5000px;  height:50px; border: none; border-radius: 0.8rem;
            background: #fafafa;
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            padding-left: 1rem;
            border : 0.2px solid light-gray;">
                  <option value="Normal">Normal</option>
                  <option value="Perlu dicek">Perlu dicek</option>
                </select>
            </div>
        </div>   

    <!-- Move the button inside the form -->
    <button class="tombol" type="submit" ><i class="fa-solid fa-paper-plane"></i> Kirim</button>
</div>
</form>

<!-- Move this outside the form -->
