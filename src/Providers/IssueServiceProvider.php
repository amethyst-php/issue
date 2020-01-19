<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;
use Illuminate\Support\Facades\Config;

class IssueServiceProvider extends CommonServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);

        app('amethyst.taxonomy')->add('issue.status', Config::get('amethyst.issue.data.issue.attributes.status.taxonomy'), [
            'open',
            'working',
            'closed',
        ]);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
