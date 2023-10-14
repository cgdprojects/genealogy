<?php

use LaravelLiberu\Migrator\Database\Migration;

return new class extends Migration
{
    protected array $permissions = [
        ['name' => 'reports.descendant', 'description' => 'View Descendants report', 'is_default' => true],
    ];

    protected array $menu = [
        'name' => 'd\'Aboville', 'icon' => 'eye', 'route' => 'reports.descendant', 'order_index' => 999, 'has_children' => false,
    ];

    protected ?string $parentMenu = 'Reports';
};
