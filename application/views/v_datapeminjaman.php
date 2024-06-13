<?php echo form_open('peminjamanadmin/data_peminjaman') ?>
<?= $this->session->flashdata('massage'); ?>
<div class="tabel p-5">
          <table id="example" class="tabel table-striped table-bordered" style="width:100%; font-size: 0.8rem;" >
            <thead style="text-align: center;">
                <tr>
                    <th style="width: 2%;">No</th>
                    <th style="width: 10%;">Nama</th>
                    <th style="text-align: center; width: 5%;">Tgl Peminjaman</th>
                    <th style="text-align: center; width: 5%;">Tgl Pengembalian</th>
                    <th style="text-align: center;">Nama Barang(No. Seri)</th>
                    <th style="text-align: center; width: 5%;">Jumlah</th>
                    <th style="width: 20%;">Keterangan</th>
                    <th style="text-align: center; width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($peminjaman as $key => $value){ ?> 

                <tr>
                    <td style="text-align: center;"><?=$no++?></td>
                    <td><?=$value->nama?></td>
                    <td style="text-align: center;"><?=$value->tanggal_peminjaman?></td>
                    <td style="text-align: center;"><?=$value->tanggal_pengembalian?></td> 
                    <td style="text-align: center;"><?=$value->nama_barang?> (<?=$value->no_seri?>) </td>
                    <td style="text-align: center;"><?=$value->jumlah?></td>
                    <td><?=$value->keterangan?></td>  
                    <td class="p-3" style="align-items: center; text-align: center;">
                        <a href="<?=base_url('peminjamanadmin/edit/' .$value->id)?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                        </svg></i></a>
                        <a href="<?=base_url('peminjamanadmin/delete/' .$value->id)?>" onclick="return confirm('Data yang dihapus tidak akan bisa dikembalikan, Yakin ingin menghapus?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                      </svg></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

            <tfoot>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Tanggal Peminjaman</th>
                    <th style="text-align: center;">Tanggal Pengembalian</th>
                    <th style="text-align: center;">Nama Barang (No . Seri)</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: center;">Keterangan</th>
                    <th style="text-align: center;">Aksi</th>
                    
                </tr>
            </tfoot>
        </table>
        <a href="<?=base_url('peminjamanadmin')?>" class="btn btn-warning mt-3"><i class="fa-solid fa-backward"></i> Kembali</a>
        </div>
        </div>
      </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <!-- Popper.JS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
          theme: "minimal",
        });
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar, #content").toggleClass("active");
          $(".collapse.in").toggleClass("in");
          $("a[aria-expanded=true]").attr("aria-expanded", "false");
        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>   
    <script>
      $('#example').DataTable();
</script>