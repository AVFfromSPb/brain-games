<?php

namespace BrainGames\src\Games\Gcd;

function getGcd($firstOperand, $secondOperand)
{
    if ($firstOperand > $secondOperand) {
        $firstNumber = $firstOperand;
        $secondNumber = $secondOperand;
    } elseif ($firstOperand < $secondOperand) {
        $firstNumber = $secondOperand;
        $secondNumber = $firstOperand;
    } else {
        return $firstNumber = $firstOperand;
    }
    $remainder = $firstNumber % $secondNumber;
    if ($remainder === 0) {
        return $secondNumber;
    }
    return getGcd($remainder, $secondOperand);
}

function getTaskGcd()
{
    $firstNumber = rand(1, 20);
    $secondNumber = rand(1, 20);
    $expressionQuestion = "$firstNumber $secondNumber";
    $correctAnswer = (string) getGcd($firstNumber, $secondNumber);
    return [$expressionQuestion, $correctAnswer];
}
