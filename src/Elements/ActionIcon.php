<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

// TODO Create ActionIcon Interface and Traits
class ActionIcon
{
    use Transformable;

    protected $callback;

    protected $cols;

    protected $conditions;

    protected $icon;

    protected $identifier;

    protected $name;

    protected $order = 0;

    public function __construct()
    {
        return $this;
    }

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function getCols(): int | null
    {
        return $this->cols;
    }

    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function getIcon(): Icon
    {
        return $this->icon;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public static function make()
    {
        return new static();
    }

    public function setCallback(string $callback): self
    {
        $this->callback = $callback;
        return $this;
    }

    public function setCols(int | NULL $cols): self
    {
        $this->cols = $cols;
        return $this;
    }

    public function setConditions(array $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function setIcon(Icon $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;
        return $this;
    }
}
