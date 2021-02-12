<?php

namespace BrainGames\src\Games\Prime;

function isPrime($number): bool
{
    if ($number !== 2 && $number % 2 === 0 || $number <= 1) {
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
    $expressionQuestion = rand(1, 100);
    $correctAnswer = isPrime($expressionQuestion) ? 'yes' : 'no';
    return [$expressionQuestion, $correctAnswer];
}
