<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        $p = new Pelanggan();
        $data = $p->paginate(5);
        return view('Page.Pelanggan.index',[
            'data'=>$data,
        ]);
    }

    public function tambah_data() {
        $p = new Pelanggan();
        $idmnu = $p->all()->last();
        if($idmnu == null) {
            $ip = 1;
        } else {
            $nilai = $idmnu->id_pelanggan;
            $ip = intval(value: $nilai)+1;
        }
        return view('Page.Pelanggan.tambah_data',[
            'idmnu' =>$ip,
        ]);
    }

    public function isi_data(Request $request) {
        $request->validate([
            'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);
        $data = new Pelanggan();
        if($data->create($request->all())){
            return redirect()->route('pelanggan')->with('message','Berhasil Menambahkan Data Pelanggan');
        } else {
            return back()->with('notif','Gagal Menambahkan Data!!');
        }
    }

    public function ubah_data($id) {
        $p = new Pelanggan();
        $edit = $p->find($id);
        return view('Page.Pelanggan.ubah_data',[
            'data' => $edit,
        ]);
    }

    public function mengubah_data(Request $request,$id) {
        $request->validate([
            'id_pelanggan' => 'required',
            'nama_pelanggan' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        if (Pelanggan::where('id_pelanggan', $request->id_pelanggan)->where('id_pelanggan', '!=', $id)->exists()) {
            return redirect()->back()->with(['notif' => 'Id Pelanggan sudah ada.'])->withInput();
        }
        $data = new Pelanggan();
        $pelanggan = $data->find($id);
        $pelanggan->id_pelanggan = $request->id_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();
        
        return redirect()->route('pelanggan')->with('message','Berhasil Mengupdate Data');
    }

    public function hapus_data($id) {
        $data = new Pelanggan();
        $item = $data->find($id);
        if ($item) {
            $item->delete();
            return redirect()->route('pelanggan')->with('message', 'Pelanggan berhasil dihapus.');
        }
        return redirect()->route('pelanggan')->with('notif', 'Pelanggan tidak ditemukan.');
    }
}
