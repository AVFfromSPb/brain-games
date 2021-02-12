<?php

namespace BrainGames\src\Games\Even;

function getTaskEven()
{
    $expressionQuestion = rand(1, 100);
    $correctAnswer = $expressionQuestion % 2 === 0 ? 'yes' : 'no';
    return [$expressionQuestion, $correctAnswer];
}
