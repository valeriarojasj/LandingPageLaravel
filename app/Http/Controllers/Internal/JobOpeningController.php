<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobUser;
use App\Models\User;
class JobOpeningController extends Controller {
    public function createPermission(Request $request){
        $admins = User::role('Admin')->get()->pluck('id')->toArray();
        $users = array_merge($request->get('users'), $admins);
        $job_id = $request->get('job_opening_id');
        if($users && $job_id){
            JobUser::where('job_id', '=', $job_id)
                ->whereNotIn('user_id', $users)->delete();
            foreach($users as $user_id){
                $existJobUser = JobUser::where('job_id', '=', $job_id)
                    ->where('user_id', '=', $user_id)->get();
                if($existJobUser->isEmpty()){
                    $jobUser = new JobUser();
                    $jobUser->job_id = $job_id;
                    $jobUser->user_id = $user_id;
                    $jobUser->save();
                }
            }
        }
        return redirect('/internal/users');
    }
}
