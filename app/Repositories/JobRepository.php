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

    public function updateJob(array $data)
    {
        try
        {
            $updateJob = Job::find($data['id']);
            $updateJob->fill($data);
            $updateJob->save();

            return $updateJob;
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }
}
