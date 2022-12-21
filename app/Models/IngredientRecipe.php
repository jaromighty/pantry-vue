<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredientRecipe extends Pivot
{
    public function measurement(): HasOne
    {
        return $this->hasOne(Measurement::class);
    }
}
