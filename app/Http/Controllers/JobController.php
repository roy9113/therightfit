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

    /**
     * @param JobService $jobService
     * @param ResponseHelper $responseHelper
     */
    public function __construct(JobService $jobService, ResponseHelper $responseHelper)
    {
        $this->jobService = $jobService;
        $this->responseHelper = $responseHelper;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $jobs = Job::all();
        return $this->responseHelper->successResponse('success', 'All jobs', ['jobs' => $jobs]);
    }

    /**
     * @param JobRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(JobRequest $request)
    {
        $newJob = $this->jobService->newJob($request->all());
        return $this->responseHelper->successResponse('success', 'New job successfully created', ['newJob' => $newJob]);
    }

    /**
     * @param UpdateJobRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateJobRequest $request)
    {
        $updateJob = $this->jobService->updateJob($request->all());
        return $this->responseHelper->successResponse(true, 'Job successfully updated', ['updateJob' => $updateJob]);
    }
}
