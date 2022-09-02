<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\Contracts\JobRepositoryContract;

class JobRepository implements JobRepositoryContract
{
    public function newJob(array $data)
    {
        try
        {
            $newJob = new Job();
            $newJob->fill($data);
            $newJob->save();

            return $newJob;
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
