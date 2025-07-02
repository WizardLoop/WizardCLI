<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'sorcerer']);
$cli->art("WizardCLI");
