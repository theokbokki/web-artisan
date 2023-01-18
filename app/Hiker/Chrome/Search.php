<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Search\SearchItem;
use Hiker\Components\Search\SearchContext;
use Hiker\Components\Search\SearchConstructor;

class Search extends SearchConstructor
{
    /**
     * Return the regular navigation links
     *
     * @return array
     */
    protected function contexts() : array
    {
        return [
            SearchContext::make('*', 'Everything')
                ->keystrokes(['meta', 'p'])
                ->default()
                ->resources([]),
        ];
    }

    /**
     * Get the list of recent searches
     *
     * @return array
     */
    public function recent(): array
    {
        $cacheKey = auth()->user()->id . '_search';

        if ($searches = cache($cacheKey)) {
            $searches = array_reverse(json_decode($searches));
        } else {
            $searches = [];
        }

        return array_map(function($search) {
            return SearchItem::make($search->raw, $search->context);
        }, $searches);
    }
}
