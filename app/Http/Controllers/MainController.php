<?php

namespace App\Http\Controllers;
use App\Models\Main;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{
    public function index()
    {
        $mains = Main::latest()->paginate();

        return view('mains.home', compact('mains'));
    }

    public function create()
    {
         return view('mains.create');
    }

    public function store( Request $request)
    {
        $this->validate($request, [
            'nama_barang'    => 'required',
            'nomor_barang'   => 'required',
            'jenis_barang'   => 'required',
            'qty'            => 'required',
            'tanggal_input'  => 'required',
            'noted'         => 'required',
            'nama_input'   => 'required',
        ]);

        Main::create([
            'nama_barang'     => $request->nama_barang,
            'nomor_barang'     => $request->nomor_barang,
            'jenis_barang'     => $request->jenis_barang,
            'qty'            => $request->qty,
            'tanggal_input'     => $request->tanggal_input,
            'noted'         => $request->noted,
            'nama_input'     => $request->nama_input,
        ]);

        return redirect()->route('mains.create');
    }
     public function edit(Main $main)
    {
        return view('mains.edit', compact('main'));
    }

    public function update(Request $request, Main $main)
    {
         $this->validate($request, [
            'nama_barang'    => 'required',
            'nomor_barang'   => 'required',
            'jenis_barang'   => 'required',
            'qty'            => 'required',
            'tanggal_input'  => 'required',
            'noted'         => 'required',
            'nama_input'   => 'required',
        ]);

        $main->update([
            'nama_barang'     => $request->nama_barang,
            'nomor_barang'     => $request->nomor_barang,
            'jenis_barang'     => $request->jenis_barang,
            'qty'            => $request->qty,
            'tanggal_input'     => $request->tanggal_input,
            'noted'         => $request->noted,
            'nama_input'     => $request->nama_input,
        ]);
                return redirect()->route('mains.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    public function destroy(Main $main)
    {
        $main->delete();

        return redirect()->route('mains.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
