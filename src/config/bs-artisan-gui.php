<?php
return [
    /* namespace namespace Bilalsatellite\BsArtisanGui;
    */
    /*
    |--------------------------------------------------------------------------
    | List of commands
    |--------------------------------------------------------------------------
    |
    | List of all default commands that has end of execution. Commands like
    | [serve] not supported in case of server side behavior of php.
    | Keys means group. You can shuffle commands as you wish and add your own.
    |
    */
    'commands'    => [
        'laravel'  => [
            'about',
            'down',
            'up',
            'env',
            'help',
            'inspire',
            'list',
            'route:list',
            'channel:list',
            'event:list',
            'schedule:list',
            'notifications:table',
            'package:discover',
            'schedule:run',
            'schema:dump',
            'session:table',
            'storage:link',
            'stub:publish',
            'lang:publish',
            'session:table',
            'vendor:publish'
        ],
        'filament' => [
            'filament:assets',
            'filament:check-translations',
            'filament:install',
            'filament:upgrade',
            'make:filament-importer',
            'make:filament-page',
            'make:filament-panel',
            'make:filament-relation-manager',
            'make:filament-resource',
            'make:filament-theme',
            'make:filament-user',
            'make:filament-widget',
            'make:form-field',
            'make:form-layout',
            'make:infolist-entry',
            'make:infolist-layout'
        ],
        'livewire' => [
            'livewire:make',
            'livewire:form',
            'livewire:attribute',
            'livewire:copy',
            'livewire:move',
            'livewire:delete',
            'livewire:layout',
            'livewire:stubs',
            'livewire:publish',
            'livewire:upgrade',
            'make:livewire-form',
            'make:livewire-table'
            // 'livewire:touch',
            // 'make:livewire',
            // 'livewire:cp',
            // 'livewire:rm',
            // 'livewire:mv',
            // 'livewire:configure-s3-upload-cleanup',
        ],
        'make'     => [
            'make:cast',
            'make:channel',
            'make:command',
            'make:component',
            'make:controller',
            'make:event',
            'make:exception',
            'make:factory',
            'make:job',
            'make:listener',
            'make:mail',
            'make:middleware',
            'make:migration',
            'make:model',
            'make:notification',
            'make:observer',
            'make:policy',
            'make:provider',
            'make:request',
            'make:resource',
            'make:rule',
            'make:scope',
            'make:seeder',
            'make:table-column',
            'make:test',
        ],
        'optimize | Cache | Clear' => [
            'optimize',
            'optimize:clear',
            'cache:clear',
            'cache:forget',
            'cache:table',
            'config:clear',
            'config:cache',
            'route:cache',
            'route:clear',
            'cache:prune-stale-tags',
            'config:show',
            'view:cache',
            'view:clear',
            'event:cache',
            'event:clear',
            'clear-compiled',
            'auth:clear-resets',
            'schedule:clear-cache',
            'queue:clear',
        ],
        'migrate'  => [
            'migrate',
            'migrate:fresh',
            'migrate:install',
            'migrate:refresh',
            'migrate:reset',
            'migrate:rollback',
            'migrate:status',
        ],
        'database' => [
            'db:monitor',
            'db:seed',
            'db:wipe',
            'db:table',
            'schema:dump'
        ],
        'others' => [
            'event:generate',
            'model:prune',
            'model:show',
            'schedule:list',
            'env:decrypt',
            'env:encrypt'
        ],
        'queue'    => [
            'queue:batches-table',
            'queue:failed',
            'queue:failed-table',
            'queue:flush',
            'queue:forget',
            'queue:listen',
            'queue:monitor',
            'queue:prune-batches',
            'queue:prune-failed',
            'queue:restart',
            'queue:retry',
            'queue:retry-batch',
            'queue:table',
            'queue:work'
        ],
    ]
];
