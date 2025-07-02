<?php
require __DIR__ . '/../vendor/autoload.php';

// Available themes: wizard, sorcerer, dark, gold, emerald (custom)
$themes = [
    "wizard"   => ['primary' => 'magenta', 'accent' => 'cyan', 'banner' => 'yellow+bold'],
    "sorcerer" => ['primary' => 'blue',    'accent' => 'white', 'banner' => 'blue+bold'],
    "dark"     => ['primary' => 'gray',    'accent' => 'magenta', 'banner' => 'gray+bold'],
    "gold"     => ['primary' => 'yellow',  'accent' => 'white', 'banner' => 'yellow+bold'],
    "emerald"  => ['primary' => 'green',   'accent' => 'yellow', 'banner' => 'green+bold'],
];

// To add a theme: patch src/WizardCLI.php and src/Colors.php as needed.
// For demo, we'll just change accent for the demo object:

foreach (['wizard', 'sorcerer', 'dark', 'gold'] as $theme) {
    $cli = new WizardCLI\WizardCLI(['theme' => $theme]);
    $cli->color("======== Theme: " . ucfirst($theme) . " ========", "magenta+bold");
    
    // 1. Basic Table Example
    $cli->color("🧙 Basic Table Example:", "cyan+bold");
    $cli->table(["Name", "Spell"], [
        ["Merlin", "Invisibility"],
        ["Morgana", "Fireball"]
    ]);
    echo PHP_EOL;

    // 2. Extended Table Example
    $cli->color("🪄 Extended Wizard Table:", "magenta+bold");
    $cli->table(["Name", "Class", "Power", "Realm"], [
        ["Gandalf", "White", "Lightning Strike", "Middle-earth"],
        ["Dumbledore", "Headmaster", "Phoenix Flame", "Hogwarts"],
        ["Saruman", "Grey", "Mind Control", "Isengard"]
    ]);
    echo PHP_EOL;
}

// Example for a custom theme (emerald) — you must define it in WizardCLI class to use this properly!
$cli = new WizardCLI\WizardCLI(['theme' => 'wizard']); // fallback if 'emerald' theme not implemented
if (in_array('emerald', array_keys($themes))) {
    $cli = new WizardCLI\WizardCLI(['theme' => 'emerald']);
    $cli->color("======== Theme: Emerald (Custom) ========", "green+bold");
}

// 3. Table With Special Characters & Unicode
$cli->color("✨ Table with Special Characters:", "yellow+bold");
$cli->table(["Wizard", "Item", "Emoji"], [
    ["Rincewind", "Luggage", "🧳"],
    ["Hermione", "Time-Turner", "⏳"],
    ["Elminster", "Staff", "🪄"]
]);
echo PHP_EOL;

// 4. Table With Long Text / Wrapping
$cli->color("📖 Table with Long Text:", "blue+bold");
$cli->table(["Wizard", "Spell Description"], [
    ["Prospero", "Controls the elements of wind and sea, can summon storms and command spirits."],
    ["Medea", "Expert in potions, transformations, and ancient Greek magic rituals."],
]);
echo PHP_EOL;

// 5. Table With Empty Cells / Null Values
$cli->color("🕳️ Table with Empty Cells:", "gray+bold");
$cli->table(["Wizard", "Familiar", "Specialty"], [
    ["Merlin", "Owl", "Prophecy"],
    ["Morgana", "", "Dark Magic"],
    ["Alatar", "Horse", ""],
    ["Radagast", null, "Beasts"]
]);
echo PHP_EOL;

// 6. Multilingual Table (Unicode)
$cli->color("🌍 Multilingual Table Example:", "green+bold");
$cli->table(["Wizard", "Country", "Symbol"], [
    ["Magician", "Israel", "✨"],
    ["Sorcière", "France", "🔮"],
    ["Wizard", "England", "🦉"],
    ["Волшебник", "Russia", "🧙‍♂️"]
]);
echo PHP_EOL;

// 7. Table With Numbers & Alignment
$cli->color("🔢 Table with Numbers:", "red+bold");
$cli->table(["Rank", "Wizard", "Points"], [
    [1, "Merlin", "1200"],
    [2, "Morgana", "1150"],
    [3, "Gandalf", "1100"],
    [4, "Saruman", "950"],
]);
