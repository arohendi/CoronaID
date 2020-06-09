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
<!--     MODAL -->


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

<!-- UPdate -->
<div id="myupdate" role="dialog" class="modal fade">
  <div class="modal-dialog modal-xl">
   <div class="modal-content">
      <div class="modal-header text-left">
        <h4 class="modal-title">UPDATE</h4>
      </div>
      <div class="modal-body">
        <form>
    <div class="form-group" id="updt">

           <table style="width: 1100px;text-align: center;" >
            <tr style="background-color: lightblue;border-style:solid;" id="heading">
              <td>Jumlah Positif</td>
              <td>Jumlah Negatif</td>
              <td>Jumlah Sembuh</td>
              <td>Jumlah Meninggal</td>
              <td>Per Tanggal</td>
              <td>Tindakan</td>
             </tr>
            @foreach ($covid as $row)
            <tr style="background-color: salmon; border-bottom: solid;">
              <td >{{ $row->jml_positif }}</td>
              <td >{{ $row->jml_negatif }}</td>
              <td >{{ $row->jml_sembuh }}</td>
              <td >{{ $row->jml_meninggal }}</td>
              <td >{{ $row->tanggal }}</td>
              <td >
          <a class="btn btn-warning" type="submit" href="{{ url('/covid' . $row->id . 'edit') }}">EDIT</a>
                <form action="{{ url('/covid/', $row->id ) }}" method="POST">
                 @method('Delete')
                 @csrf
          <a href="" type="submit" class="btn btn-danger">
                 DELETE</a>
                </form>
             </td>
              
              </tr>
                @endforeach
            </table>
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Jumlah</label>
      <input type="number" class="form-control" id="exampleInputPNumber" placeholder="Jumlah">
    </div> -->
  </form>
      </div>
      <div class="modal-footer">
         <a type="submit" class="btn btn-success" href="{{ url('/covidcreate') }}"><b>+</b> Tambah Kasus</a>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sampe sini yaa -->

<!-- detail -->
<div id="mydetail" role="dialog" class="modal fade">
  <div class="modal-dialog modal-xl">
   <div class="modal-content">
      <div class="modal-header text-left">
        <h4 class="modal-title">DETAIL</h4>
      </div>
      <div class="modal-body">
        <form>
    <div class="form-group" id="updt">

           <table style="width: 1100px;text-align: center;" >
            <tr style="background-color: yellowgreen;border-style:solid;" id="heading">
              <td>Jumlah Positif</td>
              <td>Jumlah Negatif</td>
              <td>Jumlah Sembuh</td>
              <td>Jumlah Meninggal</td>
              <td>Per Tanggal</td>
             </tr>
            @foreach ($covid as $row)
            <tr style="background-color: salmon; border-bottom: solid;">
              <td >{{ $row->jml_positif }}</td>
              <td >{{ $row->jml_negatif }}</td>
              <td >{{ $row->jml_sembuh }}</td>
              <td >{{ $row->jml_meninggal }}</td>
              <td >{{ $row->tanggal }}</td>
              </tr>
                @endforeach
            </table>
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Jumlah</label>
      <input type="number" class="form-control" id="exampleInputPNumber" placeholder="Jumlah">
    </div> -->
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- sampe sini yaa -->

    @extends('layouts.app')
      @section('content')
   

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

      <div id="a1" class="carousel-caption d-none d-md-block text-right">
        <h1><B>STAY SAFE !!</B></h1>
        <h2>#DirumahSaja</h2>
        <h3>#StaySafe</h3>
        <p>Sayangi <b>diri</b> anda dan <b>Keluarga</b> anda</p>
        <!--  <li data-toggle="modal" data-target="#myEdite" class="nav-item active">
          <a style="width: 100px;" type="button" class="btn btn-success nav-link" href="#">EDIT <span class="glyphicon glyphicon-log-in"></span></a>
        </li>
 -->
      </div>
      <div id="a1" class="carousel-caption d-none d-md-block text-left">

         <div style="margin-top: 300px" class="alert alert-success">
          {{ session('success') }}
         </div>



         <div class="alert alert-error">

         </div>

         <table border="0">
            <tr style="background-color: salmon">
              <td>Positif</td>
              <td>9634</td>
            </tr>
            <tr style="background-color: orange">
              <td>Negatif</td>
              <td>2342</td>
            </tr>
            <tr style="background-color: turquoise">
              <td>Sembuh</td>
              <td>1122</td>
            </tr>
            <tr style="background-color: grey">
              <td>Meninggal</td>
              <td>542</td>
           <!--    <td><p><a role="button" class=" btn btn-success nav-link " href="">edit</a></p></td> -->
            </tr>
          </table>

            <p style="margin-bottom:-40px;margin-left: 150px" data-toggle="modal" data-target="#myupdate" class="nav-item active">
                <a style="width: 100px;" type="button" class="btn btn-outline-success nav-link" href="#">UPDATE</a>
            </p>
            <p data-toggle="modal" data-target="#mydetail" class="nav-item active">
                <a style="width: 120px;" type="button" class="btn btn-success nav-link" href="#">Lihat Detail</a>
           </p>

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
      <div align="center"  class="col-lg-2 ">
<a class="btn btn-outline-secondary" href="#apa" role="button"> <img src="asset/img/logo.png">
<h3>APA</h3></a>
 
      </div><!-- /.col-lg-4 -->
      <div align="center" class="col-lg-2 ">
     
<a class="btn btn-outline-secondary" href="#siapa" role="button"> <img src="asset/img/p2.png">
<h3>SIAPA</h3></a>
      </div><!-- /.col-lg-4 -->
      <div align="center" class="col-lg-2">
    
<a class="btn btn-outline-secondary" href="#kapan" role="button">   <img src="asset/img/p3.png">
<h3>KAPAN</h3></a>
      </div>
       <div align="center"  class="col-lg-2">
       
<a class="btn btn-outline-secondary" href="#mengapa" role="button"> <img src="asset/img/p4.png">
<h3>MENGAPA</h3></a>
      </div>
       <div align="center"  class="col-lg-2">
<a class="btn btn-outline-secondary" href="#dimana" role="button"> <img src="asset/img/p5.png">
 <h3>DIMANA</h3></a>
      </div>
      <div align="center"  class="col-lg-2">
<a class="btn btn-outline-secondary" href="#bagaimana" role="button"> <img src="asset/img/p1.png">
<h3>BAGAIMANA</h3></a>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- //Cara MencegAH -->

   <!--   <div style="text-align: center;font-family: arial;background-color: grey;">
      <h1><br>MARI CEGAH PENYEBARAN COVID-19<br><br></h1>
    </div> -->
    <hr id="apa" class="featurette-divider">
    <div class="row featurette">
      <div id="a1" class="col-md-7">
        <h2 id="apa" class="featurette-heading"><b>Apa Itu Covid-19 ?</b></h2>
        <p class="lead">COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.  Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019. COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia.</p>
      </div>
      <div class="col-md-5">
        <img src="asset/img/koronapirus.jpg"style="width: 400px; height: 400px"></img>
      </div>
    </div>

    <hr  id="siapa" class="featurette-divider">
    <div class="row featurette" >
      <div class="col-md-7 order-md-2 ">
        <h2 id="siapa" class="featurette-heading"><b>Siapa yang <u>Rentan</u> Terkena Virus Covid-19 ?</b></h2>
        <p class="lead small">

<b> 1. Orang lanjut usia (lansia)</b>
<br>
Seiring bertambahnya usia seseorang, tubuh akan mengalami berbagai penurunan akibat proses penuaan. Mulai dari menurunnya produksi hormon, kekenyalan kulit, massa otot, kepadatan tulang, hingga kekuatan dan fungsi organ-organ tubuh.<br><br>
<b> 2. Orang dengan riwayat penyakit tertentu</b>
<br>
Gejala berat dan komplikasi serius akibat Covid-19 juga dialami oleh orang dengan riwayat penyakit tertentu, seperti orang-orang yang menderita penyakit tidak menular kronis.<br><br>
<b> 3. Tenaga Medis</b>
<br>
Kelompok orang yang rentan terinfeksi virus corona berikutnya adalah tenaga medis di rumah sakit, termasuk dokter dan perawat. Bagaimana tidak, mereka diharuskan untuk bersinggungan langsung dengan pasien yang terinfeksi virus corona.<br><br>
<b> 4. Anak-anak</b>
<br>
Di Indonesia sendiri, Kementerian Pemberdayaan Perempuan dan Perlindungan Anak (KemenPPA) mengungkapkan data anak-anak yang terkena Covid-19 di beberapa provinsi di Indonesia yang masuk dalam zona merah penyebaran virus corona.<br><br>
</p>
      </div>
      <div class="col-md-5 order-md-1">
       <img src="asset/img/g2.jpeg
       "style="width: 400px; height: 400px"></img>
      </div>
    </div>

    <hr id="kapan" class="featurette-divider">

    <div class="row featurette ">
      <div class="col-md-7">
        <h2 id="kapan" class="featurette-heading"><b>Kapan Covid-19 Menyebar?</b></h2>
        <p class="lead small">
          <b>Berdasarkan laporan resmi pemerintah Tiongkok, World Health Organization (WHO) mengumumkan kasus pneumonia yang terjadi di Wuhan Tiongkok. Laporan ini diumumkan di hari perayaan pergantian tahun baru, ketika ribuan atau bahkan jutaan warga Tiongkok merayakannya.</b><br><br>

<b>1 Januari 2020</b>

The U.S Centers for Disease Control and Prevention (CDC), mengidentifikasi pasar seafood di Wuhan sebagai tempat munculnya wabah pneumonia. Berdasarkan penyelidikan Pemerintah Tiongkok, pasar tersebut pun ditutup untuk publik.<br><br>

<b>7 Januari 2020</b>

Pemerintah Tiongkok mengidentifikasi virus tersebut sebagai virus corona baru, awalnya disebut sebagai 2019-nCoV oleh WHO.<br><br>

<b>11 Januari 2020</b>

Pemerintah Tiongkok melaporkan kasus kematian pertama akibat 2019-nCoV.<br><br>

<b>12 Januari 2020</b>

Tiongkok membagikan urutan genetik dari novel corona virus, yang amat penting bagi negara lain untuk mengembangkan peralatan diagnostik.<br><br>

<b>13 Januari 2020</b>

Untuk pertama kali, WHO melaporkan kasus Covid-19 terjadi di luar Tiongkok. </p>
      </div>
      <div class="col-md-5">
         <img src="asset/img/3633249.jpg" style="width: 400px; height: 400px"></img>
      </div>
    </div>

     <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 id="mengapa" class="featurette-heading"><b>Mengapa Covid-19 Sangat <u>Berbahaya?</u></b></h2>
       <p class="lead small">

<b> 1. Penularan</b>
<br>
Penularannya bisa melalui percikan/tetasan (droplet) yang ukurannya berbagai macam. Ada droplet besar dan kecil. Droplet besar ini akan memindahkan virus lewat tangan. Seperti ketika bersin, batuk, yang kemudian orang sakit tersebut memegang benda-benda di sekitarnya. virus Corona juga bisa lewat berkumpul atau beraktivitas di tengah kerumunan. Sebab, virus Corona dapat menempel secara kasat mata pada pakaian dan benda yang dibawa orang lain<br><br>
<b> 2. Agresif</b>
<br>
Virus Corona merupakan virus agresif dengan tingkat penularan yang tinggi. Meski SARS dinyatakan virus mematikan, perbedannya dengan virus corona ada pada kecepatan penularan virus. Virus Corona menular lebih cepat dari SARS.<br><br>
<b> 3. Gejala</b>
<br>
COVID-19 memiliki gejala ringan seperti gangguan pernapasan atau penyakit flu biasa sehingga agak sulit untuk mengetahui gejalanya tanpa melakukan pemeriksaan atau tes di rumah sakit khusus.
Adapun beberapa gejalanya, antara lain batuk kering, demam, pilek, sakit tenggorokan, gangguan pernapasan, letih, serta lesu. <br><br>
<b> 4. Riwayat Penyakit</b>
<br>
Bagi orang yang memiliki riwayat penyakit tertentu, seperti diabetes dan penyakit jantung, lebih rentan terkena virus corona dan mengalami komplikasi parah ketika positif COVID-19. <br><br>
</p>
      </div>
      <div class="col-md-5 order-md-1">
       <img src="asset/img/3707125.jpg" style="width: 400px; height: 400px"></img>
      </div>
    </div>

    <hr id="dimana"class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 id="dimana" class="featurette-heading"><b>Dimana Covid-19 dapat <u>Menular</u> ?</b></h2>
        <p class="lead">
<u> Karena Menyentuh Permukaan Benda</u><br>
Apabila seseorang menyentuh permukaan atau benda apa pun yang sudah terkena atau terkontaminasi percikan atau tetesan dari seseorang yang terpapar COVID-19.

Virus corona, seperti diketahui dapat bertahan selama beberapa jam di berbagai permukaan, seperti kaca, plastik, baja, tembaga, kertas, hingga kayu.

Ketika tanpa diketahui menyentuh benda yang sudah terkominasi virus corona tersebut, dan menyentuh wajah seperti di bagian hidung, mulut, dan mata tanpa mencuci tangan terlebih dulu, kita berisiko tertular. 

</p>
      </div>
      <div class="col-md-5">
        <img src="asset/img/3605324.jpg" style="width: 400px; height: 400px"></img>
      </div>
    </div>
     <hr id="bagaimana" class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 id="bagaimana" class="featurette-heading"><b>Bagaimana Cara kita <u>Mencegah</u> Penyebaran Covid-19 ?</b></h2>
        <p class="lead small">
<b> 1. Sering Mencucui Tangan</b>
<br>
Sekitar 98 persen penyebaran penyakit bersumber dari tangan. Mencuci tangan hingga bersih menggunakan sabun dan air mengalir efektif membunuh kuman, bakteri, dan virus, termasuk virus Corona.<br><br>
<b> 2. Hindari Menyentuh Area Wajah</b>
<br>
Virus Corona dapat menyerang tubuh melalui area segitiga wajah, seperti mata, mulut, dan hidung. Area segitiga wajah rentan tersentuh oleh tangan, sadar atau tanpa disadari.<br><br>
<b> 3. Bersihkan Perabotan di Rumah</b>
<br>
Bersihkan permukaan perabotan rumah yang rentan tersentuh, seperti gagang pintu, meja, furnitur, laptop, handphone, apa pun, secara teratur. Anda bisa membuat cairan disinfektan buatan sendiri di rumah menggunakan cairan pemutih dan air.<br><br>
<b> 4. Physical Distancing</b>
<br>
Satu di antara pencegahan penyebaran virus Corona yang efektif adalah jaga jarak sosial. Pemerintah telah melakukan kampanye jaga jarak fisik atau physical distancing.

Dengan menerapkan physical distancing ketika beraktivitas di luar ruangan atau tempat umum, Anda sudah melakukan satu langkah mencegah terinfeksi virus Corona. Jaga jarak Anda dengan orang lain sekitar satu meter.<br><br>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="asset/img/3653701.jpg" style="width: 400px; height: 400px"></img>
      </div>

          <hr  class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">CoronaID</a> &middot; <a href="#">SMKN 4 Bandung</a></p>
  </footer>
</main>
@endsection
    </body>
</html>