<?php

namespace BrainGames\src\Engine;

use function Cli\line;
use function Cli\prompt;
use function BrainGames\src\Games\Even\getTaskEven;
use function BrainGames\src\Games\Calc\getTaskCalc;

function startBrainGames($gamesType)
{
    $tasks = [
        'even' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'calc' => 'What is the result of the expression?'
    ];
    line('Welcome to the Brain Games!');
    $task = $tasks[$gamesType];
    line($task);
    line('');
    $name = prompt('May i have your name?');
    line('Hello, %s!', $name);

    $count = 1;
    $winner = 3;

    while ($count <= $winner) {
        [$randomNumber, $correctAnswer] = getTaskEven();
        line();
        line('Question: %s', $randomNumber);
        $answer = prompt('Your answer: ');
        if ($correctAnswer === $answer) {
            line('Correct!');
            $count ++;
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulation, %s!', $name);
}

