<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use Illuminate\Support\Facades\Storage;

class Controllerkaryawan extends Controller
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
        if($data= karyawan::find($id)) {
            return view('update',['data'=>$data]);
        } else {
            return redirect('/read');
        }
    }

    public function edit(Request $request)
    {
        if($data=karyawan::find($request->id)) {
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->telepon = $request->telepon;
            $data->email = $request->email;

            // Handle file upload
            if ($request->hasFile('gambar')) {
                // Delete existing file (if any)
                if ($data->gambar) {
                    Storage::delete($data->gambar);
                }

                // Store the new file
                $gambar = $request->file('gambar');
                $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->storeAs('public/gambar', $gambarName);
                $data->gambar = $gambarName;
            }

            $data->updated_at = now();
            $data->save();

            return redirect('/read')->with('pesan','Data dengan id : '.$request->nim.' berhasil diupdate');
        } else {
            return redirect('/read')->with('pesan','Data tidak ditemukan/gagal diupdate');
        }
        
    }

    public function save(Request $request)
    {
        $validateData = $request->validate([
            'id'=>'required|regex:/^G.\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama'=>'required|string|max:35',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat'=>'required|min:6',
            'telepon'=>'required|string|max:12',
            'email'=>'required|email'
        ]);

        $model = new karyawan();

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/gambar', $gambarName);
            $model->gambar = $gambarName;
        }

        $model->id = $request->id;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->telepon = $request->telepon;
        $model->email = $request->email;
        $model->created_at = date("Y-m-d H:i:s");

        $model->save();

        return view('view',['data'=>$request->all()]);
    }

    public function read()
    {
        $model = new karyawan();
        $dataAll=$model->all();
        return view('read',['dataAll'=>$dataAll]);
    }

    public function delete($id)
    {
        $data = karyawan::find($id);

        if ($data) {
            // Delete the associated file
            if ($data->gambar) {
                Storage::delete($data->gambar);
            }

            $data->delete();
        } else {
            return redirect('/read')->with('pesan', 'Data id : ' . $id . ' tidak ditemukan');
        }

        return redirect('/read')->with('pesan', 'Data id:' . $id . ' Berhasil dihapus');
    }

    public function tampilkan(Request $request)
    {
        $model = new karyawan();
        $model::insert(['id'=>@$request->id,'nama'=>@$request->nama,'alamat'=>@$request->alamat,'created_at'=>date("Y-m-d H:i:s")]);
        
        $dataAll=$model->all();
        return view('tampil2',['data'=>$request->all(),'dataAll'=>@$dataAll]);
    }

    public function logout()
    {
        return view('logout');
    }
}