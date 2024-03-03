<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';
function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function basicLogicGame(): void
{

    $getDataGame = function () {
        $randomNumber = rand(1, 20);
        $answer = (isEven($randomNumber) ? 'yes' : 'no');

        return [$randomNumber, $answer];
    };

    startGame(TASK_TEXT, $getDataGame);
}