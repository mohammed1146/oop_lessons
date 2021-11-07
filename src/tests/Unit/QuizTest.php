<?php

namespace Tests\Unit;

use App\Quiz\Question;
use App\Quiz\Quiz;
use App\Quiz\QuizQuestions;
use PHPUnit\Framework\TestCase;

class QuizTest extends TestCase
{
    /**
     * Quiz
     *    questions (answers (true or false))
     *      - add question
     *      - add answer
     *    grading
     *
     * ---------------
     * Quiz tests
     * 1- quiz has questions
     */

    /** @test */
    public function quiz_contains_questions()
    {
        $quiz = new Quiz(new QuizQuestions());

        $quiz->setTitle('Math Quiz');

        $quiz->addQuestion(new Question('What is 2+2 ?', 4));

        //assert
        $this->assertCount(1, $quiz->questions());
    }

    /** @test */
    public function it_grade_a_perfect_quiz()
    {
        quiz = new Quiz(new QuizQuestions());

        $quiz->setTitle('Math Quiz');

        $quiz->addQuestion(new Question('What is 2+2 ?', 4));

        $question = $quiz->nextQuestion();
        //
        $question->answer(4);

        $this->assertEquals(100, $quiz->grade());
    }

    //test failed quiz
    public function it_grade_a_failed_quiz()
    {
        //implementation

        $this->assertEquals(0, $quiz->grade());
    }

    //can't grade untill the user anwser all the questions
}