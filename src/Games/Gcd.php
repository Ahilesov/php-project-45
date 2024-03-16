<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'Find the greatest common divisor of given numbers.';
function basicLogicGame(): void
{

    $getDataGame = function () {
        $randomNumber1 = rand(1, 20);
        $randomNumber2 = rand(1, 20);
        $question = "{$randomNumber1} {$randomNumber2}";

        while (true) {
            if ($randomNumber1 === $randomNumber2) {
                $answer = $randomNumber1;
                return [$question, $answer];
            }
            if ($randomNumber1 > $randomNumber2) {
                $randomNumber1 -= $randomNumber2;
            } else {
                $randomNumber2 -= $randomNumber1;
            }
        }
    };

    startGame(TASK_TEXT, $getDataGame);
}
