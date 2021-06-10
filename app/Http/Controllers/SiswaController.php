<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(){
      
        $siswa = Siswa::get();

        return response()->json([

            'status'  => true,
            'message' => 'Succses Fetch Siswa',
            'results' => $siswa,
            
        ],200);
        
    }

    public function create(Request $request){
        $this->validate($request,[
            'name'          => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required'
        ]);
        
        try{

            $siswa = new Siswa;
            $siswa->name         = $request->name;
            $siswa->alamat        = $request->alamat;
            $siswa->jenis_kelamin = $request->jenis_kelamin;

            $siswa->save();

        }catch(\Exception $e){

            return response()->json([
                'status'  => false,
                'message' => 'failed Add Data'
            ],500);


        }
      
        return response()->json([
            'status'  => true,
            'message' => 'berhasil Data Ditambah'
        ],200);
        

    }

    public function edit($id){


    }

    public function update(Request $request,$id){


    }

    public function delete($id){


    }

}
