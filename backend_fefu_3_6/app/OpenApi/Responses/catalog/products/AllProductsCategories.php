<?php

namespace App\OpenApi\Responses\catalog\products;

use App\OpenApi\Schemas\CategoriesSchema;
use App\OpenApi\Schemas\PaginatorLinksSchema;
use App\OpenApi\Schemas\PaginatorMetaSchema;
use App\OpenApi\Schemas\ProductsCatalogSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class AllProductsCategories extends ResponseFactory
{
    public function build(): Response
    {
        return Response::ok()
            ->description('Successful response')
            ->content(
                MediaType::json()->schema(
                    Schema::object()->properties(
                        Schema::array('data')->items(ProductsCatalogSchema::ref()),
                        PaginatorLinksSchema::ref('links'),
                        PaginatorMetaSchema::ref('meta'),
                    )
                )
            );
    }
}
