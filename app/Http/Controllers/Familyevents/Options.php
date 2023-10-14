<?php

namespace App\Http\Controllers\Familyevents;

use App\Models\FamilyEvent;
use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = FamilyEvent::class;

    protected $queryAttributes = ['title'];

    //public function query(Request $request)
    //{
    //    return FamilyEvent::query();
    //}
}
