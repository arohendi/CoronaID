<!DOCTYPE html>
<html>
<head>
 <title>Tambah Data Kasus</title>
  <link rel="stylesheet" type="text/css" href="asset/css/from.css">
      <link rel="stylesheet" type="text/css" href="{{ ('css/bootstrap.css') }}">
</head>
<body id="b1">
 @if (session('error'))
 <div class="alert alert-error">
  {{ session('error') }}
 </div>
@endif

 @if (count($errors) > 0)
 <div class="alert alert-danger">
  <strong>Perhatian !!!</strong>
  <br />
  <ul>
   @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
  </ul>
</div>
@endif

 <h1 class="text-center">
Form Kasus</h1>
<form action="{{ url('covid', @$covid->
id) }}" method="POST" >
  @csrf

  @if(!empty($covid))
   @method('PATCH')
  @endif

  <table border="0" id="tambah">
<tr id="t1">
    <td> Jumlah Positif</td>
      
    <td><input type="number" name="jml_positif" value="{{ old('jml_positif', @$covid->jml_positif) }}" /></td>
   </tr>
<tr id="t2">
    <td> Jumlah Negatif</td>
      
    <td><input type="number" name="jml_negatif" value="{{ old('jml_negatif', @$covid->jml_negatif) }}" /></td>
   </tr>
<tr id="t3">
    <td> Jumlah Sembuh</td>
      
     <td><input type="number" name="jml_sembuh" value="{{ old('jml_sembuh', @$covid->jml_sembuh) }}" /></td>
   </tr>
<tr  id="t4">
    <td> Jumlah Meninggal</td>
      
    <td><input type="number" name="jml_meninggal" value="{{ old('jml_meninggal', @$guru->jml_meninggal) }}" /></td>
   </tr>
<tr  id="t5">
    <td> Tanggal</td>
      
    <td><input id="f1" type="date" name="tanggal" value="{{ old('tanggal', @$covid->tanggal) }}" /></td>
   </tr>
</table>
<br>
<input id="t6" id="Simpan" type="submit" value="Simpan" class="btn-primary">
</form>

<!-- / <form id="f1" >
  <div class="form-group row">
    <label id="from2" for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Positif</label>
    <div class="col-sm-10">
      <input id="from" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label id="from2" for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Negatif</label>
    <div class="col-sm-10">
      <input id="from" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label id="from2" for="inputPassword3" class="col-sm-2 col-form-label">Sembuh</label>
    <div class="col-sm-10">
      <input id="from" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label id="from2" for="inputPassword3" class="col-sm-2 col-form-label">Meninggal</label>
    <div class="col-sm-10">
      <input id="from" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form> -->
</body>
</html>