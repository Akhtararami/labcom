<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Labkom ION'S</title>

    <!-- Bootstrap CSS CDN -->
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
  <link rel="website icon" type="png" href="<?= base_url('assets/logo.svg') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Lexend+Deca:wght@100..900&family=Nabla:EDPT,EHLT@0..200,0..24&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla:EDPT,EHLT@0..200,0..24&display=swap" rel="stylesheet">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nabla:EDPT,EHLT@0..200,0..24&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
    />
    <script src="https://kit.fontawesome.com/88053bf5de.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <style>
      body {
  background: #E8E10C;
  font-family: "Nunito", sans-serif;
}

p {
  font-size: 1.1em;
  font-weight: 300;
  line-height: 1.7em;
  color: #999;
}

a,
a:hover,
a:focus {
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

.navbar {
  padding: 15px 10px;
  background: #fff;
  border: none;
  border-radius: 0;
  margin-bottom: 40px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
  box-shadow: none;
  outline: none !important;
  border: none;
}

.line {
  width: 100%;
  height: 1px;
  border-bottom: 1px dashed #ddd;
  margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
  display: flex;
  width: 100%;
}

#sidebar {
  width: 250px;
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  z-index: 999;
  background: white;
  color: #686B67;
  transition: all 0.3s;
  margin: 2rem;
  height: 80%;
  border-radius: 1rem;
}

#sidebar.active {
  margin-left: -250px;
}

#sidebar .sidebar-header i {
  font-size: 2rem;
  color: white;
  background: #E8E10C;
  padding: 2rem;
  border-radius: 50%;
}
#sidebar .sidebar-header h3 {
  font-weight: 600;
  font-size: 2rem;
  font-family: "Lexend Deca", sans-serif;
  color: #4C4A4A;

}
#sidebar .sidebar-header {
  padding: 11px 20px 10px 20px;
  background: black;
  align-items: center;
  justify-content: center;
  text-align: center;
}

#sidebar ul.components {
  border-bottom: 1px solid yellow;
  margin-top: 2rem;
}

#sidebar ul p {
  color: yellow;
  padding: 10px;
}
#sidebar ul li a {
  padding: 10px;
  font-size: 1rem;
  display: block;
  width: 90%;
  margin-left: 5%;
  border-radius: 0.5rem;
  margin-bottom: 5%;
}

#sidebar ul li a:hover {
  color: black;
  background: #FCFF4A;
  border-radius: 0.5rem;
}

#sidebar ul li.active > a,
a[aria-expanded="true"] {
  color: black;
  background: yellow;
}

a[data-toggle="collapse"] {
  position: relative;
}

.dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
}

ul ul a {
  font-size: 0.9em !important;
  padding-left: 30px !important;
  background: none;
}
.menu-text {
  color: black;
  font-size: 24px;
  font-weight: bold;
  position: relative;
  top: 20px;
  left: 5px;
  font-size: 3rem;
}

.menu-btn {
  background: #fff500;
  margin-top: 1%;
  color: black;
  margin-left: 2%;
}

.menu-header {
  width: 100%;
  height: 64px;
  background: white;
  border-radius: 1rem;
  height: auto;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
  width: calc(90% - 150px); /* Ubah dari 150px menjadi 250px */
  min-height: 100vh;
  transition: all 0.3s;
  position: absolute;
  top: 0;
  right: 0;
  margin-right: 2rem;
  margin-top: 2rem;
  margin-left: 0; /* Tambahkan aturan margin kiri */
  height: 70px;
}

#content.active {
  width: calc(100% - 100px);
  margin-left: 2rem; /* Tambahkan aturan margin kiri */
}
.konten{
  margin-top: 2%;
  padding-bottom: 5%;
}
.konten .col-7{
  height: 40rem;
  background-color: #F3F3F3;
  margin-left: 7rem;
  border-radius: 1rem;
}
.konten .col-7 p{
  font-size: 1.2em;
  margin: 1rem;
}
.konten .main-konten iframe{
  width: calc(100% - 10px);
  height: 550px;
}

.konten .more .col{
  margin-bottom: 2rem;
  background-color: #f3f3f3;
  height: 5rem;
  border-radius: 10px;
  border-left: 10px solid #fff500;
}
.konten .more{
  margin-top: 7rem;
}
.konten .more H2{
  font-weight: 600;
}
.konten .more H6{
  padding-top: 2%;
}
.form-group{
  margin-left: 2rem;
  width: 70%;
}
.kontrol{
  margin-top: 2rem;
  padding-bottom: 10rem;
}
.kontrol .form-group label{
  font-weight: 600;
  margin-left:  1rem;
}
.kontrol .form-group input{
  border-radius: 0.8rem;
  background: #fafafa;
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
}
.kontrol .form-group{
  margin-top: 2rem; 
}
.tombol:hover{
  background-color: #f3f3f3;
}
.tombol{
  background-color: #fff500;
  color: black;
  font-weight: 700;
  margin-bottom: 5rem;
  margin-left: 70rem;
  padding: 1rem;
  width: 350px;
  border: none;
  border-radius: 1rem;
}
.bodi .container{
  background-color: white;
  width: 50%;
  height: 35rem;
  margin: 0 auto;
  margin-top: 5rem;
  border-radius: 1rem;
}
/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
  html{
    font-size: 0.7rem;
  }
  #sidebar .sidebar-header{
    padding-left: 5px;
    margin-top:20px ;
  }
  #sidebar .sidebar-header i{
    padding-left: 1px;
    margin-left: 1px;

  }
  #sidebar .sidebar-header h3{
    font-size: 0rem;
    color: #fff;
    margin-left: 1px;
    padding-left: 0.px;
  }
  #sidebar ul li a i {
  font-size: 2.3rem;
  margin-left: 5%;
  }
  #sidebar ul li a span {
    font-size: 0rem;
    color: white;
  }
  #sidebar {
    margin-left: -250px;
    width: 18%;
  }

  #sidebar.active {
    margin-left: 0;
  }
  .menu-text{
    font-size: 2rem;
    top: 10px;
  }
  #content {
    width: 100%;
    width: calc(100% - 40px);
    height: 80px;
  }
  #content.active {
    width: calc(100% - 110px);
  }
  .konten .col-7 {
    height: 230px;

  }
  .konten .main-konten iframe{
    height: 150px;
  }
  .konten .more .col{
    background: none;
  }
  .konten .more{
    width: 100%;
  }
  .kontrol{
    margin-top: 7rem;
    padding-bottom: 10rem;
  }
  .kontrol .form-group label{
    font-weight: 600;
    margin-left:  1rem;
  }
  .kontrol .form-group input{
    border-radius: 0.8rem;
    background: #fafafa;

    padding-top: 0.8rem;
    padding-bottom: 0.8rem;
  }
  .kontrol .form-group{
    margin-top: 2rem; 
  }
  .tombol:hover{
    background-color: #f3f3f3;
  }
  .tombol{
    background-color: #fff500;
    color: black;
    font-weight: 700;
    margin-bottom: 3rem;
    margin-left: 2rem;
    padding: 1rem;
    width: 100px;
    border: none;
    border-radius: 1rem;
  
  }
  .tabel thead{
    color: blue;
    width:100%;
    font-size: 0rem;
    border: none;
  }
  .sidebar h3 i{
    width: 90px;
  }
}

    </style>
    <div class="wrapper">
      <!-- Sidebar  -->                                               
      <nav id="sidebar">
        <div class="sidebar-header" style="background: none; padding-top: 10%">
          <i class="fa-solid fa-computer"></i>
          <h3>
            <br />Lab Komputer <br><span>ION'S</span>
          </h3>
        </div>
        <ul class="list-unstyled components">
          <hr />
          <li active>
            <a href="<?=base_url('homeadmin/admin')?>">
            <i class="fa-solid fa-home"></i>
            <span class="title">Home</span>
          </a>
          </li>
          <li>
            <hr />
            <a
              href="#homeSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              ><i class="fa-solid fa-suitcase"></i>
              <span class="title">Inventaris</span></a
            >
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="<?=base_url('inventarisadmin/data_inventaris')?>"><i class="fa-solid fa-table"></i><span> Data Inventaris</span></a>
              </li>
              <li>
                <a href="<?=base_url('inventarisadmin/index')?>"><i class="fa-solid fa-computer-mouse"></i> <span> Tambah Data inventaris</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#homeSubmenu1"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              ><i class="fa-solid fa-bookmark"></i>
              <span class="title">Peminjaman Barang</span></a
            >
            <ul class="collapse list-unstyled" id="homeSubmenu1">
              <li>
                <a href="<?=base_url('peminjamanadmin/index')?>"><i class="fa-solid fa-file-pen"></i></i><span> Peminjaman</span></a>
              </li>
              <li>
                <a href="<?=base_url('peminjamanadmin/returned')?>"><i class="fa-solid fa-pen"></i><span> Sedang dipinjam</span></a>
              </li>
              <li>
                <a href="<?=base_url('peminjamanadmin/data_peminjaman')?>"><i class="fa-solid fa-clock-rotate-left"></i><span> History peminjaman</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a
              href="#homeSubmenu2"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              ><i class="fa-solid fa-user"></i>
              <span class="title">pengunjung</span></a
            >
            <ul class="collapse list-unstyled" id="homeSubmenu2">
              <li>
                <a href="<?=base_url('pengunjungadmin/index')?>"><i class="fa-solid fa-table"></i><span> Data pengunjung</span></a>
              </li>
              <li>
                <a href="<?=base_url('pengunjungadmin/data_pengunjung')?>"><i class="fa-solid fa-user-plus"></i><span> Tambah data pengunjung</span></a>
              </li>
            </ul>
          </li>
        </ul>
        <ul style="padding-top: 50%; margin: 0 auto">
            <a href="<?=base_url('homeadmin/logout')?>" onclick="return confirm('Yakin ingin keluar?')" ><i class="fa-solid fa-right-from-bracket"> </i> <span style="margin-left: 15px">Logout</span></a>
        </ul>
      </nav>

      <!-- Page Content  -->
      <div id="content">
        <div class="menu-header">
          <button type="button" id="sidebarCollapse" class="btn menu-btn">
          <i class="fa-solid fa-list"></i>
          </button>
          <span class="menu-text"><?=$judul?></span>
          <hr>

            <?php
            if($page){
                $this->load->view($page);
            }else{
                echo"data tidak ditemukan";
            }
            ?>
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
  </body>
</html>
