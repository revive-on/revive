<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-10-13
 * Time: 오후 4:57
 */

namespace App\Services;

use Symfony\Component\Process\Process;

class FileService
{
    /** @var string */
    protected $filePath;
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }
    public function numberOfLines(): int
    {
        return (int) $this->executeCommand("awk 'END {print NR}' {$this->filePath}");
    }
    public function contentAfterLine(int $lineNumber)
    {
        return $this->executeCommand("awk 'NR > {$lineNumber}' {$this->filePath}");
    }
    protected function executeCommand(string $command)
    {
        $process = new Process($command);
        $process->run();
        return $process->getOutput();
    }
}