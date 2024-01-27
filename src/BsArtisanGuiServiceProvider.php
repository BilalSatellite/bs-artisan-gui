<?php

namespace Bilalsatellite\BsArtisanGui;
// "Bilalsatellite\\BsArtisanGui\\": "Packages/Bs-Artisan-Gui/src/"
use Livewire\Livewire;
use Livewire\ComponentHookRegistry;
use Illuminate\Support\ServiceProvider;
use Bilalsatellite\BsArtisanGui\Livewire\BsArtisan;
use Bilalsatellite\BsArtisanGui\Livewire\LivewireCommands;

class BsArtisanGuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Check the existence of the Livewire class ..
        if (class_exists(Livewire::class)) {
            Livewire::component('BsArtisan', BsArtisan::class);
            $this->mylivewirecmd(); // this is a my livewire commands add for my project
        }
        $this->loadViewsFrom(__DIR__ . '/resources/views/livewire', 'bs-artisan');
        $this->publishes([
            __DIR__ . '/config/bs-artisan-gui.php' => config_path('bs-artisan-gui.php')
        ], 'bs-artisan-gui');
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/bs-artisan-gui.php', 'bs-artisan-gui');
    }
    protected function mylivewirecmd()
    {
        foreach ([
            LivewireCommands::class
        ] as $feature) {
            app('livewire')->componentHook($feature);
        }
        ComponentHookRegistry::boot();
    }
}
