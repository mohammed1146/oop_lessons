<?php

namespace App\Quiz;

class Quiz
{
    protected string $title;

    public function __construct(protected QuizQuestions $quizQuestions)
    {
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function addQuestion(Question $question)
    {
        $this->quizQuestions->add($question);
    }

    public function questions()
    {
        return $this->quizQuestions->questions();
    }
}