<?php
namespace App\Services;

use App\Models\Jobs;

class Job
{
public function GetAllJobs() {
    return Jobs::all();//collection
}
}
