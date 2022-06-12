<?php

namespace Abordage\HtmlMinBenchmark\Tests;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\OutputTimeUnit;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class TimeConsumerBench
{
    protected string $html;

    public function setUp(): void
    {
        $this->html = file_get_contents(__DIR__ . '/../assets/sources/packagist.org.html');
    }

    /**
     * @BeforeMethods({"setUp"})
     * @Revs(100)
     * @Iterations(3)
     * @OutputTimeUnit("milliseconds")
     */
    public function benchAbordageHtmlMin(): void
    {
        $consumer = new \Abordage\HtmlMin\HtmlMin();
        $consumer->minify($this->html);
    }

    /**
     * @BeforeMethods({"setUp"})
     * @Revs(100)
     * @Iterations(3)
     * @OutputTimeUnit("milliseconds")
     */
    public function benchVokuHtmlMin(): void
    {
        $consumer = new \voku\helper\HtmlMin();
        $consumer->doRemoveSpacesBetweenTags();
        $consumer->minify($this->html);
    }
}
