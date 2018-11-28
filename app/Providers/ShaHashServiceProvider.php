<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use App\ShaHasher;
use Illuminate\Hashing\HashServiceProvider;

class ShaHashServiceProvider extends HashServiceProvider {

    public function register()
    {
        $this->app->singleton('hash', function() { return new ShaHasher; });
    }

}
