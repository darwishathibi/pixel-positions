<?php

use App\Models\Employer;
use App\Models\Job;


it('belongs to the employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(
        ['employer_id' => $employer->id]
    );

    //Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can has tags', function () {
    //Arrange
    $job = Job::factory()->create();

    //Act and Assert
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
