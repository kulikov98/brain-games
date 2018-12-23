<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function play($gameRule, $getQuestionAndAnswer)
{
    line("Welcome to the Brain Games!");
    line($gameRule);
    
    $name = prompt("May I have your name?");
    line("Hello, {$name}");

    for ($i = 0; $i < ROUNDS; $i++) {
        $questionsAndAnswers[] = $getQuestionAndAnswer();
    }

    if (questions($questionsAndAnswers)) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    
    return;
}

function questions($questionsAndAnswers)
{
    foreach ($questionsAndAnswers as $questionAndAnswer) {
        ['question' => $question, 'answer' => $correctAnswer] = $questionAndAnswer;
        line("Question: {$question}");
        $answer = prompt("Your answer");

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return false;
        }
    }
    return true;
}
