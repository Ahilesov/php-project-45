<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'What is the result of the expression?';
const OPERAND = ['+', '-', '*'];


function basicLogicGame(): void
{

    $getDataGame = function () {
        $randomNumber1 = rand(1, 20);
        $randomNumber2 = rand(1, 20);
        $key = array_rand(OPERAND);
        $operand = OPERAND[$key];
        $answer = 0;

        $question = "{$randomNumber1} {$operand} {$randomNumber2}";
        switch ($operand) {
            case '*':
                $answer = $randomNumber1 *  $randomNumber2;
                break;
            case '+':
                $answer = $randomNumber1 +  $randomNumber2;
                break;
            case '-':
                $answer = $randomNumber1 -  $randomNumber2;
                break;
        }

        return [$question, $answer];
    };

    startGame(TASK_TEXT, $getDataGame);
}
