<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class SkillController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $count = DB::table('tbl_skill')->where('user_id',$userId)->count();
        if($count > 0)
        {
            $data = DB::table('tbl_skill')->where('user_id',$userId)->get();
            return view('pages.Skill',['data'=>$data,'count'=>$count]);
        }
        else
        {
            return view('pages.Skill',['count'=>$count]);
        }
    }
    public function deleteSkill(Request  $request)
    {
        $id_skill = $request->id_skill;
        $delete_skill = DB::table('tbl_skill')->where('id',$id_skill)->delete();
        if($delete_skill)
        {
            $success = [
                'status' => 200,
            ];
        }
        else
        {
            $success = [
                'status' => 400,
            ];
        }
        echo json_encode($success);
    }
    public function addSkill(Request $request)
    {
        $skillname = $request->input('skillname');
        $process = $request->input('process');
        $id_skill = $request->input('id_skill');
        foreach ($skillname as $key => $value)
        {
            $data = [
                'skillname' => $skillname[$key],
                'user_id' => Auth::id(),
                'process' => $process[$key],
            ];
            if($id_skill[$key] == 0)
            {
                $insert_skill = DB::table('tbl_skill')->insert($data);
            }
            else
            {
                $insert_skill = DB::table('tbl_skill')->where('id',$id_skill[$key])->update($data);
            }
        }
        return redirect('profile-setting');
    }
}
