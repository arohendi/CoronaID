<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PandemiController extends Controller{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 public function index(){
  $data['covid'] = \DB::table('t_kasus')->get();
  return view('covid', $data);
 }
 public function create(){
  return view('korona.form');
 }
  public function store(Request $request){
  	$rule = [
   'jml_positif' => 'numeric',
   'jml_negatif' => 'numeric',
   'jml_sembuh' => 'numeric',
   'jml_meninggal' => 'numeric',
   'tanggal' => 'required',
  ];
  $this->validate($request, $rule);
  $input = $request->all();
  unset($input['_token']);
  $status = \DB::table('t_kasus')->insert($input);

  if ($status) {
   return redirect('/covid')->with('success','Data Berhasil Ditambahkan');
  }
  else{
   return redirect('/covidcreate')->with('error','Data Gagal Ditambahkan');
  }
 }
  public function edit(Request $request, $id){
  $data['covid'] = \DB::table('t_kasus')->find($id);
  return view('korona.form', $data);
 }
 public function update(Request $request, $id){
  $pesan = [
   'unique' => ':attribute ini telah terpakai',
   'required' => 'Kolom :attribute harus diisi',
   'max' => ':attribute melebihi batas :max karakter',
   'string' => 'Masukan data :attribute dengan tipe string saja'
  ];

  $rule = [
   'jml_positif' => 'numeric',
   'jml_negatif' => 'numeric',
   'jml_sembuh' => 'numeric',
   'jml_meninggal' => 'numeric',
   'tanggal' => 'required'
  ];
  $this->validate($request, $rule, $pesan);

  $input = $request->all();
  unset($input['_token']);
  unset($input['_method']);

  $status = \DB::table('t_kasus')->where('id', $id)->update($input);

  if ($status) {
   return redirect('/covid')->with('success','Data Berhasil Diubah');
  }
  else{
   return redirect('/covidcreate')->with('error','Data Gagal Diubah');
  }
 }
  public function destroy(Request $request, $id){
  $status = \DB::table('t_kasus')->where('t_kasus_id', $id)->delete();

  if ($status) {
   return redirect('/covid')->with('success','Data Berhasil Dihapus');
  }
  else{
   return redirect('/covidcreate')->with('error','Data Gagal Dihapus');
  }
 }
}