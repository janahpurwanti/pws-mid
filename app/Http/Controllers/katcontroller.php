<?php

namespace App\Http\Controllers;
use App\ModelCategory;
use App\ModelBooks;
use Illuminate\Http\Request;

class katcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = ModelCategory::all();
    return response($data);
  }

  public function show($id){
    $data = ModelCategory::where('id',$id)->get();
    return response ($data);
  }

  public function store(Request $request){
    $data = new ModelCategory();
    $data->nama_kategori = $request->input('nama_kategori');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function update(Request $request, $id){
    $data = ModelCategory::where('id',$id)->first();
    $data->nama_kategori = $request->input('nama_kategori');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroy($id){
    $data = ModelCategory::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
  
  public function buku(){
    $data = ModelBooks::all();
    return response($data);
  }

  public function showbuku($id){
    $data = ModelBooks::where('kode',$id)->get();
    return response ($data);
  }

  public function storebuku(Request $request){
    $data = new ModelBooks();
    $data->judul = $request->input('judul');
    $data->penerbit = $request->input('penerbit');
    $data->pengarang = $request->input('pengarang');
    $data->id = $request->input('id');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function updatebuku(Request $request, $id){
    $data = ModelBooks::where('id',$id)->first();
    $data->judul = $request->input('judul');
	$data->penerbit = $request->input('penerbit');
	$data->pengarang = $request->input('pengarang');
    $data->id = $request->input('id');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroybuku($id){
    $data = ModelBooks::where('kode',$id)->first();
	$data->judul = $request->input('judul');
	$data->penerbit = $request->input('penerbit');
	$data->pengarang = $request->input('pengarang');
    $data->id = $request->input('id');
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
}
