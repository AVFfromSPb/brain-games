<?php

namespace BrainGames\src\Games\Progression;

function getTaskProgression(): array
{
    $numberLine = 10;
    $firstNumber = rand(1, 10);
    $numberOfHidden = rand(0, 10);
    $difference = rand(1, 5);

    $progression = [];

    for ($i = 0; $i < $numberLine; $i++) {
        if ($i !== $numberOfHidden) {
            $progression[] = $firstNumber + ($difference * $i);
        } else {
            $progression[] = '..';
            $correctAnswer = (string) ($firstNumber + ($difference * $i));
        }
    }
    $expressionQuestion = implode(' ', $progression);
    return [$expressionQuestion, $correctAnswer];
}
