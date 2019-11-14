<?php

declare(strict_types=1);

/*
 * This file is part of Oveleon Fake Headline Bundle.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoFakeHeadlineBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Oveleon\ContaoFakeHeadlineBundle\ContaoFakeHeadlineBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoFakeHeadlineBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['fake-headline']),
        ];
    }
}
