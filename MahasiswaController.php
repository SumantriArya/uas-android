<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 class MahasiswaController extends Controller
   {
     public function dataMahasiswa(){
            $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
            $mhs2 = 'Inaya'; $asal2 = 'Depok';
            return view('data_mahasiswa',
              compact('mhs1','mhs2','asal1','asal2')
            );
    }
}
?>