<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    // INDEX
    public function index()
    {

        $data = Settings::whereId(1)->first();
        return view('dashboard.settings.index', compact('data'));
    }

    // EDIT
    public function edit()
    {

        $data = Settings::whereId(1)->first();
        return view('dashboard.settings.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                // 'judul_situs' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random                             = Str::random(15);
                $Settings                         = Settings::find($id);

                if(isset($request->inputGroup) && $request->inputGroup == 'informasi-situs'){

                    // deskripsi situs
                    $Settings->judul_situs        = $request->judul_situs;
                    $Settings->deskripsi_situs    = $request->deskripsi_situs;
                    $Settings->copyright          = $request->copyright;

                } elseif (isset($request->inputGroup) && $request->inputGroup == 'kontak'){

                    // kontak
                    $Settings->alamat_email       = $request->alamat_email;
                    $Settings->nomor_telepon      = $request->nomor_telepon;
                    $Settings->alamat_kantor      = $request->alamat_kantor;
                    $Settings->alamat_google_map  = $request->alamat_google_map;

                } elseif (isset($request->inputGroup) && $request->inputGroup == 'logo'){

                    // logo 

                    if(!empty($request->logo)) {

                        $Settings->logo = $request->logo;

                        $logoName = 'logo' . '.' . $request->logo->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo) && file_exists($path . '/' . $request->logo)) :
                            unlink($path . '/' . $request->logo);
                        endif;
                        $Settings->logo = $logoName;
                        $request->logo->move(public_path('gambar/Settings/'), $logoName);

                    }

                    if(!empty($request->logo_loader)) {

                        $Settings->logo_loader = $request->logo_loader;

                        $logo_loader_name = 'logo-loader' . '.' . $request->logo_loader->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo_loader) && file_exists($path . '/' . $request->logo_loader)) :
                            unlink($path . '/' . $request->logo_loader);
                        endif;
                        $Settings->logo_loader = $logo_loader_name;
                        $request->logo_loader->move(public_path('gambar/Settings/'), $logo_loader_name);

                    }   
                    
                    if(!empty($request->favicon)) {

                        $Settings->favicon = $request->favicon;

                        $favicon_name = 'favicon' . '.' . $request->favicon->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->favicon) && file_exists($path . '/' . $request->favicon)) :
                            unlink($path . '/' . $request->favicon);
                        endif;
                        $Settings->favicon = $favicon_name;
                        $request->favicon->move(public_path('gambar/Settings/'), $favicon_name);

                    }   

                }  elseif (isset($request->inputGroup) && $request->inputGroup == 'media-sosial'){

                    // media sosial
                    $Settings->instagram          = $request->instagram;
                    $Settings->facebook           = $request->facebook;
                    $Settings->twitter            = $request->twitter;
                    $Settings->tiktok             = $request->tiktok;
                    $Settings->linkedin           = $request->linkedin;
                    $Settings->youtube            = $request->youtube;

               } elseif (isset($request->inputGroup) && $request->inputGroup == 'logo-dasbor'){

                    // logo dasbor 

                    if(!empty($request->logo_dasbor_lg_dark)) {

                        $Settings->logo_dasbor_lg_dark = $request->logo_dasbor_lg_dark;

                        $logo_dasbor_lg_dark_name = 'logo_dasbor_lg_dark' . '.' . $request->logo_dasbor_lg_dark->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo_dasbor_lg_dark) && file_exists($path . '/' . $request->logo_dasbor_lg_dark)) :
                            unlink($path . '/' . $request->logo_dasbor_lg_dark);
                        endif;
                        $Settings->logo_dasbor_lg_dark = $logo_dasbor_lg_dark_name;
                        $request->logo_dasbor_lg_dark->move(public_path('gambar/Settings/'), $logo_dasbor_lg_dark_name);

                    }

                    if(!empty($request->logo_dasbor_sm_dark)) {

                        $Settings->logo_dasbor_sm_dark = $request->logo_dasbor_sm_dark;

                        $logo_dasbor_sm_dark_name = 'logo_dasbor_sm_dark' . '.' . $request->logo_dasbor_sm_dark->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo_dasbor_sm_dark) && file_exists($path . '/' . $request->logo_dasbor_sm_dark)) :
                            unlink($path . '/' . $request->logo_dasbor_sm_dark);
                        endif;
                        $Settings->logo_dasbor_sm_dark = $logo_dasbor_sm_dark_name;
                        $request->logo_dasbor_sm_dark->move(public_path('gambar/Settings/'), $logo_dasbor_sm_dark_name);

                    }

                    if(!empty($request->logo_dasbor_lg_light)) {

                        $Settings->logo_dasbor_lg_light = $request->logo_dasbor_lg_light;

                        $logo_dasbor_lg_light_name = 'logo_dasbor_lg_light' . '.' . $request->logo_dasbor_lg_light->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo_dasbor_lg_light) && file_exists($path . '/' . $request->logo_dasbor_lg_light)) :
                            unlink($path . '/' . $request->logo_dasbor_lg_light);
                        endif;
                        $Settings->logo_dasbor_lg_light = $logo_dasbor_lg_light_name;
                        $request->logo_dasbor_lg_light->move(public_path('gambar/Settings/'), $logo_dasbor_lg_light_name);

                    }

                    if(!empty($request->logo_dasbor_sm_light)) {

                        $Settings->logo_dasbor_sm_light = $request->logo_dasbor_sm_light;

                        $logo_dasbor_sm_light_name = 'logo_dasbor_sm_light' . '.' . $request->logo_dasbor_sm_light->extension();
                        $path = public_path('gambar/Settings/');
                        if (!empty($request->logo_dasbor_sm_light) && file_exists($path . '/' . $request->logo_dasbor_sm_light)) :
                            unlink($path . '/' . $request->logo_dasbor_sm_light);
                        endif;
                        $Settings->logo_dasbor_sm_light = $logo_dasbor_sm_light_name;
                        $request->logo_dasbor_sm_light->move(public_path('gambar/Settings/'), $logo_dasbor_sm_light_name);

                    }

           } 

                $Settings->update();

                Alert::toast('Settings Berhasil diperbarui!', 'success');

                if(!empty($request->inputGroup)) {
                    return redirect('dasbor/Settings/' . $request->inputGroup);
                } else {
                    return redirect()->route('dasbor.Settings');
                }


            } catch (\Throwable $th) {

                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();

            }
        }
    }

}
