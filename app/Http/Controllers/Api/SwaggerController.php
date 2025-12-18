<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Flutter Posts API",
 *     description="API to fetch seeded posts with title, description and image",
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Use the token from the login / register response as: Bearer {token}"
 * )
 */
class SwaggerController extends Controller
{
    // This controller exists only to hold global Swagger annotations.
}


