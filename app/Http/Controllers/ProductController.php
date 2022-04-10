<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }
    public function productAdmin()
    {
        $product = Product::paginate(5);
        $jumlah = Product::count();
        return view('adminproduk.index', compact('product', 'jumlah'));
    }

    public function create()
    {
        return view('adminproduk.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);

        $Product = Product::create([
            'namaproduct' => $request['namaproduct'],
            'jenisproduct' => $request['jenisproduct'],
            'tanggal' => $request['tanggal'],
            'desc' => $request['desc'],
            'picture' => $pictureName,
        ]);
        return redirect('admin/produk');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('adminproduk.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Admin/img'), $pictureName);
        $Product = Product::find($id);

        $Product->namaproduct = $request->namaproduct;
        $Product->jenisproduct = $request->jenisproduct;
        $Product->tanggal = $request->tanggal;
        $Product->desc = $request->desc;
        $Product->picture = $pictureName;
        $Product->save();
        return redirect('/admin/produk');
    }
    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return redirect('/admin/produk');
    }
}
