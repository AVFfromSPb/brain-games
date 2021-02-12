<?php

namespace BrainGames\src\Games\Calc;

function getTaskCalc()
{
    $firstNumber = rand(1, 20);
    $secomdNumber = rand(1, 20);
    $arithmeticSingsArray = ['+', '-', '*'];
    $arithmeticSingsRandom = $arithmeticSingsArray[rand(0, 2)];
    $expressionQuestion = "$firstNumber $arithmeticSingsRandom $secomdNumber";
    switch ($arithmeticSingsRandom) {
        case '+':
            $correctAnswer = (string) ($firstNumber + $secomdNumber);
            break;
        case '-':
            $correctAnswer = (string) ($firstNumber - $secomdNumber);
            break;
        case '*':
            $correctAnswer = (string) ($firstNumber * $secomdNumber);
            break;
    }
    return [$expressionQuestion, $correctAnswer];
}
