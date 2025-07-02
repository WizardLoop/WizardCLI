<?php
require __DIR__ . '/../vendor/autoload.php';

$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);

$cli->art("WizardCLI Colors Demo");

$cli->color("🧙 Welcome to the magical CLI!", "magenta+bold");
$cli->color("This is a test in blue.", "blue");
$cli->color("Success in green.", "green+bold");

// Simple color
$cli->color("Blue text", "blue");
$cli->color("Red and bold!", "red+bold");
$cli->color("Green + underline", "green+underline");

// Multiline and strong styles
$cli->color("🌟 Magical Bold Magenta 🌟", "magenta+bold");
$cli->color("Grey dim", "gray+dim");
$cli->color("Cyan underline", "cyan+underline");

// Loop through all colors/styles
$styles = ["red", "green", "yellow", "blue", "magenta", "cyan", "white", "gray"];
foreach ($styles as $style) {
    $cli->color("This is $style!", "$style+bold");
}

// Combine styles
$cli->color("Bold Underlined Gold", "yellow+bold+underline");
$cli->color("Dim Blue", "blue+dim");
