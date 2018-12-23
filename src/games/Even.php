<?php
namespace BrainGames\Even;

use function BrainGames\Cli\play;

function run()
{
    $rounds = 3;
    $rules = "Answer \"yes\" if number even otherwise answer \"no\".";

    for ($i = 0; $i < $rounds; $i++) {
        $questionsAndAnswers[] = getQuestionAndAnswer();
    }

    play($rules, $questionsAndAnswers);
}

function getQuestionAndAnswer()
{
    $number = rand(1, 100);
    $correctAnswer = isEven($number) ? 'yes' : 'no';

    $questionAndAnswer = [
        'question' => "{$number}",
        'answer' => "{$correctAnswer}"
    ];

    return $questionAndAnswer;
}

function isEven($number)
{
    return $number % 2 === 0;
}
