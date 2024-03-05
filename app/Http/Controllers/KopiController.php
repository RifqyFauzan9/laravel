<?php

namespace App\Http\Controllers;

use App\Models\Kopi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KopiController extends Controller
{
    // menampilkan data dari database
    public function home()
    {
        $kopi = Kopi::all();
        return view('home', compact(['kopi']), ['title' => 'Ngopi Bang!', 'no' => 1]);
    }

    public function input()
    {
        return view('input', ['title' => 'Order apa?']);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $kopi = Kopi::create([
            'nama' => $request->input('nama'),
            'kopi' => $request->input('kopi'),
            'size' => $request->input('size'),
            'payment' => $request->input('payment')
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        $kopi = Kopi::find($id);
        $kopi->delete();
        return redirect('/');
    }

    public function editView($id)
    {
        $kopi = Kopi::find($id);
        return view('update.edit', compact(['kopi']), ['title' => 'Edit Pesanan']);
    }

    public function update($id, Request $request)
    {
        $kopi = Kopi::find($id);
        $kopi->update($request->all());
        return redirect('/');
    }

    public function deleteAllData()
    {
        Kopi::truncate();
        return redirect('/');
    }
}
