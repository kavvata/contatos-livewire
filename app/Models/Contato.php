<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|Contato newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contato newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contato query()
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereUpdatedAt($value)
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 *
 * @method static \Database\Factories\ContatoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereTelefone($value)
 *
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User|null $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contato onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contato whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contato withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Contato withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Contato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nome', 'telefone'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
