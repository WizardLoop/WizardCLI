<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'gold']);
$cli->table(["Wizard", "Power"], [
    ["Gandalf", "Lightning"],
    ["Harry", "Expelliarmus"]
]);
