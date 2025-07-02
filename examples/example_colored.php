<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);
$cli->color("🧙 Welcome to the magical CLI!", "magenta+bold");
$cli->color("This is a test in blue.", "blue");
$cli->color("Success in green.", "green+bold");
