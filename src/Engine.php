<?php

namespace BrainGames\src\Engine;

use function Cli\line;
use function Cli\prompt;
use function BrainGames\src\Games\Even\getTaskEven;
use function BrainGames\src\Games\Calc\getTaskCalc;
use function BrainGames\src\Games\Gcd\getTaskGcd;
use function BrainGames\src\Games\Progression\getTaskProgression;
use function BrainGames\src\Games\Prime\getTaskPrime;

function startBrainGames($gamesType)
{
    $tasks = [
        'even' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'calc' => 'What is the result of the expression?',
        'gcd' => 'Find the greatest common divisor of given numbers.',
        'progression' => 'What number is missing in the progression?',
        'prime' => 'Answer "yes" if given number is prime. Otherwise answer "no".'
    ];
    line('Welcome to the Brain Games!');
    $task = $tasks[$gamesType];
    line($task);
    line('');
    $name = prompt('May i have your name?');
    line('Hello, %s!', $name);

    for ($i = 1, $wincount = 3; $i <= $wincount; $i++) {
        switch ($gamesType) {
            case 'even':
                [$expressionQuestion, $correctAnswer] = getTaskEven();
                break;
            case 'calc':
                [$expressionQuestion, $correctAnswer] = getTaskCalc();
                break;
            case 'gcd':
                [$expressionQuestion, $correctAnswer] = getTaskGcd();
                break;
            case 'progression':
                [$expressionQuestion, $correctAnswer] = getTaskProgression();
                break;
            case 'prime':
                [$expressionQuestion, $correctAnswer] = getTaskPrime();
        }
        line();
        line('Question: %s', $expressionQuestion);
        $answer = strtolower(prompt('Your answer: '));
        if ($correctAnswer === $answer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulation, %s!', $name);
}
