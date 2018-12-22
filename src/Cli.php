<?php
namespace BrainGames\Cli;

use function \cli\{line, prompt};
use function \BrainGames\Gcd\{getRules, getQuestion, checkAnswer};

function run($game)
{
    $rules = getRules();

    line("Welcome to the Brain Games!");
    line($rules);
    
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    
    if (questions()) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    
    return;
}

function questions ()
{
    for ($i = 0; $i < 3; $i++) {
        $question = getQuestion();
        line("Question: {$question['string']}");
        $answer = prompt("Your answer");

        $result = checkAnswer ($question['value'], $answer);

        if ($result === true) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
            return false;
        }
    }
    return true;
}
