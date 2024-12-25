<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Codelabmw\Statuses\Http;
use PHPUnit\Framework\TestCase;

class ServerErrorStatusCodesTest extends TestCase
{
    public function test_internal_server_error_status_code()
    {
        $this->assertEquals(Http::INTERNAL_SERVER_ERROR, 500);
    }

    public function test_not_implemented_status_code()
    {
        $this->assertEquals(Http::NOT_IMPLEMENTED, 501);
    }

    public function test_bad_gateway_status_code()
    {
        $this->assertEquals(Http::BAD_GATEWAY, 502);
    }

    public function test_service_unavailable_status_code()
    {
        $this->assertEquals(Http::SERVICE_UNAVAILABLE, 503);
    }

    public function test_gateway_timeout_status_code()
    {
        $this->assertEquals(Http::GATEWAY_TIMEOUT, 504);
    }

    public function test_http_version_not_supported_status_code()
    {
        $this->assertEquals(Http::HTTP_VERSION_NOT_SUPPORTED, 505);
    }

    public function test_variant_also_negotiates_status_code()
    {
        $this->assertEquals(Http::VARIANT_ALSO_NEGOTIATES, 506);
    }

    public function test_insufficient_storage_status_code()
    {
        $this->assertEquals(Http::INSUFFICIENT_STORAGE, 507);
    }

    public function test_loop_detected_status_code()
    {
        $this->assertEquals(Http::LOOP_DETECTED, 508);
    }

    public function test_not_extended_status_code()
    {
        $this->assertEquals(Http::NOT_EXTENDED, 510);
    }

    public function test_network_authentication_required_status_code()
    {
        $this->assertEquals(Http::NETWORK_AUTHENTICATION_REQUIRED, 511);
    }
}