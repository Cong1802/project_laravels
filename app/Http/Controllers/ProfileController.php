<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class ProfileController extends Controller
{
    public function activity()
    {
        $userId = Auth::id();
        $data = DB::table('tbl_profile')->where('user_id',$userId)->first();
        $skill = DB::table('tbl_skill')->where('user_id',$userId)->get();
        $education = DB::table('tbl_education')->where('user_id',$userId)->get();
        if($data)
        {
            if($skill)
            {
                if($education)
                {
                    return view('pages.Profile.activity',["data" => $data,"skill" => $skill,"education" => $education]);
                }
                else
                {
                    return view('pages.Profile.activity',["data" => $data,"skill" => $skill]);
                }
            }
            else
            {
                return view('pages.Profile.activity',["data" => $data]);
            }
        }
        else
        {
            return view('pages.Profile.activity');
        }
    }
    public function timeline()
    {
        $userId = Auth::id();
        $data = DB::table('tbl_profile')->where('user_id',$userId)->first();
        $skill = DB::table('tbl_skill')->where('user_id',$userId)->get();
        $education = DB::table('tbl_education')->where('user_id',$userId)->get();
        if($data)
        {
            if($data)
            {
                if($skill)
                {
                    if($education)
                    {
                        return view('pages.Profile.timeline',["data" => $data,"skill" => $skill,"education" => $education]);
                    }
                    else
                    {
                        return view('pages.Profile.timeline',["data" => $data,"skill" => $skill]);
                    }
                }
                else
                {
                    return view('pages.Profile.timeline',["data" => $data]);
                }
            }
            else
            {
                return view('pages.Profile.timeline',["data" => $data]);
            }
        }
        else
        {
        return view('pages.Profile.timeline');
        }
    }
    public function setting()
    {
        $userId = Auth::id();
        $data = DB::table('tbl_profile')->where('user_id',$userId)->first();
        $skill = DB::table('tbl_skill')->where('user_id',$userId)->get();
        $education = DB::table('tbl_education')->where('user_id',$userId)->get();
        if($data)
        {
            if($skill)
            {
                if($education)
                {
                    return view('pages.Profile.setting',["data" => $data,"skill" => $skill,"education" => $education]);
                }
                else
                {
                    return view('pages.Profile.setting',["data" => $data,"skill" => $skill]);
                }
            }
            else
            {
                return view('pages.Profile.setting',["data" => $data]);
            }
        }
        else
        {
        return view('pages.Profile.setting');
        }
    }
    public function UpdateAVT(Request $request)
    {
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $destinationPath = 'public/upload';
            $file->move($destinationPath,time().$file->getClientOriginalName());
            $data['avatar'] = time().$file->getClientOriginalName();
            $data_update_profile = DB::table('tbl_profile')->where('user_id',Auth::id())->update($data);
        }

    }
    public function EditProfile(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'birthday' => $request->birthday,
            'information' => $request->information,
            'job' => $request->job,
            'user_id' => Auth::id(),
            'avatar' => '',
        ];
        $count = DB::table('tbl_profile')->where('user_id', Auth::id())->count();
        if($count == 0)
        {
            $insert_profile = DB::table('tbl_profile')->insert($data);
        }
        else
        {
            $update_profile = DB::table('tbl_profile')->where('user_id',Auth::id())->update($data);
        }
        return redirect('admin/profile/setting');
    }
}
