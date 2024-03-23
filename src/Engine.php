<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;
function startGame(string $taskText, \Closure $getDataGame): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskText);

    for ($i = 1; $i <= NUMBER_OF_ROUNDS; $i++) {
        $resultDataArray = $getDataGame();
        $question = $resultDataArray[0];
        $answer = (string) $resultDataArray[1];
        line("Question: %s", $question);
        $answerUser = prompt('Your answer');

        if ($answer === $answerUser) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $answer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
