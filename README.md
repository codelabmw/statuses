<p>
    <a href="https://github.com/codelabmw/statuses/actions"><img alt="GitHub Workflow Status (master)" src="https://github.com/codelabmw/statuses/actions/workflows/tests.yml/badge.svg"></a>
    <a href="https://packagist.org/packages/codelabmw/statuses"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/codelabmw/statuses"></a>
    <a href="https://packagist.org/packages/codelabmw/statuses"><img alt="Latest Version" src="https://img.shields.io/packagist/v/codelabmw/statuses"></a>
    <a href="https://packagist.org/packages/codelabmw/statuses"><img alt="License" src="https://img.shields.io/packagist/l/codelabmw/statuses"></a>
</p>

A PHP package that houses commonly used status classes and enums that can be used in PHP projects.

## Installation

```bash
composer require codelabmw/statuses
```

## Usage

In your codebase simply import the status class or enum that will best serve your use case.

```php
<?php

use Codelabmw\Statuses\Http;

class IndexController
{
    public function __invoke()
    {
        return response(
            data: 'Hello World',
            statusCode: Http::OK,
        );
    }
}
```

## Epilogue

We would love to hear your feedback and be happy to receive contributions. Give a star if you found the package useful.
