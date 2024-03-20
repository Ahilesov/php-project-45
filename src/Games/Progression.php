<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'What number is missing in the progression?';

const LENGTH_PROGRESSION = 10;
const MAX_STEP_PROGRESSION = 10;
const MAX_START_PROGRESSION = 20;

function getProgresion($startProgression, $step, $length): array
{
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $startProgression + $i * $step;
    }
    return $result;
}

function basicLogicGame(): void
{
    $getDataGame = function () {

        $startProgression = rand(1, MAX_START_PROGRESSION);
        $stepProgression = rand(1, MAX_STEP_PROGRESSION);
        $secretElementPosition = rand(0, LENGTH_PROGRESSION - 1);

        $progression = getProgresion($startProgression, $stepProgression, LENGTH_PROGRESSION);

        $answer = $progression[$secretElementPosition];

        $progression[$secretElementPosition] = "..";
        $question = implode(" ", $progression);

        return [$question, $answer];
    };

    startGame(TASK_TEXT, $getDataGame);
}
