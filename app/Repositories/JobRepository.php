<?php

namespace App\Repositories;

use App\Models\Job;
use App\Repositories\Contracts\JobRepositoryContract;

class JobRepository implements JobRepositoryContract
{
    /**
     * @param array $data
     * @return Job|mixed|string
     */
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

    /**
     * @param array $data
     * @return mixed|string
     */
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
