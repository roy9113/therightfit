<?php

namespace App\Services;

use App\Repositories\Contracts\JobRepositoryContract;

class JobService
{
    protected $jobRepositoryContract;

    public function __construct(JobRepositoryContract $jobRepositoryContract)
    {
        $this->jobRepositoryContract = $jobRepositoryContract;
    }

    public function newJob(array $data)
    {
        $data = [
            'user_id' => $data['user_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'location' => $data['location'],
            'rate' => $data['rate']
        ];

        $newJob = $this->jobRepositoryContract->newJob($data);

        return $newJob;
    }

    public function updateJob(array $data)
    {
        $data = [
            'id' => $data['id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'location' => $data['location'],
            'rate' => $data['rate']
        ];

        $updateJob = $this->jobRepositoryContract->updateJob($data);

        return $updateJob;
    }
}
