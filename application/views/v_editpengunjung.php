<?php echo form_open('pengunjungadmin/edit/' .$pengunjung->id) ?>
<?= $this->session->flashdata('massage'); ?>
<div class="kontrol">
            <div class="form-group">
              <label for="nama">Nama:</label>
              <input class="form-control" value="<?=$pengunjung->nama?>" type="text" id="nama" placeholder="Nama" name="nama" required>
          </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input class="form-control" type="date" value="<?=$pengunjung->tanggal?>" id="tanggal" placeholder="Nama Barang" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="siswa_ion">Siswa ION'S: (Pilih salah satu)</label>
            <div class="input-group">
                <select class="form-select" id="siswa_ion" value="<?=$pengunjung->siswa_ion?>" name="siswa_ion" required style="width: 5000px;  height:50px; border: none; border-radius: 0.8rem;
            background: #fafafa;
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            padding-left: 1rem;
            border : 0.2px solid #D3D3D3;">
                  <option value="Siswa ION'S">Siswa ION'S</option>
                  <option value="Bukan Siswa ION'S">Bukan siswa ION'S</option>
                </select>
            </div>
        </div>      
          <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" value="<?=$pengunjung->email?>" id="email" placeholder="example@gmail.com" name="email" required>
                </div>
                <div class="col-6">
                    <label for="nomor">No WA Aktif :</label>
                    <input class="form-control" type="int" value="<?=$pengunjung->nomor?>" id="nomor" placeholder="089XXXX" name="nomor" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="keperluan">Keperluan:</label>
            <div class="input-group">
                <select class="form-select" id="keperluan" value="<?=$pengunjung->keperluan?>" name="keperluan" required style="width: 5000px;  height:50px; border: #EAEAEA; border-radius: 0.8rem;
                    background: #fafafa;
                    padding-top: 0.8rem;
                    padding-bottom: 0.8rem;
                    padding-left: 1rem;
                    border : 1px solid #D3D3D3;">
                  <option value="Peminjaman Barang">Peminjaman barang</option>
                  <option value="Peminjaman Komputer">Peminjaman komputer</option>
                  <option value="Placement Test IELTS">Placement Test IELTS</option>
                  <option value="Simulation Test IELTS">Simulation Test IELTS</option>
                  <option value="Placement Test TOEFL">Placement Test TOEFL</option>
                  <option value="Simulation Test TOEFL">Simulation Test TOEFL</option>
                  <option value="Progress Test">Progress Test</option>
                  <option value="Progress Test">Progress Test</option>
                  <option value="Placement Test Kids">Placement Test Kids</option>
                  <option value="Placement Test Teens">Placement Test Teens</option>
                  <option value="Placement Test Adults">Placement Test Adults</option>
                  <option value="Placement Test IBT">Placement Test IBT</option>
                  <option value="Placement Test SAT">Placement Test SAT</option>
                  <option value="Placement Test General Adults">Placement Test General Adults</option>
                  <option value="Placement Test Conversation Adults">Placement Test Conversation Adults</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
                </div>
        </div>
        <div class="form-group">
            <label for="no_loker">No. Loker:</label>
            <input class="form-control" type="text" id="no_loker" value="<?=$pengunjung->no_loker?>" placeholder="Nomor loker" name="no_loker" required>
        </div>
        <div class="form-group">
          <label for="siswa_ion">Pelaksaan Test</label>
          <div class="input-group">
                  <select class="form-select" id="keterangan" value="<?=$pengunjung->keterangan?>" name="keterangan" required style="width: 5000px;  height:50px; border: none; border-radius: 0.8rem;
                    background: #fafafa;
                    padding-bottom: 0.8rem;
                    padding-left: 1rem;
                    padding-top : 0.8rem;
                    border : 0.2px solid #D3D3D3;">
                    <option value="offline">Offline</option>
                    <option value="online">Online</option>
                  </select>
              </div>
            </div>      
            <div class="form-group">
                <label for="no_loker">Nomor Kuitansi</label>
                <input class="form-control" type="text" value="<?=$pengunjung->no_kuitansi?>" id="no_kuitansi" placeholder="Nomor kuitansi" name="no_kuitansi" required>
            </div>      
      </div>
      <button class="tombol" type="submit"><i class="fa-solid fa-paper-plane"></i> Kirim</button>

        </div>
      </div>
    </div>
