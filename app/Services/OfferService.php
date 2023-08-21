<?php

namespace App\Services;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class OfferService
{
    /**
     * Get offers list
     */
    public function getList(): null | Collection
    {
        $offers = Offer::query()
            ->with('images')
            ->whereHas('product', function ($q) {
                /** @var $q Builder */
                $q->where('active', true);
            })
            ->inRandomOrder()
            ->take(50)
            ->get();

        return $offers;
    }
}
