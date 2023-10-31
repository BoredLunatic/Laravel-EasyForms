<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNumbers
{
    protected $numbers = false;

    public function getNumbers(): bool
    {
        return $this->numbers;
    }

    public function setNumbers(bool $numbers): self
    {
        $this->numbers = $numbers;

        return $this;
    }
}
