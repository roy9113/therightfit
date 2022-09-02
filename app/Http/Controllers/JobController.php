<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\JobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Services\JobService;

class JobController extends Controller
{
    protected $jobService;
    protected $responseHelper;

    public function __construct(JobService $jobService, ResponseHelper $responseHelper)
    {
        $this->jobService = $jobService;
        $this->responseHelper = $responseHelper;
    }

    public function index()
    {
        $jobs = Job::all();
        return $this->responseHelper->successResponse('success', 'All jobs', ['jobs' => $jobs]);
    }

    public function store(JobRequest $request)
    {
        $newJob = $this->jobService->newJob($request->all());
        return $this->responseHelper->successResponse('success', 'New job successfully created', ['newJob' => $newJob]);
    }

    public function update(UpdateJobRequest $request)
    {
        $updateJob = $this->jobService->updateJob($request->all());
        return $this->responseHelper->successResponse(true, 'Job successfully updated', ['updateJob' => $updateJob]);
    }
}
