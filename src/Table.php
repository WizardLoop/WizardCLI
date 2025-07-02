<?php
namespace WizardCLI;

class Table {
    private Colors $colors;
    private array $theme;

    public function __construct(Colors $colors, array $theme) {
        $this->colors = $colors;
        $this->theme = $theme;
    }

    public function render(array $headers, array $rows): string {
        $widths = [];
        foreach ($headers as $i => $head) {
            $widths[$i] = mb_strlen($head);
        }
        foreach ($rows as $row) {
            foreach ($row as $i => $cell) {
                $widths[$i] = max($widths[$i], mb_strlen($cell));
            }
        }
        $border = '+' . implode('+', array_map(fn($w) => str_repeat('-', $w + 2), $widths)) . '+';
        $output = [$border];
        $output[] = '| ' . implode(' | ', array_map(fn($h, $i) => str_pad($h, $widths[$i]), $headers, array_keys($headers))) . ' |';
        $output[] = $border;
        foreach ($rows as $row) {
            $output[] = '| ' . implode(' | ', array_map(fn($c, $i) => str_pad($c, $widths[$i]), $row, array_keys($row))) . ' |';
        }
        $output[] = $border;
        return $this->colors->color(implode("\n", $output), $this->theme['accent']);
    }
}
