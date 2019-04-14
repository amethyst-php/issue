<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;

class IssueServiceProvider extends CommonServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);

        \Illuminate\Database\Eloquent\Builder::macro('issues', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Issue::class, 'issue', 'issuable');
        });

        app('amethyst.taxonomy')->add('issue.status', Config::get('amethyst.issue.data.issue.attributes.status.taxonomy'), [
            'open',
            'working',
            'closed'
        ]);
    }
}
