<?php echo form_open('peminjaman/data_peminjaman') ?>
<div class="tabel p-5">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead style="text-align: center;">
                <tr>
                    <th style="width: 2%;">No</th>
                    <th style="text-align: center;">Nama Barang</th>
                    <th style="text-align: center;">Nomor Barang</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: center;">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($inventaris as $key =>$value){?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$value->nama_barang?></td>
                    <td><?=$value->no_seri?></td>
                    <td style="text-align: center;"><?=$value->jumlah?></td>
                    <td><?=$value->status?> 
                    </td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
             
            <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Nama Barang</th>
                    <th style="text-align: center;">Nomor Barang</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: center;">Status</th>
                    
                </tr>
            </tfoot>
        </table>
        <a href="<?=base_url('homeadmin')?>" class="btn btn-warning">Kembali</a>
        </div>
        </div>
      </div>
    </div>

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