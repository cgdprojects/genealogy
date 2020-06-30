<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForHome extends Migration
{
    protected $permissions = [
        ['name' => 'core.home.index', 'description' => 'App State Builder', 'is_default' => true],
    ];
}