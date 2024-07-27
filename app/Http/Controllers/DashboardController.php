<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
   //admin
   public function tampilan(){
    return view('dashboard');
   }

   public function adminprofil(){
      $user = auth()->id();
      $login = User::where('id',$user)->get();

      return view('profil')->with('data',$login);
   }
   public function barang(){
      return view('barang');
   }
   public function profilUpdate(Request $request){
      $request->user()->update(
         $request->all()
      );
      return redirect('/dashboard')->with('toast_success', 'Profil Berhasil diubah!');
   }




   //tampilan customer
   public function pembeli(){
      return view('pembeli/dashboard');
   }
   public function profil(){
      $user = auth()->id();
      $login = User::where('id',$user)->get();
      return view('pembeli/profil')->with('data',$login);
   }
   public function beranda()
    {
        $wali = barang::orderBy('id','asc')->get();
        return view('pembeli/dashboard')->with('data',$wali);
    }
   public function pencarian(Request $request){
         if($request->has('search')){
            $data = barang::where('nama','LIKE','%'.$request->search.'%')->get(); //like mengambil semua data barang yang ada didalam % yaitu yang ditulis di form pencarian
         }else{                                                                    //% artinya akan mencari semua data dari tabel barang yang mengandung kata yang dituliskan di kolom pencarian
            $data=barang::all();
         }
         return view('pembeli/dashboard',['data'=>$data]);
   }
      public function riwayat()
      {
          $data = transaksi::with('barang')->get();
          return view('pembeli/riwayat', ['data'=>$data]);
      }



      
      // public function beranda()
      // {
      //     $wali = barang::with('kategori')->get();
      //     return view('pembeli/dashboard', ['data'=>$wali]);
      // }
}


