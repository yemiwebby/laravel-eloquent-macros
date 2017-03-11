<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    public $foreignKey = 'user_id';

    public $localKey = 'id';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        HasMany::macro('toHasOne', function(){
           return new HasOne(
               $this->getQuery(),
               $this->getParent(),
               $this->foreignKey,
               $this->localKey
           );
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
