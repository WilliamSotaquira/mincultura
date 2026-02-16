<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function (): void {
            $this->mapWebRouteGroups();
        });
    }

    protected function mapWebRouteGroups(): void
    {
        $groups = [
            [
                'file' => 'routes/web/public.php',
                'middleware' => ['web'],
            ],
            [
                'file' => 'routes/web/ministerio.php',
                'middleware' => ['web'],
                'prefix' => 'ministerio',
                'as' => 'ministerio.',
            ],
            [
                'file' => 'routes/web/direcciones.php',
                'middleware' => ['web'],
                'prefix' => 'direcciones',
                'as' => 'direcciones.',
            ],
            [
                'file' => 'routes/web/participa.php',
                'middleware' => ['web'],
                'prefix' => 'participa',
                'as' => 'participa.',
            ],
            [
                'file' => 'routes/web/atencion.php',
                'middleware' => ['web'],
                'prefix' => 'atencion',
                'as' => 'atencion.',
            ],
            [
                'file' => 'routes/web/transparencia.php',
                'middleware' => ['web'],
                'prefix' => 'transparencia',
                'as' => 'transparencia.',
            ],
            [
                'file' => 'routes/web/buscado.php',
                'middleware' => ['web'],
                'prefix' => 'buscado',
                'as' => 'buscado.',
            ],
        ];

        foreach ($groups as $group) {
            $path = base_path($group['file']);

            if (! file_exists($path)) {
                continue;
            }

            $route = Route::middleware($group['middleware']);

            if (isset($group['prefix'])) {
                $route = $route->prefix($group['prefix']);
            }

            if (isset($group['as'])) {
                $route = $route->name($group['as']);
            }

            $route->group($path);
        }
    }
}
