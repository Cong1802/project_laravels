<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
class EducationController extends Controller
{
    public function deleteBoxEducation(Request  $request)
    {
        $id_education = $request->id_education;
        $delete_education = DB::table('tbl_education')->where('id',$id_education)->delete();
        if($delete_education)
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
    public function postEducation(Request $request)
    {
        $desc = $request->input('desc');
        $title = $request->input('title');
        $time = $request->input('time');
        $type_education = $request->input('type_education');
        $education_id = $request->input('education_id');

        foreach ($desc as $key => $value)
        {
            $data = [
                'content' => $desc[$key],
                'title' => $title[$key],
                'time' => $time[$key],
                'type_education' => $type_education[$key],
                'user_id' => Auth::id(),
            ];
            if($education_id[$key] == 0)
            {
                $insert_education = DB::table('tbl_education')->insert($data);
            }
            else
            {
                $insert_education = DB::table('tbl_education')->where('id',$education_id[$key])->update($data);
            }
        }
        return redirect('pages.profile');
    }
}
