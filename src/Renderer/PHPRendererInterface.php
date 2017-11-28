<?php

namespace Gustavo\Renderer;

interface PHPRendererInterface
{
    public function setData($data);
    public function run();
}
