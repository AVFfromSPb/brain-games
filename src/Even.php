<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function parity()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    Line('Answer "yes" if the number is even, otherwise answer "no".');
    
    
    $winner = 3;

    for ($i = 1; $i <= $winner; $i ++) {
        $randomnumber = mt_rand(1, 100);
        line("Question: %s", $randomnumber);
        $answer = prompt('Your answer');
        $correctanswer = $randomnumber % 2 === 0 ? 'yes' : 'no';
        if ($correctanswer === $answer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctanswer'.");
            line("'Let's try again, $name!");
            return;
        }
    }
    line("Congratulation, $name !");
}



