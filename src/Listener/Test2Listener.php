<?php

namespace App\Listener;

use App\Service\TestService;

class Test2Listener
{
    /**
     * @var \App\Service\TestService
     */
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }
}