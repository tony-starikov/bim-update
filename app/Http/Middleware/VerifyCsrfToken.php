<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/estimates-project-scan-to-bim',
        '/scan-to-bim-estimates-project',
        '/estimates-scan-to-bim-processing',
        '/estimates-scan-to-bim-short-processing',
        '/mep-estimates-project',
        '/estimates-project-mep',
        '/estimates-mep-short-processing',
        '/estimates-mep-processing',
    ];
}
