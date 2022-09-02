<?php

namespace App\Http\Controllers;

use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function store(Request $request)
    {
        $newJob = $this->jobService->newJob($request->all());

        return response([
            'data' => [
                'success' => true,
                'message' => 'New post successfully created',
                'post' => $newJob
            ]
        ]);
    }
}
