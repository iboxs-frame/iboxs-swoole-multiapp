<?php

namespace IBoxs\SwooleMultiApp;

class Service extends \iboxs\Service
{

    /**
     * 服务启动
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('iboxs\swoole\Http', Http::class);
    }

}
