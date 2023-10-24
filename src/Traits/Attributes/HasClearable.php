<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasClearable
{
    use HasClearIcon;

    protected $clearable = false;

    public function getClearable(): bool
    {
        return $this->clearable;
    }

    public function setClearable(bool $clearable): self
    {
        $this->clearable = $clearable;

        return $this;
    }
}
