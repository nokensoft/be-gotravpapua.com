<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourPackages;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class PackagesController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | packages
    | index | publish, draft, trash, create, store, show, edit, update, destroy, restore, delete
    |--------------------------------------------------------------------------
    */

    // index | publish

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

        return view('dashboard.packages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
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
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.packages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = TourPackages::onlyTrashed()->paginate(5);
        return view('dashboard.packages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.packages.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
            ],
            [
                'title.required' => 'This is a reaquired field',
                // 'picture.required' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new TourPackages();

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);

                $data->description = $request->description;

                $data->picture = '00.png'; // default picture
                
                $data->user_id = Auth::user()->id;

                    // $pictureName = $data->slug_tour_event . '.' . $request->picture->extension();
                    // $path = public_path('images/tour_packages');
                    // if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                    //     unlink($path . '/' . $data->picture);
                    // endif;
                    // $data->picture = $pictureName;
                    // $request->picture->move(public_path('images/tour_packages'), $pictureName);

                $data->save();
                
                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/packages/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = TourPackages::where('id', $id)->first();
        return view('dashboard.packages.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = TourPackages::where('id', $id)->first();
        return view('dashboard.packages.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
            ],
            [
                'title.required' => 'This is a reaquired field',
                // 'picture.required' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = TourPackages::find($id);

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);
                
                $data->description = $request->description;

                // if ($request->picture) {
                //     $pictureName = $data->slug_tour_event . '.' . $request->picture->extension();
                //     $path = public_path('images/tour_packages');
                //     if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                //         unlink($path . '/' . $data->picture);
                //     endif;
                //     $data->picture = $pictureName;
                //     $request->picture->move(public_path('images/tour_packages'), $pictureName);
                // }

                $data->update();

                Alert::toast('Updated!', 'Success');
                return redirect('dashboard/packages/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed', 'Oops! Something is wrong...');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = TourPackages::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.packages.trash');
    }

    // restore
    public function restore($id)
    {
        $data = TourPackages::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = TourPackages::onlyTrashed()->findOrFail($id);

        // $path = public_path('tour_packages/' . $data->picture);

        // if (file_exists($path)) {
        //     File::delete($path);
        // }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
