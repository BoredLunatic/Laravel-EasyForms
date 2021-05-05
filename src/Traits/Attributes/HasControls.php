<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasControls
{
    protected $controls = false;

    public function getControls(): bool
    {
        return $this->controls;
    }

    public function setControls(bool $controls): self
    {
        $this->controls = $controls;

        return $this;
    }
}
