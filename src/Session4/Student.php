<?php

class Student
{
    private float $summation = 0.0;

    public function calculateSemesterMarks(float $mark1, float $mark2, float $mark3)
    {
        $this->summation = $mark1 + $mark2 + $mark3;

        return $this;
    }

    public function calculateGPA()
    {
        $this->summation / 2;

        return $this;
    }

    public function sendEmail()
    {

        return 'sending email and marks = ' . $this->summation;
    }
}

$studentObj = new Student();
echo $studentObj->calculateSemesterMarks(80, 80.40, 90.50)
    ->calculateGPA()
    ->sendEmail();



