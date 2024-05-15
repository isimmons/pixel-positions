<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;


it('can have tags', function() {
    $tag = Tag::factory()->create([ 'name' => 'Foobar']);
    $job = Job::factory()->create();
    $job->addTag($tag->name);

    expect($job->tags)->toHaveCount(1)
        ->and($job->tags[0]->name)->toBe($tag->name);
});
