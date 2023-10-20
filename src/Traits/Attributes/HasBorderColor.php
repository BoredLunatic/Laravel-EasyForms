<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBorderColor
{
    protected $border_color;

    public function getBorderColor(): string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): self
    {
        $this->border_color = $border_color;
        return $this;
    }
}
