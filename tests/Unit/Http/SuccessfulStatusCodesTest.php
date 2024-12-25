<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Codelabmw\Statuses\Http;
use PHPUnit\Framework\TestCase;

class SuccessfulStatusCodesTest extends TestCase
{
    public function test_ok_status_code()
    {
        $this->assertEquals(Http::OK, 200);
    }

    public function test_created_status_code()
    {
        $this->assertEquals(Http::CREATED, 201);
    }

    public function test_accepted_status_code()
    {
        $this->assertEquals(Http::ACCEPTED, 202);
    }

    public function test_non_authoritative_information_status_code()
    {
        $this->assertEquals(Http::NON_AUTHORITATIVE_INFORMATION, 203);
    }

    public function test_no_content_status_code()
    {
        $this->assertEquals(Http::NO_CONTENT, 204);
    }

    public function test_reset_content_status_code()
    {
        $this->assertEquals(Http::RESET_CONTENT, 205);
    }

    public function test_partial_content_status_code()
    {
        $this->assertEquals(Http::PARTIAL_CONTENT, 206);
    }

    public function test_multi_status_status_code()
    {
        $this->assertEquals(Http::MULTI_STATUS, 207);
    }

    public function test_already_reported_status_code()
    {
        $this->assertEquals(Http::ALREADY_REPORTED, 208);
    }

    public function test_im_used_status_code()
    {
        $this->assertEquals(Http::IM_USED, 226);
    }
}