<?php
use PHPUnit\Framework\TestCase;
use WizardCLI\WizardCLI;

final class WizardCLITest extends TestCase
{
    public function testColorOutput()
    {
        $cli = new WizardCLI(['theme' => 'wizard']);
        $str = $cli->colors->color("Test", "magenta+bold");
        $this->assertStringContainsString("\033", $str);
    }

    public function testTableOutput()
    {
        $cli = new WizardCLI(['theme' => 'gold']);
        $output = $cli->table->render(["A", "B"], [["1", "2"], ["3", "4"]]);
        $this->assertStringContainsString("| A", $output);
        $this->assertStringContainsString("| 1", $output);
    }

    public function testAsciiArt()
    {
        $cli = new WizardCLI(['theme' => 'wizard']);
        $art = $cli->art->render("MAGIC");
        $this->assertStringContainsString("MAGIC", $art);
    }

    public function testProgressBar()
    {
        $cli = new WizardCLI(['theme' => 'dark']);
        ob_start();
        $cli->progressBar(10, "Load");
        $cli->progressAdvance(10);
        $cli->progressFinish();
        $output = ob_get_clean();
        $this->assertStringContainsString("%", $output);
    }
}
