<?php

use Klein\Klein;
use Latte\Engine;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;

final class PortfolioRouter implements IRouter
{

    /**
     * @param Klein $klein
     */
    public function create(Klein $klein)
    {
        $klein->respond(function (Request $request, Response $response, ServiceProvider $service) {

            /** @var Engine $latte */
            $latte = $service->latte;
            $file = $service->viewDir . '/index.latte';

            $latte->render($file, $service->latteParams);
        });
    }
}