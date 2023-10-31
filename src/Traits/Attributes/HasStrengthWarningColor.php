<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthWarningColor
{
    protected $strength_warning_color = 'warning';

    public function getStrengthWarningColor(): string
    {
        return $this->strength_warning_color;
    }

    public function setStrengthWarningColor(string $strength_warning_color): self
    {
        $this->strength_warning_color = $strength_warning_color;

        return $this;
    }
}
