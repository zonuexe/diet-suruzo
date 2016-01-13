<?php

namespace DietSuruzo;

final class Route implements \Dietcube\RouteInterface
{
    public function definition(\Pimple\Container $container)
    {
        return [
            ['GET', '/', function () {
                echo "ダイエット!!! するぞ!!!!!\n";
            }]
        ];
    }
}
