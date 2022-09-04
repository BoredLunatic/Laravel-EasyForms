<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideDetails
{
    protected $hide_details;

    public function getHideDetails(): bool | string
    {
        return $this->hide_details;
    }

    public function setHideDetails(bool | string $hide_details): self
    {
        $this->hide_details = $hide_details;

        return $this;
    }
}
