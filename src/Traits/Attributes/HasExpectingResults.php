<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasExpectingResults
{
    protected $expecting_results = TRUE;

    public function getExpectingResults(): bool
    {
        return $this->expecting_results;
    }

    public function setExpectingResults(bool $expecting_results): self
    {
        $this->expecting_results = $expecting_results;
        return $this;
    }
}
