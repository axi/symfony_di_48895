<?php

namespace App\Listener;

use App\Service\TestService;

class TestListener
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