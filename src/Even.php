<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_DIGITS = 3;
function determineParity(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= NUMBER_OF_DIGITS; $i++) {

        $number = rand(1, 20);
        line("Question: %s!", $number);
        $answer = strtolower(prompt('Your answer'));
        $isEven = isEven($number);

        if ($isEven === $answer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $isEven);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function isEven(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}