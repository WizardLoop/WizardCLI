<?php
namespace WizardCLI;

require_once __DIR__ . '/Colors.php';
require_once __DIR__ . '/Art.php';
require_once __DIR__ . '/Table.php';
require_once __DIR__ . '/ProgressBar.php';

class WizardCLI {
    public Colors $colors;
    public Art $art;
    public Table $table;
    public ProgressBar $progress;
    private array $themes = [
    'wizard'   => ['primary' => 'magenta', 'accent' => 'cyan', 'banner' => 'yellow+bold'],
    'sorcerer' => ['primary' => 'blue',    'accent' => 'white', 'banner' => 'blue+bold'],
    'dark'     => ['primary' => 'gray',    'accent' => 'magenta', 'banner' => 'gray+bold'],
    'gold'     => ['primary' => 'yellow',  'accent' => 'white', 'banner' => 'yellow+bold'],
    'emerald'  => ['primary' => 'green',   'accent' => 'yellow', 'banner' => 'green+bold'], 
    ];

    private string $theme = 'wizard';

    public function __construct(array $options = []) {
        $this->theme = $options['theme'] ?? 'wizard';
        $this->colors = new Colors($this->themes[$this->theme]);
        $this->art = new Art($this->colors, $this->themes[$this->theme]['banner']);
        $this->table = new Table($this->colors, $this->themes[$this->theme]);
        $this->progress = new ProgressBar($this->colors, $this->themes[$this->theme]);
    }

    public function color(string $text, string $style = ''): void {
        echo $this->colors->color($text, $style) . PHP_EOL;
    }
    public function art(string $text): void {
        echo $this->art->render($text) . PHP_EOL;
    }
    public function table(array $headers, array $rows): void {
        echo $this->table->render($headers, $rows) . PHP_EOL;
    }
    public function progressBar(int $max, string $title = ""): void {
        $this->progress->start($max, $title);
    }
    public function progressAdvance(int $step = 1): void {
        $this->progress->advance($step);
    }
    public function progressFinish(): void {
        $this->progress->finish();
    }
}
