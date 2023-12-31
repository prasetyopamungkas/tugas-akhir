<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\minuman;
use Illuminate\Support\Facades\Storage;

class Controllerminuman extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }

    public function create()
    {
        return view('create');
    }

    public function update($id)
    {
        if($data= minuman::find($id)) {
            return view('update',['data'=>$data]);
        } else {
            return redirect('/read');
        }
    }

    public function edit(Request $request)
    {
        if($data=minuman::find($request->id)) {
            $data->nama = $request->nama;
            $data->harga = $request->harga;
            $data->pilihan = $request->pilihan;
            $data->jenis = $request->jenis;


            $data->updated_at = now();
            $data->save();

            return redirect('/read')->with('pesan','Data dengan ID : '.$request->id.' berhasil diupdate');
        } else {
            return redirect('/read')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|unique:makanan,id',
            'nama'=>'required|string|max:35',
            'harga'=>'required|min:6',
            'pilihan'=>'required|max:20',
            'jenis'=>'required|max:5',
        ]);

        $model = new minuman();


        $model->id = $request->id;
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->pilihan = $request->pilihan;
        $model->jenis = $request->jenis;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('view',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new minuman();
        $dataAll=$model->all();
        return view('read',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = minuman::find($id);

        if ($data) {
            // Delete the associated file

            $data->delete();
        } else {
            return redirect('/read')->with('pesan', 'Data id : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read')->with('pesan', 'Data id:' . $id . ' Berhasil dihapus');
    }

    public function tampilkan(Request $request)
    {
        $model = new minuman();
        $model::insert(['id'=>@$request->id,'nama'=>@$request->nama,'harga'=>@$request->harga,'pilihan'=>@request->pilihan, 'jenis'=>@request->jenis, 'created_at'=>date("Y-m-d H:i:s")]);
        
        $dataAll=$model->all();
        return view('tampil2',['data'=>$request->all(),'dataAll'=>@$dataAll]);
    }

    public function logout()
    {
        return view('logout');
    }
}