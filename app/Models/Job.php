<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    /**
     * Adds a tag to the job tags data
     *
     * @param string $name
     * @return void
     */
    public function addTag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }

    /**
     * Relationship: A job belongs to many tags
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Relationship: A job belongs to an employer.
     *
     * @return BelongsTo
     */
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
