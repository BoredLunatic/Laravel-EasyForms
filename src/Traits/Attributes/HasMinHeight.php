<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinHeight
{
    protected $min_height;

    public function getMinHeight(): string|int
    {
        return $this->min_height;
    }

    public function setMinHeight(string|int $min_height): self
    {
        $this->min_height = $min_height;

        return $this;
    }
}
