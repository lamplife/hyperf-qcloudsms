<?php

namespace Firstphp\HyperfQcloudsms\Facades;

declare(strict_types = 1);

/**
 * Author: 狂奔的螞蟻 <www.firstphp.com>
 * Date: 2020/10/31
 * Time: 3:40 PM
 */

use Firstphp\HyperfQcloudsms\QcloundSmsClient;
use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;


class QcloundSmsFactory
{


    public function __invoke(ContainerInterface $container)
    {
        $contents = $container->get(ConfigInterface::class);
        $config = $contents->get("sms");
        return $container->make(QcloundSmsClient::class, compact('config'));
    }

}