<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\NewsResources;
use App\Http\Resources\PagesResources;
use App\Models\Page;
use App\OpenApi\Responses\ListNewsResponse;
use App\OpenApi\Responses\NotFoundResponse;
use App\OpenApi\Responses\ShowNewsResponse;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]


class PagesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Responsable
     */
    #[OpenApi\Operation(tags: ['pages'])]
    public function index()
    {
        return PagesResources::collection(
            Page::query()->paginate(5)
        );
    }


    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return Responsable
     */
    #[OpenApi\Operation(tags: ['pages'])]
    public function show(string $slug)
    {
        return new PagesResources(
            Page::query()->where('slug', $slug)->firstOrFail()
        );
    }

}
