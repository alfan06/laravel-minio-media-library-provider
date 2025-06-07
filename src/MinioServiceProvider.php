<?php

namespace Alfan06\LaravelMinioMediaLibraryProvider;

use Illuminate\Support\ServiceProvider;

class MinioServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/minio.php' => config_path('minio.php'),
        ], 'minio-config');
    }
}
