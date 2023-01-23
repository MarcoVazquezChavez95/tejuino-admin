<?php

namespace Tejuino\Admin\Traits;

trait HasHash
{

    public function createHash()
    {
        $this->hash = uniqid();
        $this->save();
    }

}
