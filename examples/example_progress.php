<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);

$cli->art("WizardCLI Progress Demo");

// Simple progress: default advance (1 step each call)
$cli->color("Casting 100 spells:", "cyan+bold");
$cli->progressBar(100, "Casting spell...");
for ($i = 1; $i <= 100; $i++) {
    usleep(20000); // 0.02 sec for demo
    $cli->progressAdvance();
}
$cli->progressFinish();

$cli->color("\nCharging Mana (5 by 5):", "magenta+bold");
$cli->progressBar(100, "Charging Mana");
for ($i = 0; $i < 20; $i++) {
    usleep(50000); // 0.05 sec
    $cli->progressAdvance(5); // advance by 5 steps at a time
}
$cli->progressFinish();

$cli->color("\nShort Demo (custom theme):", "yellow+bold");
$cli = new WizardCLI\WizardCLI(['theme' => 'gold']);
$cli->progressBar(5, "Gold theme progress");
for ($i = 0; $i < 5; $i++) {
    usleep(50000);
    $cli->progressAdvance();
}
$cli->progressFinish();
