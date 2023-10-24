<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTile
{
    protected $tile = true;

    public function getTile(): bool
    {
        return $this->tile;
    }

    public function setTile(bool $tile): self
    {
        $this->tile = $tile;

        return $this;
    }
}
