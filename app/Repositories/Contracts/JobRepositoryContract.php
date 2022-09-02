<?php

namespace App\Repositories\Contracts;

interface JobRepositoryContract
{
    /**
     * @param array $data
     * @return mixed
     */
    public function newJob(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function updateJob(array $data);
}
