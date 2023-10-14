<?php

namespace App\Http\Controllers\Chan;

use App\Models\Chan;
use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Chan::class;

    protected $queryAttributes = ['group'];

    //public function query(Request $request)
    //{
    //    return Chan::query();
    //}
}
