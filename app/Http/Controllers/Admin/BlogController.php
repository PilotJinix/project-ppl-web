<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Blog;
use Image;

class BlogController extends Controller
{
    public function index(Request $request){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = "artikel";

        $artikel = DB::table('blog')->latest()->paginate(20);

        return view('admin.listartikel', compact('pages','artikel'));
    }

    public function newArtikel(Request $request){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = "new-artikel";

        return view('admin.newartikel', compact('pages'));
    }

    public function savedNew(Request $request){
        $request->validate([
            'judul' => 'required|string',
            'gambar_artikel' => 'required|file|image|mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required|string'
        ]);

        $file = $request->file('gambar_artikel');

        $file_name = time()."_".$file->getClientOriginalName();
        $tujuan_upload = "assets/images/blog/";

        $img = Image::make($file->getRealPath());

        Blog::create([
            'judul' => $request->judul,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);

        /** Change resoluution image and save to path **/
        $img->resize(600,400)->save($tujuan_upload.$file_name);

        return redirect()->route('admin.artikel')->with('saved','Artikel baru berhasil ditambahkan!');
    }

    public function editArtikel(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }
        $pages = "edit-artikel";

        $artikel = DB::table('blog')->where('id',$id)->first();

        return view('admin.editartikel', compact('pages','artikel'));
    }

    public function saveEdit(Request $request, $id){
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        DB::table('blog')->where('id',$id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.artikel')->with('changed','Artikel berhasil diperbaharui!');
    }

    public function deleteArtikel(Request $request, $id){
        $session = $request->session()->get('admin');
        if ($session == null) {
            return redirect()->route("admin.login");
        }

        DB::table('blog')->where('id',$id)->delete();

        return redirect()->route('admin.artikel')->with('deleted','Artikel barhasil dihapus!');
    }
}
