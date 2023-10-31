<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenText
{
    protected $open_text = '$vuetify.open';

    public function getOpenText(): string
    {
        return $this->open_text;
    }

    public function setOpenText(string $open_text): self
    {
        $this->open_text = $open_text;

        return $this;
    }
}
