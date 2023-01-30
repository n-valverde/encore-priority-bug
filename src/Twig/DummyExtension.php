<?php

namespace App\Twig;

use League\Flysystem\FilesystemOperator;
use League\Flysystem\Local\LocalFilesystemAdapter;
use Twig\Extension\AbstractExtension;

/**
 * Creating a non-lazy twig extension which inject Flysystem service leads to Flysystem storage directory being created during bin/console c:c
 *
 * (Because {@see LocalFilesystemAdapter} is not configured lazy)
 */
class DummyExtension extends AbstractExtension
{

    public function __construct(private FilesystemOperator $defaultStorage)
    {
    }

}