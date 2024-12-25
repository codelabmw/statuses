<?php

declare(strict_types=1);

namespace Tests\Unit\Http;

use Codelabmw\Statuses\Http;
use PHPUnit\Framework\TestCase;

class ClientErrorStatusCodesTest extends TestCase
{
    public function test_bad_request_status_code()
    {
        $this->assertEquals(Http::BAD_REQUEST, 400);
    }

    public function test_unauthorized_status_code()
    {
        $this->assertEquals(Http::UNAUTHORIZED, 401);
    }

    public function test_payment_required_status_code()
    {
        $this->assertEquals(Http::PAYMENT_REQUIRED, 402);
    }

    public function test_forbidden_status_code()
    {
        $this->assertEquals(Http::FORBIDDEN, 403);
    }

    public function test_not_found_status_code()
    {
        $this->assertEquals(Http::NOT_FOUND, 404);
    }

    public function test_method_not_allowed_status_code()
    {
        $this->assertEquals(Http::METHOD_NOT_ALLOWED, 405);
    }

    public function test_not_acceptable_status_code()
    {
        $this->assertEquals(Http::NOT_ACCEPTABLE, 406);
    }

    public function test_proxy_authentication_required_status_code()
    {
        $this->assertEquals(Http::PROXY_AUTHENTICATION_REQUIRED, 407);
    }

    public function test_request_timeout_status_code()
    {
        $this->assertEquals(Http::REQUEST_TIMEOUT, 408);
    }

    public function test_conflict_status_code()
    {
        $this->assertEquals(Http::CONFLICT, 409);
    }

    public function test_gone_status_code()
    {
        $this->assertEquals(Http::GONE, 410);
    }

    public function test_length_required_status_code()
    {
        $this->assertEquals(Http::LENGTH_REQUIRED, 411);
    }

    public function test_precondition_failed_status_code()
    {
        $this->assertEquals(Http::PRECONDITION_FAILED, 412);
    }

    public function test_content_too_large_status_code()
    {
        $this->assertEquals(Http::CONTENT_TOO_LARGE, 413);
    }

    public function test_uri_too_long_status_code()
    {
        $this->assertEquals(Http::URI_TOO_LONG, 414);
    }

    public function test_unsupported_media_type_status_code()
    {
        $this->assertEquals(Http::UNSUPPORTED_MEDIA_TYPE, 415);
    }

    public function test_range_not_satisfiable_status_code()
    {
        $this->assertEquals(Http::RANGE_NOT_SATISFIABLE, 416);
    }

    public function test_expectation_failed_status_code()
    {
        $this->assertEquals(Http::EXPECTATION_FAILED, 417);
    }

    public function test_im_a_teapot_status_code()
    {
        $this->assertEquals(Http::IM_A_TEAPOT, 418);
    }

    public function test_misdirected_request_status_code()
    {
        $this->assertEquals(Http::MISDIRECTED_REQUEST, 421);
    }

    public function test_unprocessable_content_status_code()
    {
        $this->assertEquals(Http::UNPROCESSABLE_CONTENT, 422);
    }

    public function test_locked_status_code()
    {
        $this->assertEquals(Http::LOCKED, 423);
    }

    public function test_failed_dependency_status_code()
    {
        $this->assertEquals(Http::FAILED_DEPENDENCY, 424);
    }

    public function test_too_early_status_code()
    {
        $this->assertEquals(Http::TOO_EARLY, 425);
    }

    public function test_upgrade_required_status_code()
    {
        $this->assertEquals(Http::UPGRADE_REQUIRED, 426);
    }

    public function test_precondition_required_status_code()
    {
        $this->assertEquals(Http::PRECONDITION_REQUIRED, 428);
    }

    public function test_too_many_requests_status_code()
    {
        $this->assertEquals(Http::TOO_MANY_REQUESTS, 429);
    }

    public function test_request_header_fields_too_large()
    {
        $this->assertEquals(Http::REQUEST_HEADER_FIELDS_TOO_LARGE, 431);
    }

    public function test_unavailable_for_legal_reasons_status_code()
    {
        $this->assertEquals(Http::UNAVAILABLE_FOR_LEGAL_REASONS, 451);
    }
}