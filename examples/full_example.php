<?php
require __DIR__ . '/../vendor/autoload.php';

// Theme banners
$themes = ["wizard", "sorcerer", "dark", "gold"];
foreach ($themes as $theme) {
    $cli = new WizardCLI\WizardCLI(['theme' => $theme]);
    $cli->art("Theme: " . ucfirst($theme));
    $cli->color("This is a demonstration of the '{$theme}' theme.", $theme === "gold" ? "yellow+bold" : "magenta+bold");
    echo PHP_EOL;
}

// Table Demo
$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']);
$cli->color("🧙 Table Demo (Wizard Theme):", "cyan+bold");
$cli->table(["Name", "Class", "Power", "Realm"], [
    ["Gandalf", "White", "Lightning Strike", "Middle-earth"],
    ["Dumbledore", "Headmaster", "Phoenix Flame", "Hogwarts"],
    ["Saruman", "Grey", "Mind Control", "Isengard"]
]);
echo PHP_EOL;

// Color & Text Style Demo
$cli->color("Blue text", "blue");
$cli->color("Red and bold!", "red+bold");
$cli->color("Green + underline", "green+underline");
$cli->color("🌟 Magical Bold Magenta 🌟", "magenta+bold");
$cli->color("Grey dim", "gray+dim");
$cli->color("Cyan underline", "cyan+underline");
$cli->color("Bold Underlined Gold", "yellow+bold+underline");
$cli->color("Dim Blue", "blue+dim");

echo PHP_EOL;

// Loop through all colors/styles
$styles = ["red", "green", "yellow", "blue", "magenta", "cyan", "white", "gray"];
foreach ($styles as $style) {
    $cli->color("This is $style!", "$style+bold");
}
echo PHP_EOL;

// Progress Bar Demo
$cli->color("Progress Demo (Wizard Theme):", "cyan+bold");
$cli->progressBar(20, "Preparing magic");
for ($i = 0; $i < 20; $i++) {
    usleep(35000);
    $cli->progressAdvance();
}
$cli->progressFinish();

$cli->color("Gold Theme Progress:", "yellow+bold");
$cli = new WizardCLI\WizardCLI(['theme' => 'gold']);
$cli->progressBar(5, "Gold progress");
for ($i = 0; $i < 5; $i++) {
    usleep(40000);
    $cli->progressAdvance();
}
$cli->progressFinish();

echo PHP_EOL;

// Multilingual Table Demo
$cli = new WizardCLI\WizardCLI(['theme' => 'sorcerer']);
$cli->color("🧙 Multilingual Table (Sorcerer Theme):", "magenta+bold");
$cli->table(["Wizard", "Country", "Symbol"], [
    ["loop", "magic", "✨"],
    ["Sorcière", "France", "🔮"],
    ["Wizard", "England", "🦉"]
]);
