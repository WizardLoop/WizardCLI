<?php
namespace WizardCLI;

class ProgressBar {
    private Colors $colors;
    private array $theme;
    private int $max = 100;
    private int $current = 0;
    private string $title = "";
    private int $lastLen = 0;

    public function __construct(Colors $colors, array $theme) {
        $this->colors = $colors;
        $this->theme = $theme;
    }

    public function start(int $max, string $title = ""): void {
        $this->max = $max;
        $this->current = 0;
        $this->title = $title;
        $this->draw();
    }

    public function advance(int $step = 1): void {
        $this->current += $step;
        if ($this->current > $this->max) $this->current = $this->max;
        $this->draw();
    }

    public function finish(): void {
        $this->current = $this->max;
        $this->draw();
        echo PHP_EOL;
    }

    private function draw(): void {
        $width = 32;
        $filled = (int)($this->current / $this->max * $width);
        $bar = str_repeat("█", $filled) . str_repeat("░", $width - $filled);
        $percent = (int)($this->current / $this->max * 100);
        $line = $this->colors->color("[{$bar}]", $this->theme['primary']);
        $txt = sprintf("%s %3d%% %s", $this->title, $percent, $line);
        echo "\r" . str_pad($txt, max($this->lastLen, strlen($txt)));
        $this->lastLen = strlen($txt);
    }
}
