<?php

namespace BrainGames\src\Games\Prime;

function isPrime($number): bool
{
    if ($number % 2 === 0) {
        return false;
    }
    $limit = sqrt($number);

    for ($i = 3; $i <= $limit; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function getTaskPrime()
{
    $expression = rand(1, 100);
    $correctAnswer = isPrime($expression) ? 'yes' : 'no';
    return [$expression, $correctAnswer];
}
