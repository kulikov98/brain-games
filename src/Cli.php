<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($game)
{
    $getRules = "\\BrainGames\\{$game}\\getRules";
    $getQuestion = "\\BrainGames\\{$game}\\getQuestion";
    $checkAnswer = "\\BrainGames\\{$game}\\checkAnswer";

    $rules = $getRules();

    line("Welcome to the Brain Games!");
    line($rules);
    
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    
    if (questions($getQuestion, $checkAnswer)) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    
    return;
}

function questions($getQuestion, $checkAnswer)
{
    for ($i = 0; $i < 3; $i++) {
        $question = $getQuestion();
        line("Question: {$question['string']}");
        $answer = prompt("Your answer");
        
        $result = $checkAnswer($question['value'], $answer);

        if ($result === true) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
            return false;
        }
    }
    return true;
}
