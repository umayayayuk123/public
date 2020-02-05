<html>

<head>
  <meta charset="UTF-8">
  <title>Beranda | Easy Printing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/w31.css">
  <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/boot1.css">
  <link rel="stylesheet" href="assets/css/font1-awesome.min.css">
  <link rel="stylesheet" href="assets/css/hover1.css">
  <link rel="icon" href="assets/img/headd.jpg" type="">
  <script src="assets/js/js1.min.js"></script>
  <script src="assets/js/boot1.js"></script>

  <style>
    .modal-lg {
      width: 80%;
    }

    .mySlides {
      display: none
    }

    .w3-left,
    .w3-right,
    .w3-badge {
      cursor: pointer
    }

    .w3-badge {
      height: 13px;
      width: 13px;
      padding: 0
    }
  </style>
  <script type='text/javascript'>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
      'November', 'Desember'
    ];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
      thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
  </script>
</head>

<body>
  <table border="0" cellpadding="10" cellspacing="0" width="89%" align="center">
    <tr style="border: 5px ">
      <td colspan="4" align="center">
        <img src="assets/img/logo.png" width="100%" height="130%">
      </td>
    </tr>

    <td>
      <p style="color: white;font-size: 14pt;font-family:astanafont;margin-right: -40px;margin-top: 10px"><b>
          <script>
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
          </script>
        </b></p>
    </td>
    </tr>
    <tr>
      <td colspan="4">
        <br>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"> Percetakan Easy Printing</a></li>
          <li class="breadcrumb-item active"><a href="#"> Beranda</li>

        </ol>
        <!-- end Breadcrumb -->
      </td>
    </tr>
    <tr>
      <td colspan="4" style="width: 10px">
        <!-- content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-8">
              <br>
              <div class="Jumbotron" width="100%">
                <center>
                  <h2><b>EASY PRINTING (DIGITAL PRINTING OUTDOR <br>INDOR & OFFSET PRINTING)<br>
                      <br>
                      <center>
                        <p align="j">EASY PRINTING, berdiri sebagai sebuah perusahan dengan fokus di bidang Produk
                          Percetakan, Penjualan Barang & Jasa. Perusahaan kami menawarkan kerja sama dengan berbagai
                          Perusahaan Swasta maupun Dinas/Instansi Pemerintah pada berbagai bentuk perkerjaan sesuai
                          bidang keahlian perusahaan kami.<br>
                        </p>
                      </center>
                      <br>
                      <center><small><b>*) Untuk Mendapatkan Informasi Update Terbaru Silahkan Daftar</b></small>
                      </center><br>
                      <center>
                        <a href="#" class="hvr-bounce-to-right btn btn-default"> Daftar</a>
                        <a href="<?=site_url('Auth/login')?>" class="hvr-bounce-to-right btn btn-default"> Login
                          Administrasi</a>
                        <a class="hvr-bounce-to-right btn btn-default" data-toggle="modal"
                          data-target="#modalSearchData"> Lihat Pesanan Saya</a>
                      </center>
              </div>
            </div>
            <div class="col-md-4">

              <div class="w3-content w3-section" style="max-width:500px">
                <img class="mySlides" src="assets/img/5.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/11.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/2.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/123.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/3.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/4.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/6.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/7.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/8.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/12.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/13.jpg" style="width:100%">
                <img class="mySlides" src="assets/img/14.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>
        <!-- end content -->
      </td>
    </tr>
    <tr>
      <td colspan="4">

      </td>
    </tr>
    <tr>
      <td colspan="4">
        <label for=""
          style="position: absolute;margin-left: 70px;margin-top: 10px;font-family: arial;color: white"></label>
        <img src="assets/img/foot.png" alt="" style="width: 100%;height: 40%">
      </td>
    </tr>
  </table>

  <div class="modal fade" id="modalSearchData" tabindex="-1" role="dialog" aria-labelledby="modalSearchData"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="modalSearchData">Cari Data Pesanan</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmCariData" method="POST">
            <input type="text" class="form-control" placeholder="Cari Data. . . ."name="input_cari" id= "input_cari">
          </form>
          <div id="div-data-pesanan"></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
  </script>

  <script>
    function changehomeputih() {
      var image = document.getElementById('homeimg');
      if (image.src.match("bulbon")) {
        image.src = ".png";
      } else {
        image.src = ".png";
      }
    }

    function changehomeireng() {
      var image = document.getElementById('homeimg');
      if (image.src.match("bulbon")) {
        image.src = ".png";
      } else {
        image.src = ".png";
      }
    }

    function changeprodukputih() {
      var image = document.getElementById('produkimg');
      if (image.src.match("bulbon")) {
        image.src = "tutorial.png";
      } else {
        image.src = "tutorial_2.png";
      }
    }

    function changeprodukireng() {
      var image = document.getElementById('produkimg');
      if (image.src.match("bulbon")) {
        image.src = "tutorial_2.png";
      } else {
        image.src = "tutorial.png";
      }
    }

    function changepemasananputih() {
      var image = document.getElementById('pemesananimg');
      if (image.src.match("bulbon")) {
        image.src = "pendaftaran.png";
      } else {
        image.src = "pendaftaran_2.png";
      }
    }

    function changepemasananireng() {
      var image = document.getElementById('pemesananimg');
      if (image.src.match("bulbon")) {
        image.src = "pendaftaran_2.png";
      } else {
        image.src = "pendaftaran.png";
      }
    }

    function changeaboutputih() {
      var image = document.getElementById('aboutimg');
      if (image.src.match("bulbon")) {
        image.src = "user.png";
      } else {
        image.src = "user_2.png";
      }
    }

    function changeaboutireng() {
      var image = document.getElementById('aboutimg');
      if (image.src.match("bulbon")) {
        image.src = "user_2.png";
      } else {
        image.src = "user.png";
      }
    }
  </script>
  <script>
    $("#frmCariData").submit(function (event) {
      event.preventDefault();
      var input_cari = $('#input_cari').val();
      $.ajax({
            type: "POST",
            url: "<?php site_url() ?>"+"utama/cari_data_pesanan_by_no_transaksi",
            dataType: "html",
            data : {
              data_input : input_cari
            },
            success: function(result) {
                //alert(result);
                $("#div-data-pesanan").html(result);
            }
        });
    });
  </script>
</body>

</html>