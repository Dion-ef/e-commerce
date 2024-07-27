<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //kategori
    public function index(){
        $data = kategori::orderBy('nama_kategori','desc')->get();
        return view('kategori')->with('data',$data);
    }

    public function edit($id){
        $data = kategori::where('id',$id)->first(); //pake first agar data yang muncul hanya baris pertama jika get yang muncul array banyak
        return view('edit')->with('data',$data);
    }

    public function update(Request $request){
        DB::table('kategori')->where('id',$request->id)->update([
            'nama_kategori'=> $request->nama,
        ]);
        return redirect('/dashboard/kategori')->with('toast_success','berhasil');
    }
    public function hapus($id){
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('dashboard/kategori')->with('info', 'Data Berhasil Dihapus!');
    }
    public function tambah(){
        return view('tambah');
    }
    public function store(Request $request){
        DB::table('kategori')->insert([
            'nama_kategori'=> $request->nama,
        ]);

        return redirect('/dashboard/kategori')->with('toast_success', 'Kategori Baru Berhasil ditambahkan!');

    }
  

    //barang
    public function kategori()
    {
        $wali = barang::with('kategori')->get();
        return view('barang/barang', ['data'=>$wali]);
    }
    public function tambahBarang(){
        return view('barang/tambah_barang');
    }
    public function barangStore(Request $request){
        DB::table('barang')->insert([
            'nama'=>$request->nama,
            'kategori_id'=>$request->kategori,
            'harga'=>$request->harga,
            'gambar'=>$request->gambar,
            'deskripsi'=>$request->detail,
        ]);
        return redirect('/kategori/barang')->with('toast_success', 'Barang Berhasil ditambahkan!');
    }
    
    public function hapusBarang($id){
        DB::table('barang')->where('id',$id)->delete();
        return redirect('kategori/barang')->with('info', 'Data Berhasil Dihapus!');
    }
    public function editBarang($id){
        $data = barang::where('id',$id)->first(); //pake first agar data yang muncul hanya baris pertama jika get yang muncul array banyak
        return view('barang/edit_barang')->with('data',$data);
    }
    public function updateBarang(Request $request){
        DB::table('barang')->where('id',$request->id)->update([
            'nama'=>$request->nama,
            'kategori_id'=>$request->kategori,
            'harga'=>$request->harga,
            'gambar'=>$request->gambar,
            'deskripsi'=>$request->detail,
        ]);
        return redirect('/kategori/barang')->with('toast_success', 'Barang Berhasil diubah!');
    }
}
