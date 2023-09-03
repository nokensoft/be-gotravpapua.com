<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourPackages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | packages
    | index, draft, create, store, show, edit, update, destroy, trash, restore, delete
    |--------------------------------------------------------------------------
    */

    // index

    public function index(Request $request)
    {
        
        $datas = TourPackages::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.adventures.index',compact('datas')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request) {
        // 
        echo "adventure > draft";
        return view ('dashboard.adventures.index');
    }

    // create
    public function create() {
        // 
        echo "adventure > create";
        return view ('dashboard.adventures.create');
    }

    // store
    public function store(Request $request) {
        // 
        echo "adventure > store";
    }

    // show

    public function show($id)
    {
      $data = TourPackages::where('id', $id)->first();
      return view('dashboard.adventures.show', compact('data'));
    }

    // edit
    public function edit($id) {
        $data = TourPackages::where('id', $id)->first();
        return view('dashboard.adventures.edit', compact('data'));
    }

    // update
    public function update(Request $request, $id) {
        // 
        echo "adventure > update";
    }

    // destroy
    public function destroy($id)
    {
        $data = TourPackages::find($id);
        if ($data->delete()) {
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->back();
        }
    }

    // trash
    public function trash() {
        // 
        echo "adventure > trash";
        return view ('dashboard.adventures.index');
    }

    // restore
    public function restore($id) {
        // 
        echo "adventure > restore";
    }

    // delete
    public function delete($id) {
        // 
        echo "adventure > delete";
    }

}
