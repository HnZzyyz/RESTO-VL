<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index() {
        $p = new Meja();
        $data = $p->paginate(5);
        return view('Page.Meja.index',[
            'data'=>$data,
        ]);
    }

    public function tambah_data() {
        $p = new Meja();
        $idmnu = $p->all()->last();
        if($idmnu == null) {
            $ip = 1;
        } else {
            $nilai = $idmnu->no_meja;
            $ip = intval(value: $nilai)+1;
        }
        return view('Page.Meja.tambah_data',[
            'idmnu' =>$ip,
        ]);
    }

    public function isi_data(Request $request) {
        $request->validate([
            'no_meja' => 'required',
            'status' => 'required',
        ]);

        $data = new Meja();
        if($data->create($request->all())){
            return redirect()->route('meja')->with('message','Berhasil Menambahkan Data Meja');
        } else {
            return back()->with('notif','Gagal Menambahkan Data!!');
        }
    }

    public function ubah_data($id) {
        $p = new Meja();
        $edit = $p->find($id);
        return view('Page.Meja.ubah_data',[
            'data' => $edit,
        ]);
    }

    public function mengubah_data(Request $request,$id) {
        $request->validate([
            'no_meja' => 'required',
            'status' => 'required',
        ]);

        if (Meja::where('no_meja', $request->no_meja)->where('no_meja', '!=', $id)->exists()) {
            return redirect()->back()->with(['notif' => 'No Meja sudah ada.'])->withInput();
        }
        $data = new Meja();
        $menu = $data->find($id);
        $menu->no_meja = $request->no_meja;
        $menu->status = $request->status;
        $menu->save();
        
        return redirect()->route('meja')->with('message','Berhasil Mengupdate Data');
    }

    public function hapus_data($id) {
        $data = new Meja();
        $item = $data->find($id);
        if ($item) {
            $item->delete();
            return redirect()->route('meja')->with('message', 'Meja berhasil dihapus.');
        }
        return redirect()->route('meja')->with('notif', 'Meja tidak ditemukan.');
    }
}
