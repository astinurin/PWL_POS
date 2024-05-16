<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // dump($request->file('file'));
        // return "Pemrosesan file upload di sini";

        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            // mengambil nama file asal dengan perintah $request->berkas>getClientOriginalName()
            // $namaFile = $request->berkas->getClientOriginalName();
            $extFile=$request->berkas->getClientOriginalName();
            $namaFile = 'web-' .time(). ".".$extFile;
            $path = $request->berkas->storeAs('uploads', $namaFile);
            echo "proses upload berhasil, file berada di : $path";
            // echo $request->berkas->getClientOriginalName()."lolos validasi";
    }

}
