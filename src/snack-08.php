<!-- In this kata, your task is to implement an extended version of the famous rock-paper-scissors game. The rules are as follows:

Paper covers Rock
Paper disproves Spock
Scissors cuts Paper
Scissors decapitates Lizard
Rock crushes Lizard
Rock crushes Scissors
Lizard poisons Spock
Lizard eats Paper
Spock smashes Scissors
Spock vaporizes Rock
Task:
Given two values from the above game, return the Player result as "Player 1 Won!", "Player 2 Won!", or "Draw!".

Inputs
Values will be given as one of "rock", "paper", "scissors", "lizard", "spock". -->

<?php
function rpsls($player1, $player2){

    if (($player1 === 'paper' && ($player2 === 'rock' || $player2 === 'spock')) ||
        ($player1 === 'scissors' && ($player2 === 'paper' || $player2 === 'lizard')) ||
        ($player1 === 'rock' && ($player2 === 'lizard' || $player2 === 'scissors')) ||
        ($player1 === 'lizard' && ($player2 === 'spock' || $player2 === 'paper')) ||
        ($player1 === 'spock' && ($player2 === 'scissors' || $player2 === 'rock'))) {
        
        return 'Player 1 Won!';
    } else if ($player1 === $player2) {
        return 'Draw!';
    } else {
        return 'Player 2 Won!';
    }
}