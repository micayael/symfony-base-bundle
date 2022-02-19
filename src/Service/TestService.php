<?php

namespace Micayael\Bundle\BaseBundle\Service;

class TestService
{
    /** @required */
    public string $kernelProjectDir;

    /** @required */
    public array $bundleConfig;

    public function test()
    {
        dd($this->kernelProjectDir, $this->bundleConfig);
    }
}