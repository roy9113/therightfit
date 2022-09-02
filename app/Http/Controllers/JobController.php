<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Requests\JobRequest;
use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected $jobService;
    protected $responseHelper;

    public function __construct(JobService $jobService, ResponseHelper $responseHelper)
    {
        $this->jobService = $jobService;
        $this->responseHelper = $responseHelper;
    }

    public function store(JobRequest $request)
    {
        $newJob = $this->jobService->newJob($request->all());
        return $this->responseHelper->successResponse('success', 'New post successfully created', ['newJob' => $newJob]);
    }
}
