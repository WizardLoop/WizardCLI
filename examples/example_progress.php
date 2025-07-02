<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'dark']);
$cli->progressBar(20, "Charging magic");
for ($i = 1; $i <= 20; $i++) {
    usleep(60000);
    $cli->progressAdvance();
}
$cli->progressFinish();
