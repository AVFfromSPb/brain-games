<?php

namespace BrainGames\src\Games\Even;

function getTaskEven()
{
    $expression = rand(1, 100);
    $correctAnswer = $expression % 2 === 0 ? 'yes' : 'no';
    return [$expression, $correctAnswer];
}
