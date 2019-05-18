<?php

namespace mlmgreenwayru;

use mlmgreenwayru\Handlers\Posttypes;

class App
{
    public static function init()
    {
        Posttypes::init();
    }
}
