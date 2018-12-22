<?php
namespace BrainGames\Progression;

function getRules ()
{
    return "What number is missing in the progression?";
}

function getQuestion ()
{   
    $question = [];
    $number = rand(1, 10);
    $increment = rand(1,10);
    $hidden = rand(0,9);
    $answer = '';

    for ($i = 0; $i < 10; $i++) {
        if ($i === $hidden) {
            $question[] = "..";
            $answer = $number;
        } else {
            $question[] = $number;
        }
        $number += $increment;
    }

    $question = [
        'string' => implode(' ', $question),
        'value' => ['answer' => $answer]
    ];
    return $question;
}

function checkAnswer ($question, $answer)
{
    $correctAnswer = $question['answer'];
    
    if ($answer == $correctAnswer) {
        return true;
    } else {
        return $correctAnswer;
    }
    return true;
}