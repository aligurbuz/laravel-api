<?php

declare(strict_types=1);

namespace App\Models\Features;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait FullTextSearch
 * @package App\Models\Features
 */
trait FullTextSearch
{
    /**
     * Replaces spaces with full text search wildcards
     *
     * @param string $term
     * @return string
     */
    protected function fullTextWildcards(string $term): string
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if(strlen($word) >= 3) {
                $words[$key] = '+' . $word . '*';
            }
        }

        return implode( ' ', $words);
    }

    /**
     * Scope a query that matches a full text search of term.
     *
     * @param Builder $query
     * @param string $term
     * @return Builder
     */
    public function scopeSearch(Builder $query, string $term): Builder
    {
        $columns = implode(',',$this->searchable);

        $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)" , $this->fullTextWildcards($term));

        return $query;
    }
}
