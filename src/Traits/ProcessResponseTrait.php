<?php
namespace PlusTimeIT\EasyForms\Traits;

trait ProcessResponseTrait
{
    public function data($data): self
    {
        return $this->setData($data);
    }

    public function failed()
    {
        return $this->setResult(FALSE);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function getRedirect()
    {
        return $this->redirect;
    }

    public static function make(): self
    {
        return new static();
    }

    public function result(): bool
    {
        return $this->getResult();
    }

    public function redirect($redirect): self
    {
        return $this->setRedirect($redirect);
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    public function setRedirect($redirect): self
    {
        $this->redirect = $redirect;
        return $this;
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;
        return $this;
    }

    public function success()
    {
        return $this->setResult(TRUE);
    }

    public function wasSuccessful()
    {
        return $this->getResult();
    }

    protected $data;

    protected $result;

    protected $redirect;
}
