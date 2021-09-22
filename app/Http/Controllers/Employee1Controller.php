<?php

namespace App\Http\Controllers;

use App\Employee1;
use Illuminate\Http\Request;
use PDF;
use App\Helpers\Helper;
use App\Helpers1\Helper1;

class Employee1Controller extends Controller
{
    public function index(Request $request){

    		$data=Employee1::paginate();
        	return view('suratkeluar.suratkeluar',compact('data'));
    	}
    public function tambahsuratkeluar(){
    	return view('suratkeluar.tambahsuratkeluar');
    }
     public function insertdata(Request $request){
      
      
       
        $tanggalsurat = $request->tanggalsurat;
        $perihal= $request->perihal;
      
        $sifat = $request->sifat;
        $isi =$request->isi;
        $nosurat= Helper1::IDGenerator(new Employee1, 'nosurat', 5, 'SK');
        $nosurat1= Helper::IDGenerator(new Employee1, 'nosuratmasuk', 5, 'SM'); /** Generate id */
        $data = new Employee1;
        $data->nosuratmasuk = $nosurat1;
        $data->nosurat = $nosurat;
       $data->isi =$isi;
        $data->tanggalsurat = $tanggalsurat;
        $data->perihal= $perihal;
       
        $data->sifat= $sifat;
       
      	$data ->save();
        return redirect()->route('suratkeluar')->with('success',' Data Berhasil Di Tambahkan');
      }
	  
    
    public function tampilkandata1($id){

    $data = Employee1::with(['data'])->find($id);
    	// dd($data);
    	return view('suratkeluar.tampildata1',compact('data'));
    }
    public function updatedata1(Request $request,$id){
    	$data = Employee1::find($id);
    	$data->update($request->all());
    	return redirect()->route('suratkeluar')->with('success','Data Berhasil Di Update');
    }
	public function delete($id){
        $data = Employee1::find($id);
        $data->delete();
        return redirect()->route('suratkeluar')->with('success',' Data Berhasil Di Hapus');
    }
    public function exportpdf12($id)
    {
    //GET DATA BERDASARKAN ID
    $data = Employee1::with(['data'])->find($id);
    //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    $pdf = PDF::loadView('suratkeluar.data1', compact('data'));
    return $pdf->stream();
    }
}
