<?php

namespace App\Repositories\Contracts;

interface JobRepositoryContract
{
    public function newJob(array $data);

    public function updateJob(array $data);
}
