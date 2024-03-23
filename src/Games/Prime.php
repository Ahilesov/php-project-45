<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num == 1) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function basicLogicGame(): void
{
    $getDataGame = function () {

        $question = rand(1, 30);
        $answer = (isPrime($question) ? 'yes' : 'no');

        return [$question, $answer];
    };

    startGame(TASK_TEXT, $getDataGame);
}
