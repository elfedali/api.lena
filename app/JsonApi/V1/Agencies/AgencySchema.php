<?php

namespace App\JsonApi\V1\Agencies;

use App\Models\Agency;
use LaravelJsonApi\Eloquent\Contracts\Paginator;
use LaravelJsonApi\Eloquent\Fields\DateTime;
use LaravelJsonApi\Eloquent\Fields\ID;
use LaravelJsonApi\Eloquent\Fields\Str;


use LaravelJsonApi\Eloquent\Filters\WhereIdIn;
use LaravelJsonApi\Eloquent\Pagination\PagePagination;
use LaravelJsonApi\Eloquent\Schema;

class AgencySchema extends Schema
{

    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = Agency::class;

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            ID::make(),
            Str::make('uuid'),
            Str::make('name'),
            Str::make('slug'),
            Str::make('address'),
            Str::make('helpAddress', 'help_address'),
            Str::make('city'),
            Str::make('state'),
            Str::make('country'),
            Str::make('zipCode', 'zip_code'),
            Str::make('phone'),
            Str::make('email'),
            Str::make('website'),
            Str::make('logo'),
            Str::make('cover'),
            Str::make('description'),
            Str::make('status'),
            Str::make('commentStatus', 'comment_status'),
            Str::make('currency'),



            DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
        ];
    }

    /**
     * Get the resource filters.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
            WhereIdIn::make($this),
        ];
    }

    /**
     * Get the resource paginator.
     *
     * @return Paginator|null
     */
    public function pagination(): ?Paginator
    {
        return PagePagination::make();
    }
}
