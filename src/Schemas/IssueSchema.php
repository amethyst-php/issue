<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class IssueSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        $issuableConfig = Config::get('amethyst.issue.data.issue.attributes.issuable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\EnumAttribute::make('issuable_type', array_keys($issuableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('issuable_id')
                ->setRelationKey('issuable_type')
                ->setRelationName('issuable')
                ->setRelations($issuableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
