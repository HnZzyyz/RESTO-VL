<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $p = new Menu();
        $data = $p->paginate(5);
        return view('Page.Menu.index',[
            'data'=>$data,
        ]);
    }

    public function tambah_data() {
        $p = new Menu();
        $idmnu = $p->all()->last();
        if($idmnu == null) {
            $ip = 1;
        } else {
            $nilai = $idmnu->id_menu;
            $ip = intval($nilai)+1;
        }
        return view('Page.Menu.tambah_data',[
            'idmnu' =>$ip,
        ]);
    }

    public function isi_data(Request $request) {
        $request->validate([
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
        ]);

        $data = new Menu();
        if($data->create($request->all())){
            return redirect()->route('menu')->with('message','Berhasil Menambahkan Data Menu Makanan');
        } else {
            return back()->with('notif','Gagal Menambahkan Data!!');
        }
    }

    public function ubah_data($id) {
        $p = new Menu();
        $edit = $p->find($id);
        return view('Page.Menu.ubah_data',[
            'data' => $edit,
        ]);
    }

    public function mengubah_data(Request $request,$id) {
        $request->validate([
            'id_menu' => 'required',
            'nama_menu' => 'required',
            'harga' => 'required',
        ]);

        if (Menu::where('id_menu', $request->id_menu)->where('id_menu', '!=', $id)->exists()) {
            return redirect()->back()->with(['notif' => 'ID barang sudah ada.'])->withInput();
        }
        $data = new Menu();
        $menu = $data->find($id);
        $menu->id_menu = $request->id_menu;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->save();
        
        return redirect()->route('menu')->with('message','Berhasil Mengupdate Data');
    }

    public function hapus_data($id) {
        $data = new Menu();
        $item = $data->find($id);
        if ($item) {
            $item->delete();
            return redirect()->route('menu')->with('message', 'Menu berhasil dihapus.');
        }
        return redirect()->route('menu')->with('notif', 'Menu tidak ditemukan.');
    }
}
