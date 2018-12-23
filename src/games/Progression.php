<?php
namespace BrainGames\Progression;

use function BrainGames\Cli\play;

function run()
{
    $rounds = 3;
    $rules = "What number is missing in the progression?";

    for ($i = 0; $i < $rounds; $i++) {
        $questionsAndAnswers[] = getQuestionAndAnswer();
    }

    play($rules, $questionsAndAnswers);
}

function getQuestionAndAnswer()
{
    $start = rand(1, 10);
    $increment = rand(1, 10);
    $hiddenElementPosition = rand(0, 9);
    $progressionLength = 10;

    for ($i = 1; $i <= $progressionLength; $i++) {
        $question[] = $start + $increment * $i;
    }

    $correctAnswer = $question[$hiddenElementPosition];
    $question[$hiddenElementPosition] = '..';

    $question = [
        'question' => implode(' ', $question),
        'answer' => "{$correctAnswer}"
    ];
    return $question;
}
