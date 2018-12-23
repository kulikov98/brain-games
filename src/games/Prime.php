<?php
namespace BrainGames\Prime;

use function BrainGames\Cli\play;

function run()
{
    $rounds = 3;
    $rules = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    for ($i = 0; $i < $rounds; $i++) {
        $questionsAndAnswers[] = getQuestionAndAnswer();
    }

    play($rules, $questionsAndAnswers);
}

function getQuestionAndAnswer()
{
    $number = rand(1, 3500);
    $correctAnswer = isPrime($number) ? 'yes' : 'no';

    $questionAndAnswer = [
        'question' => "{$number}",
        'answer' => "{$correctAnswer}"
    ];
    
    return $question;
}

function isPrime($number)
{
    return gmp_prob_prime($number) === 2 ? true : false;
}
