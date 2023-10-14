<?php

namespace App\Http\Controllers\Person;

use App\Models\SystemPerson;
use Illuminate\Routing\Controller;
// use App\Http\Resources\Person as Resource;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class SystemOptions extends Controller
{
    use OptionsBuilder;

    protected string $model = SystemPerson::class;

    protected $queryAttributes = ['name', 'email'];

    // protected $resource = Resource::class;

    // public function query()
    // {
    //     return User::active()
    //         ->with(['person:id,appellative,name', 'avatar:id,user_id']);
    // }
}
