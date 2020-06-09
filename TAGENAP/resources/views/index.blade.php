
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>iNDEX</title>
<!--     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">





    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

  </head>
  <body>
    <!-- Ini Login -->
    <div id="mylogin" role="dialog" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header text-left">
        <h4 class="modal-title">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-success" data-dismiss="modal">Login </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sampe sini yaa -->
<!-- ini update -->
 <div id="myupdate" role="dialog" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header text-left">
        <h4 class="modal-title">Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
    <div class="form-group" id="updt">
      <label>Tanggal : </label>
      <input type="date" name="date">
     <table style="width: 460px;" id="q1" border="0">
            <tr>
              <th> Kasus</th>
              <th> Jumlah</th>
            </tr>
            <tr style="background-color: salmon">
              <td>  Positif</td>
              <td><input id="a2" type="number" name="Terkonfirmasi"></td>
            </tr>
            <tr style="background-color: orange">
              <td>  Negatif</td>
              <td><input id="a2" type="number" name="DalamPengawasan"></td>
            </tr>
            <tr style="background-color: turquoise">
              <td>  Sembuh</td>
              <td><input id="a2" type="number" name="sembuh"></td>
            </tr>
            <tr style="background-color: grey">
              <td>  Meninggal</td>
              <td><input id="a2" type="number" name="Meninggal"></td>
            </tr>
          </table>
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Jumlah</label>
      <input type="number" class="form-control" id="exampleInputPNumber" placeholder="Jumlah">
    </div> -->
  </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-success" data-dismiss="modal">Update </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- sampesini ya -->

    @extends('layouts.app')
      @section('content')
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
    <a class="navbar-brand" href="#">CoronaID</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-dark" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li data-toggle="modal" data-target="#mylogin" class="nav-item active">
          <a class="nav-link" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
        </li>
       <!--  <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
<!--       <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENU
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="nav-link" href="#">Login <span class="glyphicon glyphicon-log-in"> </span></a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div> -->
  <!--     <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
</header>

<main role="main">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/img/slide1.jpg" class="d-block w-100" id="ima" style="height: 660px">

      <div class="carousel-caption d-none d-md-block" id="a1">
        <h5>#STAY_SAFE<BR>#DIRUMAHAJA</h5> 
        <p>Mari Kita Lawan Pandemi Ini Bersama</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/img/slider1.jpg" class="d-block w-100" id="ima" alt="..." style="height: 660px; margin-top: 180px;">
      <div id="a1" class="carousel-caption d-none d-md-block text-right">
        <h5>PERHATIAN</h5>
        <p>Kenali apa yang kita hadapi saat ini !</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/img/wp.png" class="d-block w-100" id="ima" style="height: 660px; margin-top: 25px;">
       <div id="a1" class="carousel-caption d-none d-md-block text-left">
          <table border="0">
            <tr style="background-color: salmon">
              <td>Positif</td>
              <td>120</td>
            </tr>
            <tr style="background-color: orange">
              <td>Negatif</td>
              <td>120</td>
            </tr>
            <tr style="background-color: turquoise">
              <td>Sembuh</td>
              <td>120</td>
            </tr>
            <tr style="background-color: grey">
              <td>Meninggal</td>
              <td>120</td>
            </tr>
          </table>
      </div>
      <div id="a1" class="carousel-caption d-none d-md-block text-right">
        <h1><B>STAY SAFE !!</B></h1>
        <h2>#DirumahSaja</h2>
        <h3>#StaySafe</h3>
        <p>Sayangi <b>diri</b> anda dan <b>Keluarga</b> anda</p>
          <li data-toggle="modal" data-target="#myupdate" class="nav-item active">
          <a style="width: 100px;" type="button" class="btn btn-success nav-link" href="#">UPDATE <span class="glyphicon glyphicon-log-in"></span></a>
        </li>
        <!--  <li data-toggle="modal" data-target="#myEdite" class="nav-item active">
          <a style="width: 100px;" type="button" class="btn btn-success nav-link" href="#">EDIT <span class="glyphicon glyphicon-log-in"></span></a>
        </li>
 -->
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div id="div3" class="container marketing">
    <!-- //cAROUSEL -->
    <div class="row">
      <div align="center"  class="col-lg-2">
        <img src="asset/img/logo.png">
        <h3>APA</h3>
       <!--  <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
       </p> -->
        <p><a class="btn btn-secondary" href="#apa" role="button">Lihat &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div align="center" class="col-lg-2">
      <img src="asset/img/p2.png">
        <h3>SIAPA</h3>
      <!--   <p>Physical distancing
        WHO telah resmi mengubah frasa social distancing menjadi physical distancing. Frasa physical distancing dirasa lebih pas karena bukan dimaksudkan untuk menjaga jarak sosial, </p>
        <p> --><a class="btn btn-secondary" href="#siapa" role="button">Lihat &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div align="center" class="col-lg-2">
       <img src="asset/img/p3.png">
        <h3>KAPAN</h3>
       <!--  <p>Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (tetesan kecil) yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau.</p>
        <p> --><a class="btn btn-secondary" href="#kapan" role="button">Lihat &raquo;</a></p>
      </div>
       <div align="center"  class="col-lg-2">
        <img src="asset/img/p4.png">
        <h3>MENGAPA</h3>
       <!--  <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
       </p> -->
        <p><a class="btn btn-secondary" href="#mengapa" role="button">Lihat &raquo;</a></p>
      </div>
       <div align="center"  class="col-lg-2">
        <img src="asset/img/p5.png">
        <h3>DIMANA</h3>
        <!-- <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
       </p> -->
        <p><a class="btn btn-secondary" href="#dimana" role="button">Lihat &raquo;</a></p>
      </div>
      <div align="center"  class="col-lg-2">
        <img src="asset/img/p1.png">
        <h3>BAGAIMANA</h3>
       <!--  <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
       </p> -->
        <p><a class="btn btn-secondary" href="#bagaimana" role="button">Lihat &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- //Cara MencegAH -->

   <!--   <div style="text-align: center;font-family: arial;background-color: grey;">
      <h1><br>MARI CEGAH PENYEBARAN COVID-19<br><br></h1>
    </div> -->
    <hr id="apa" class="featurette-divider">
    <div class="row featurette">
      <div id="a1" class="col-md-7">
        <h2 class="featurette-heading"><b>Apa Itu Covid-19?</b></h2>
        <p class="lead">COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.  Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr  id="siapa" class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Siapa?</h2>
        <p class="lead">Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan menyebabkan penyakit COVID-19.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr id="kapan" class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Kapan? </h2>
        <p class="lead">Berdasarkan laporan resmi pemerintah Tiongkok, World Health Organization (WHO) mengumumkan kasus pneumonia yang terjadi di Wuhan Tiongkok. Laporan ini diumumkan di hari perayaan pergantian tahun baru, ketika ribuan atau bahkan jutaan warga Tiongkok merayakannya.

1 Januari 2020

The U.S Centers for Disease Control and Prevention (CDC), mengidentifikasi pasar seafood di Wuhan sebagai tempat munculnya wabah pneumonia. Berdasarkan penyelidikan Pemerintah Tiongkok, pasar tersebut pun ditutup untuk publik.

7 Januari 2020

Pemerintah Tiongkok mengidentifikasi virus tersebut sebagai virus corona baru, awalnya disebut sebagai 2019-nCoV oleh WHO.

11 Januari 2020

Pemerintah Tiongkok melaporkan kasus kematian pertama akibat 2019-nCoV.

12 Januari 2020

Tiongkok membagikan urutan genetik dari novel corona virus, yang amat penting bagi negara lain untuk mengembangkan peralatan diagnostik.

13 Januari 2020

Untuk pertama kali, WHO melaporkan kasus Covid-19 terjadi di luar Tiongkok. </p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr id="mengapa" class="featurette-divider">

     <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Mengapa?</h2>
        <p class="lead">Sebelumnya, WHO menghindari kata “pandemi” karena dianggap menyebabkan ketakutan dan kepanikan yang tidak diperlukan. Namun, melihat terjadinya peningkatan terhadap penyebaran virus ini, mau tidak mau membuat WHO memutuskan kalau COVID-19 adalah pandemi.


COVID-19 sebagai pandemi, maka WHO berharap negara-negara lain bisa lebih agresif dalam mengambil tindakan pencegahan dan perawatan. Jika pemerintah bisa dengan cepat melacak, mendeteksi, menguji, merawat, dan mengisolasi orang-orang yang disinyalir terinfeksi COVID-19, diharapkan dapat menghentikan penyebaran, sehingga pemerintah dan tim medis terfokus pada penanganan dan perawatan mereka yang terinfeksi saja. 

Intinya dengan adanya aksi pencegahan dan tindakan agresif dari pemerintah dan tim medis setempat, diharapkan dapat menurunkan tingkat penyebaran. Sejatinya, ketika suatu wabah menjadi pandemi, tidak hanya berdampak pada sektor kesehatan saja, tetapi juga perekonomian, sosial, dan kestabilan suatu negara.  </p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr id="dimana"class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Dimana?</h2>
        <p class="lead">hasil dari penelitian ini memecahkan misteri bahwa asal muasal virus tersebut adalah dari orang yang memakan hewan terkontaminasi di Pasar Makanan Laut Huanan, Wuhan, Cina. Kontaminasi tersebut diakibatkan oleh pembuangan ceroboh bahan berbahaya di pusat Wuhan untuk fasilitas Pengendalian Penyakit dekat dengan pasar tersebut. Pada Desember 2019, 27 dari 41 orang pertama dirawat di rumah sakit atau setidaknya 66 persen kasus COVID-19, melewati pasar yang terletak di jantung kota Wuhan di provinsi Hubei. Sementara, melalui laporan yang dimuat dalam The Lancet, tercatat bahwa kasus COVID-19 pertama di Wuhan tidak memiliki koneksi ke pasar makanan laut tersebut. Hal ini juga diungkapkan melalui fakta bahwa kelelawar tidak dijual di pasar makanan laut meski pasar tersebut bisa menjual hewan yang bersentuhan dengan kelelawar. “Adanya teori-teori yang bermunculan tersebut mencerminkan kurangnya pemahaman tentang susunan generik SARS-CoV-2 dan hubungannya dengan virus kelelawar,” ungkap Vincent Racaniello, profesor miikrobiologi dan imunologi di Universitas Columbia di New York, dikutip dari SCMP. Lebih lanjut, Racaniello menjelaskan apabila seseorang memiliki virus tersebut di laboratorium dan virus tersebut lolos hingga menyebar, tidak akan dapat menginfeksi manusia. “Virus harus memiliki tambahan perubahan yang memungkinkannya dapat menginfeksi manusia,” lanjutnya. Dengan kata lain, virus SARS-CoV-2 berada dalam inang dalam hal ini kelelawar, bersirkulasi dan berevolusi selama beberapa tahun hingga cukup bermutasi dan dapat menginfeksi orang.


</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>
     <hr id="bagaimana" class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Bagaimana?</h2>
        <p class="lead">Virus corona dapat hidup di bagian tubuh manapun. Virus corona suka masuk ke permukaan paru-paru di mana udara dialirkan ke sel-sel tubuh, lalu mereka suka kembali ke tempat asalnya, sehingga ia bisa menginfeksi organ-organ lain juga. Virus ini juga bisa berakhir di aliran darah yang dapat menyebabkan masalah besar, karena dapat menyerang organ-organ vital. seperti jantung, ginjal, hati, dan mengakibatkan kerusakan organ tersebut.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">@arohendii</a> &middot; <a href="#">Garlex</a></p>
  </footer>
</main>
@endsection
    </body>
</html>
