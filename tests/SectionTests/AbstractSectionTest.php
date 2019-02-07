<?php

namespace LinkedInResumeParser\Tests\SectionTests;

use LinkedInResumeParser\ParsedResume;
use LinkedInResumeParser\Parser;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractSectionTest
 *
 * @package LinkedInResumeParser\Tests\SectionTests
 */
abstract class AbstractSectionTest extends TestCase
{
    /**
     * @var string
     */
    protected $samplePath;

    /**
     * @var Parser
     */
    protected $parser;

    /**
     * Setup testing variables & environment
     */
    public function setUp()
    {
        parent::setUp();

        $this->samplePath = realpath(__DIR__ . '/../samples');

        $this->parser = new Parser();
    }

    /**
     * @param string $fileName
     * @return ParsedResume
     * @throws \Exception
     * @throws \LinkedInResumeParser\Exception\FileNotFoundException
     * @throws \LinkedInResumeParser\Exception\FileNotReadableException
     * @throws \LinkedInResumeParser\Exception\ParseException
     */
    protected function parsePdf($fileName)
    {
        return $this->parser->parse($this->samplePath . '/' . $fileName);
    }
}