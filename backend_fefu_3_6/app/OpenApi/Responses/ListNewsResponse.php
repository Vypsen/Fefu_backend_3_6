<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\NewsSchema;
use App\OpenApi\Schemas\PoginatorLinksSchema;
use App\OpenApi\Schemas\PoginatorMetaSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListNewsResponse extends ResponseFactory
{
    public function build(): Response
    {
        return Response::ok()->description('Successful response')->content(
            MediaType::json()->schema(
                Schema::object()->properties(
                    Schema::array('data')->items(NewsSchema::ref()),
                    PoginatorLinksSchema::ref('links'),
                    PoginatorMetaSchema::ref('meta'),
                )
            )
        );
    }
}
