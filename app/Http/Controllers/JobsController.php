<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Services\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /*protected $jobService;

    public function __construct(Job $jobService)
    {
        $this->jobService = $jobService;
    }*/
    protected function AllJops()
    {
        //return $this->jobService->GetAllJobs();

        return Jobs::all();
    }
    protected function GetJob($id)
    {
        return Jobs::where('id',$id)->get();
    }
    protected function Sort()
    {
        return Jobs::where('id','>',0 )->orderby('Salary','asc')->get();
    }
}
