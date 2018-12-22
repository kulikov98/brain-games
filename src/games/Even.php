<?php
namespace BrainGames\Even;

function getQuestion ()
{       
    $number = rand(1, 100);
    $question = [
        'string' => "{$number}",
        'value' => ['number' => $number]
    ];
    return $question;
}

function checkAnswer ($question, $answer)
{
    $number = $question['number'];
    $correctAnswer = isEven($number) ? 'yes' : 'no';

    if ($answer === $correctAnswer) {
        return true;
    } else {
        return $correctAnswer;
    }
}

function isEven($number)
{
    return $number % 2 === 0;
}
