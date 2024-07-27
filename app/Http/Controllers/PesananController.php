<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pesanan;
use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    //riwayat transaksi admin
   public function barang()
    {
        $data = transaksi::with('barang')->get();
        return view('/transaksi', ['data'=>$data]);
    }

    //untuk pemesanan pembeli
    public function index($id){
        $barang = barang::where('id',$id)->first();
        return view('pembeli/pesan',['data'=>$barang]);
    }

    public function pesan(Request $request,$id){
    $data = barang::where('id',$id)->first();
     $tanggal =Carbon::now();
 
     $transaksi = new transaksi();
     $transaksi->users_id = Auth::user()->id;
     $transaksi->users_name = Auth::user()->name;
     $transaksi->alamat = Auth::user()->alamat;
     $transaksi->email = Auth::user()->email;
     $transaksi->tanggal = $tanggal;
     $transaksi->barang_id = $data->id;
     $transaksi->nama_barang = $data->nama;
     $transaksi->harga = $data->harga*$request->pesan;
     $transaksi->save();

     return redirect('dashboard/pembeli')->with('success', 'Pesanan Anda Berhasil!');     
    }
    //hapus pesanan untuk admin
    public function hapusPesanan($id){
        DB::table('transaksi')->where('id',$id)->delete();
        return redirect('/transaksi')->with('info', 'Data Berhasil Dihapus!');
    }
   

}
