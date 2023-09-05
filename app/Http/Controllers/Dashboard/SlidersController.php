<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourSliders;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class SlidersController extends Controller
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
        $datas = TourSliders::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.sliders.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = TourSliders::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.sliders.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = TourSliders::onlyTrashed()->paginate(5);
        return view('dashboard.sliders.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.sliders.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                // 'picture' => 'image|mimes:png,jpeg,jpg|max:4096',
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
                $data = new TourSliders();

                $data->title = $request->title;
                $data->slug = Str::slug($data->slug);

                $data->user_id = Auth::user()->id;

                $data->description = $request->description;

                $data->picture = '00.png';

                // if ($request->picture) {
                //     $pictureName = $data->slug . '.' . $request->picture->extension();
                //     $path = public_path('picture/tour_sliders');
                //     if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                //         unlink($path . '/' . $data->picture);
                //     endif;
                //     $data->picture = $pictureName;
                //     $request->picture->move(public_path('picture/tour_sliders'), $pictureName);
                // }

                $data->save();

                Alert::toast('Created!', 'Success');
                return redirect('dashboard/sliders/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed', 'Oops! Something is wrong...');
                return redirect()->back();
            }
        }
    }

    // show
    public function show($id)
    {
        $data = TourSliders::where('id', $id)->first();
        return view('dashboard.sliders.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = TourSliders::where('id', $id)->first();
        return view('dashboard.sliders.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                // 'picture' => 'image|mimes:png,jpeg,jpg|max:4096',
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
                $data = TourSliders::find($id);

                $data->title = $request->title;
                $data->slug = Str::slug($data->slug);

                $data->description = $request->description;

                // if ($request->picture) {
                //     $pictureName = $data->slug . '.' . $request->picture->extension();
                //     $path = public_path('picture/tour_sliders');
                //     if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                //         unlink($path . '/' . $data->picture);
                //     endif;
                //     $data->picture = $pictureName;
                //     $request->picture->move(public_path('picture/slider'), $pictureName);
                // }

                $data->update();

                Alert::toast('Updated!', 'Success');
                return redirect('dashboard/sliders/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed', 'Oops! Something is wrong...');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = TourSliders::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.sliders.trash');
    }

    // restore
    public function restore($id)
    {
        $data = TourSliders::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = TourSliders::onlyTrashed()->findOrFail($id);

        // $path = public_path('tour_sliders/' . $data->picture);

        // if (file_exists($path)) {
        //     File::delete($path);
        // }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
