<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Mincultura') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h1 class="display-6 fw-semibold mb-3">Mincultura</h1>
                        <p class="text-body-secondary mb-4">Proyecto Laravel configurado para usar Bootstrap 5.</p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Probar componente Bootstrap
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 activo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    El proyecto esta listo con Bootstrap 5.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
