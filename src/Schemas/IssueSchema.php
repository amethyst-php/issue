<?php

namespace Railken\Amethyst\Schemas;

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
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            \Railken\Amethyst\Attributes\TaxonomyAttribute::make('status_id', app('amethyst.taxonomy')->get('issue.status'))
                ->setRelationName('status')
                ->setRequired(true),
            Attributes\EnumAttribute::make('issuable_type', app('amethyst')->getMorphListable('issue', 'issuable')),
            Attributes\MorphToAttribute::make('issuable_id')
                ->setRelationKey('issuable_type')
                ->setRelationName('issuable')
                ->setRelations(app('amethyst')->getMorphRelationable('issue', 'issuable')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
