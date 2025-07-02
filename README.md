<h1 align="center">🧙‍♂️✨ WizardCLI</h1>
<p align="center"><b>The magical PHP CLI toolkit — add color, tables, progress bars & ASCII Art to your terminal!</b></p>

<p align="center">
  <a href="https://github.com/WizardLoop/WizardCLI/blob/main/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue" alt="MIT License"></a>
  <a href="tests/WizardCLITest.php"><img src="https://img.shields.io/badge/tests-PHPUnit-informational" alt="Tests"></a>
  <a href="https://packagist.org/packages/wizardloop/envloader"><img src="https://img.shields.io/packagist/v/wizardloop/envloader?color=blue" alt="Packagist"></a>
  <a href="https://packagist.org/packages/wizardloop/envloader"><img src="https://img.shields.io/packagist/dt/wizardloop/envloader?color=blue" alt="Packagist Downloads"></a>
  <a href="https://github.com/WizardLoop/WizardCLI"><img src="https://github.com/WizardLoop/WizardCLI/actions/workflows/ci.yml/badge.svg" alt="Build Status"></a>
</p>

---

<p align="center">
  <b>Turn your boring terminal into a magical world!<br>
  Add colors, enchanting tables, spellbinding progress bars, and wizardly ASCII art banners to any PHP console application.</b>
</p>

---

## ✨ Features

- 🌈 **Colors & Styles** — Print colored and styled text in seconds
- 🪄 **ASCII Art** — Wizard banners & magical terminal art
- 📊 **Tables** — Clean, beautiful table rendering for your data
- ⏳ **Progress Bars** — Show task progress with charm and multiple themes
- 🎩 **Multiple Themes** — Wizard, Sorcerer, Dark, Gold & more
- 💎 **Modern API** — Easy to use, works everywhere PHP runs

---

## 🚀 Installation

```bash
composer require wizardloop/wizardcli
```

---

## 🪄 Quick Example

```php
use WizardCLI\WizardCLI;

require 'vendor/autoload.php';

$cli = new WizardCLI(['theme' => 'wizard']);

$cli->art("WizardCLI"); // Magic banner
$cli->color("Welcome to the magical CLI!", "magenta+bold");
$cli->table(["Name", "Spell"], [
    ["Merlin", "Invisibility"],
    ["Morgana", "Fireball"]
]);
$cli->progressBar(100, "Casting spell...");
```

---

## 🌟 More Examples

**Progress Bar**
```php
$cli->progressBar(30, "Brewing potion");
for ($i = 1; $i <= 30; $i++) {
    usleep(40000);
    $cli->progressAdvance();
}
$cli->progressFinish();
```

**ASCII Art**
```php
$cli->art("✨ Wizard CLI ✨");
```

**Table**
```php
$cli->table(["Wizard", "Power"], [
    ["Gandalf", "Lightning"],
    ["Harry", "Expelliarmus"]
]);
```

See [examples/](examples/) for more!

---

## 🧪 Run Tests

```bash
composer test
```

---

## 🛠️ Contributing

Pull requests, issues, and magical ideas are very welcome!  
See [CONTRIBUTING.md](.github/CONTRIBUTING.md) for details.

<p align="center">
  <a href="https://github.com/WizardLoop/WizardCLI/issues/new?assignees=&labels=bug&template=bug_report.yml"><img src="https://img.shields.io/badge/-Report%20Bug-red?style=for-the-badge" alt="Report Bug"></a>
  <a href="https://github.com/WizardLoop/WizardCLI/issues/new?assignees=&labels=enhancement&template=feature_request.yml"><img src="https://img.shields.io/badge/-Request%20Feature-blueviolet?style=for-the-badge" alt="Request Feature"></a>
  <a href="https://github.com/WizardLoop/WizardCLI/issues/new?assignees=&labels=question&template=improvement_question.yml"><img src="https://img.shields.io/badge/-Ask%20Question-yellow?style=for-the-badge" alt="Ask Question"></a>
</p>

---

## 🧙‍♂️ Connect

- Telegram: [wizardloop.t.me](https://wizardloop.t.me/)
- GitHub: [WizardLoop](https://github.com/WizardLoop)

---

## 📄 License

[MIT License](LICENSE)  
Made with 🪄 by [WizardLoop](https://github.com/WizardLoop)

---

<p align="center"><b>✨ Time for magic in your terminal! ✨</b></p>
