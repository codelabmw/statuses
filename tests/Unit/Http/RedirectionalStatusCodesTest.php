<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Codelabmw\Statuses\Http;
use PHPUnit\Framework\TestCase;

class RedirectionalStatusCodesTest extends TestCase
{
    public function test_multiple_choices_status_code()
    {
        $this->assertEquals(Http::MULTIPLE_CHOICES, 300);
    }

    public function test_moved_permanently_status_code()
    {
        $this->assertEquals(Http::MOVED_PERMANENTLY, 301);
    }

    public function test_found_status_code()
    {
        $this->assertEquals(Http::FOUND, 302);
    }

    public function test_see_other_status_code()
    {
        $this->assertEquals(Http::SEE_OTHER, 303);
    }

    public function test_not_modified_status_code()
    {
        $this->assertEquals(Http::NOT_MODIFIED, 304);
    }

    public function test_use_proxy_status_code()
    {
        $this->assertEquals(Http::USE_PROXY, 305);
    }

    public function test_unused_status_code()
    {
        $this->assertEquals(Http::UNUSED, 306);
    }

    public function test_temporary_redirect_status_code()
    {
        $this->assertEquals(Http::TEMPORARY_REDIRECT, 307);
    }

    public function test_permanent_redirect_status_code()
    {
        $this->assertEquals(Http::PERMANENT_REDIRECT, 308);
    }
}