<?php
namespace BrainGames\Even;

use function BrainGames\Cli\play;

const GAME_RULE = "Answer \"yes\" if number even otherwise answer \"no\".";

function run()
{
    play(GAME_RULE, function () {
        return getQuestionAndAnswer();
    });
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
