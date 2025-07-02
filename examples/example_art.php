<?php
require __DIR__ . '/../vendor/autoload.php';

// Array of all themes you want to demonstrate:
$themes = ['wizard', 'sorcerer', 'dark', 'gold', 'emerald'];

// List of texts to render as banners
$texts = [
    "WizardCLI",
    "ASCII Art Demo",
    "Magic Terminal",
    "Hello, World!",
    "✨ Wizard Power ✨",
    "Theme Showcase"
];

// Print each text in each theme
foreach ($themes as $theme) {
    $cli = new WizardCLI\WizardCLI(['theme' => $theme]);
    $cli->color(str_repeat("=", 15) . " Theme: " . ucfirst($theme) . " " . str_repeat("=", 15), "yellow+bold");
    foreach ($texts as $text) {
        $cli->art($text);
    }
    echo PHP_EOL;
}

// Demonstrate colored banners with different text styles
$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);
$cli->color("Magic banner (magenta+bold):", "magenta+bold");
$cli->art("🧙‍♂️ Magic Banner 🧙‍♂️");

$cli->color("Dark theme banner (cyan):", "cyan");
$cli = new WizardCLI\WizardCLI(['theme' => 'dark']);
$cli->art("Dark Mode!");

// Very long banner text
$cli = new WizardCLI\WizardCLI(['theme' => 'gold']);
$cli->color("Very long banner text:", "yellow+bold");
$cli->art("This is a very long banner text to test wrapping and alignment!");

// Unicode symbols in banner
$cli = new WizardCLI\WizardCLI(['theme' => 'emerald']);
$cli->color("Banner with Unicode:", "green+bold");
$cli->art("🌟🌍🚀✨");

// Multilingual banners
$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);
$cli->color("Multilingual banner (Hebrew):", "magenta+bold");
$cli->art("קוסם בטרמינל");

$cli->color("Multilingual banner (Russian):", "cyan+bold");
$cli->art("ВОЛШЕБНИК");

// Fancy spacing & mixed theme
foreach ($themes as $theme) {
    $cli = new WizardCLI\WizardCLI(['theme' => $theme]);
    $cli->color("Theme [$theme] - Mixed Text Demo:", "yellow+bold");
    $cli->art("✨ $theme ✨");
    echo PHP_EOL;
}

$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);
$cli->color("Done!", "magenta+bold");
