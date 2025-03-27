<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id_category
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Categorie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Categorie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Categorie query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Categorie whereIdCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Categorie whereName($value)
 * @mixin \Eloquent
 */
class Categorie extends Model
{
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
