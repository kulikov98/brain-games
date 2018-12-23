<?php
namespace BrainGames\Progression;

use function BrainGames\Cli\play;

const GAME_RULE = "What number is missing in the progression?";
const PROGRESSION_LENGTH = 10;

function run()
{
    play(GAME_RULE, function () {
        return getQuestionAndAnswer();
    });
}

function getQuestionAndAnswer()
{
    $start = rand(1, 10);
    $increment = rand(1, 10);
    $hiddenElementPosition = rand(1, PROGRESSION_LENGTH);

    for ($i = 1; $i <= PROGRESSION_LENGTH; $i++) {
        $question[$i] = $start + $increment * $i;
    }

    $correctAnswer = $question[$hiddenElementPosition];
    $question[$hiddenElementPosition] = '..';

    $question = [
        'question' => implode(' ', $question),
        'answer' => "{$correctAnswer}"
    ];
    return $question;
}
