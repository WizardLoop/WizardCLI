<?php
namespace WizardCLI;

class Colors {
    public static array $codes = [
        'reset' => '0', 'bold' => '1', 'dim' => '2', 'underline' => '4',
        'black' => '30', 'red' => '31', 'green' => '32', 'yellow' => '33',
        'blue' => '34', 'magenta' => '35', 'cyan' => '36', 'white' => '37',
        'gray' => '90',
    ];

    private array $theme;

    public function __construct(array $theme) {
        $this->theme = $theme;
    }

    public function color(string $text, string $style = ''): string {
        $styles = explode('+', $style);
        $seq = [];
        foreach ($styles as $s) {
            if (isset(self::$codes[$s])) $seq[] = self::$codes[$s];
        }
        if (empty($seq)) return $text;
        return "\033[" . implode(';', $seq) . "m$text\033[0m";
    }
}
