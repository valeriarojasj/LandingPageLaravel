<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobOpening;
use App\Models\User;
use App\Models\JobUser;
class JobUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allJobs = JobOpening::all();
        $adminUsers = User::role('Admin')->get();
        foreach ($allJobs as $job){
            $jobUser = new JobUser();
            $jobUser->job_id = $job->id;
            $jobUser->user_id = $job->created_by;
            $jobUser->save();
        }
        foreach ($adminUsers as $admin){
            foreach ($allJobs as $job){
                $user = JobUser::where('user_id', '=', $admin->id)
                    ->where('job_id', '=', $job->id)->first();
                if(!$user){
                    $jobUser = new JobUser();
                    $jobUser->job_id = $job->id;
                    $jobUser->user_id = $admin->id;
                    $jobUser->save();
                }
            }
        }
    }
}
