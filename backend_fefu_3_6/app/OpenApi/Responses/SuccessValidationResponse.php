<?php

namespace App\OpenApi\Responses;
;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema as ObjectsSchema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class SuccessValidationResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        return Response::ok()->description('Successful response');
    }
}
