<?php

namespace App\Quiz;

class Question
{
    protected string $answer;

    protected bool $correct;

    public function __construct(protected string $title, protected $solution)
    {
    }
}