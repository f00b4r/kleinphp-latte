<?php

use Latte\Engine;

final class LatteService
{

    /** @var string */
    private $tempDir;

    /** @var boolean */
    private $autoRefresh;

    /** @var string */
    private $contentType = 'html';

    /**
     * @param string $tempDir
     */
    public function setTempDir($tempDir)
    {
        $this->tempDir = $tempDir;
    }

    /**
     * @param boolean $autoRefresh
     */
    public function setAutoRefresh($autoRefresh)
    {
        $this->autoRefresh = $autoRefresh;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return Engine
     */
    public function create()
    {
        $latte = new Engine;

        $latte->setTempDirectory($this->tempDir);
        $latte->setAutoRefresh($this->autoRefresh);
        $latte->setContentType($this->contentType);

        return $latte;
    }
}