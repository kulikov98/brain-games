<?php
namespace BrainGames\Prime;

use function BrainGames\Cli\play;

const GAME_RULE = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function run()
{
    play(GAME_RULE, function() {
        return getQuestionAndAnswer();
    });
}

function getQuestionAndAnswer()
{
    $number = rand(1, 3500);
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    $questionAndAnswer = [
        'question' => "{$number}",
        'answer' => "{$correctAnswer}"
    ];
    
    return $questionAndAnswer;
}

function isprime($number) 
{
	if ($number === 1) {
        return false;
    }
	for ($divider = 2; $divider * $divider <= $number; $divider++) {
		if ($number % $divider === 0) {
            return false;
        }
	}
	return true;
}
