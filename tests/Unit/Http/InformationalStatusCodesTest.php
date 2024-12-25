<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Codelabmw\Statuses\Http;
use PHPUnit\Framework\TestCase;

class InformationalStatusCodesTest extends TestCase
{
    public function test_continue_status_code()
    {
        $this->assertEquals(Http::CONTINUE , 100);
    }

    public function test_switching_protocals_status_code()
    {
        $this->assertEquals(Http::SWITCHING_PROTOCALS, 101);
    }

    public function test_processing_status_code()
    {
        $this->assertEquals(Http::PROCESSING, 102);
    }

    public function test_early_hints_status_code()
    {
        $this->assertEquals(Http::EARLY_HINTS, 103);
    }
}