<?php

namespace Plugin\GiftWrapping\Service;

use Eccube\Application;

class GiftWrappingService
{
    /** @var \Eccube\Application */
    public $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

}
