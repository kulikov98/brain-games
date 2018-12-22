<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Even\questions;

function run($game)
{
    line("Welcome to the Brain Games!");
    switch ($game) {
        case 'brain-even':
            line("Answer \"yes\" if number even otherwise answer \"no\".");
            break;
        case 'brain-calc':
            line("What is the result of the expression?");
            break;
    }
    
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    
    if (questions()) {
        line("Congratulations, {$name}!");
    } else {
        line("Let's try again, {$name}!");
    }
    
    return;
}
