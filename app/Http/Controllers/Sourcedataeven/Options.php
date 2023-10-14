<?php

namespace App\Http\Controllers\Sourcedataeven;

use App\Models\SourceDataEven;
use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = SourceDataEven::class;

    protected $queryAttributes = ['group'];

    //public function query(Request $request)
    //{
    //    return SourceDataEven::query();
    //}
}
