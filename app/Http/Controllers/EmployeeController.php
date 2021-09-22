<?php

namespace App\Http\Controllers;
use resources\views\suratmasuk\tampildata;
use App\Employee;
use Illuminate\Http\Request;
use PDF;
use App\Helpers\Helper;
use App\Helpers\Helper1;

class EmployeeController extends Controller
{
    public function index(Request $request){

    	
    		
    		$data=Employee::paginate();
            return view('suratmasuk.suratmasuk',compact('data'));
    	}

    	
    	
    
    public function tambahsuratmasuk(){
    	return view('suratmasuk.tambahsuratmasuk');
    }
    public function insertdata1(Request $request){
      
      
       
        $tanggalsurat = $request->tanggalsurat;
        $perihal= $request->perihal;
        $sifat = $request->sifat;
        $isi =$request->isi;
        $nosurat= Helper::IDGenerator(new Employee, 'nosurat', 5, 'SM'); /** Generate id */
        $data = new Employee;
        $data->nosurat = $nosurat;
        $data->isi =$isi;
        $data->tanggalsurat = $tanggalsurat;
        $data->perihal= $perihal;
        $data->sifat= $sifat;


      	$data ->save();
        return redirect()->route('suratmasuk')->with('success',' Data Berhasil Di Tambahkan');
      }
	  
    
    public function tampilkandata($id){

    	$data = Employee::with(['data'])->find($id);
    	// dd($data);
    	return view('suratmasuk.tampildata',compact('data'));
    }
    public function updatedata(Request $request,$id){
    	$data = Employee::find($id);
    	$data->update($request->all());
    	return redirect()->route('suratmasuk')->with('success','Data Berhasil Di Update');
    }
    public function delete1($id){
    	$data = Employee::find($id);
    	$data->delete();
    	return redirect()->route('suratmasuk')->with('success','Data Berhasil Di Hapus');
    }
 public function exportpdf2($id)
    {
    //GET DATA BERDASARKAN ID
    $data = Employee::with(['data'])->find($id);
    //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
    //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
    $pdf = PDF::loadView('suratmasuk.data', compact('data'));
    return $pdf->stream();
    }

}

    