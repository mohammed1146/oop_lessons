<?php

namespace App\Quiz;

class QuizQuestions implements \Countable
{
    protected array $questions;

    public function add($question)
    {
        $this->questions[] = $question;
    }

    public function questions()
    {
        return $this->questions;
    }

    public function count()
    {
        return count($this->questions);
    }
}