<?php
namespace WizardCLI;

class Art {
    private Colors $colors;
    private string $bannerStyle;

    public function __construct(Colors $colors, string $bannerStyle) {
        $this->colors = $colors;
        $this->bannerStyle = $bannerStyle;
    }

    public function render(string $text): string {
        $art = [
            "        /^\\",
            "       /   \\      _    $text",
            "      /_____\\    /_\\   ",
            "      |     |   ( o )  ",
            "      |     |    | |   ",
            "      |     |   /___\\  ",
            "     /|##!##|\\  |   | ",
            "    / |##!##| \\ |   | ",
            "   /  |##!##|  \\|   | ",
            "      ------------   ",
        ];
        return $this->colors->color(implode("\n", $art), $this->bannerStyle);
    }
}
