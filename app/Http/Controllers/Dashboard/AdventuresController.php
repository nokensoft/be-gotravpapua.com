<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourAdventures;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class AdventuresController extends Controller
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
        $datas = TourAdventures::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.adventures.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = TourAdventures::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.adventures.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        // 
        $datas = TourAdventures::onlyTrashed()->paginate(5);
        return view('dashboard.adventures.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.adventures.create');
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
                $data = new TourAdventures();

                $data->title = $request->title;
                $data->slug_adventures = Str::slug($data->slug_adventures);

                $data->user_id = Auth::user()->id;

                $data->description = $request->description;

                $data->picture = '00.png';

                // if ($request->picture) {
                //     $pictureName = $data->slug . '.' . $request->picture->extension();
                //     $path = public_path('picture/tour_adventures');
                //     if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                //         unlink($path . '/' . $data->picture);
                //     endif;
                //     $data->picture = $pictureName;
                //     $request->picture->move(public_path('picture/tour_adventures'), $pictureName);
                // }

                $data->save();

                Alert::toast('Created!', 'Success');
                return redirect('dashboard/adventures/' . $data->id . '/show');

                Alert::toast('Created!', 'Success');
                return redirect()->route('dashboard.adventures');

            } catch (\Throwable $th) {
                Alert::toast('Failed', 'Oops! Something is wrong...');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = TourAdventures::where('id', $id)->first();
        return view('dashboard.adventures.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = TourAdventures::where('id', $id)->first();
        return view('dashboard.adventures.edit', compact('data'));
    }

    // update
    public function update(Request $request, $id)
    {
        // 
        echo "adventure > update";
    }

    // destroy
    public function destroy($id)
    {
        $data = TourAdventures::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return redirect()->back();
    }

    // restore    
    public function restore($id)
    {
        $data = TourAdventures::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = TourAdventures::onlyTrashed()->findOrFail($id);
        
        // $path = public_path('tour_adventures/' . $data->picture);

        // if (file_exists($path)) {
        //     File::delete($path);
        // }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return to_route('dashboard.adventures');
    }
}
