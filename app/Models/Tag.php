<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $name
 */
class Tag extends Model
{
    use HasFactory;

    /**
     * Defines the fields in the tags table that are mass assignable.
     *
     * @var string[] $fillable
     */
    protected $fillable = ['name'];

    /**
     * Relationship: A tag belongs to many jobs
     *
     * @return BelongsToMany
     */
    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }
}
