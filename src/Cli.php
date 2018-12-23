<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function play($rules, $questionsAndAnswers)
{
    line("Welcome to the Brain Games!");
    line($rules);
    
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    
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
        line("Question: {$questionAndAnswer['question']}");
        $answer = prompt("Your answer");

        if ($answer === $questionAndAnswer['answer']) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$questionAndAnswer['answer']}'.");
            return false;
        }
    }
    return true;
}
