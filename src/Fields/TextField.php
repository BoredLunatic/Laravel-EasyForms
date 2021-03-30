<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class TextField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
    }

    public function getCounter(): bool
    {
        return $this->counter;
    }

    public function getMaxLength(): int
    {
        return $this->maxlength;
    }

    public static function make()
    {
        return new static();
    }

    public function setCounter(bool $counter): self
    {
        $this->counter = $counter;
        return $this;
    }

    public function setMaxLength(int $maxlength): self
    {
        $this->maxlength = $maxlength;
        return $this;
    }

    protected $component = 'v-text-field';

    protected $counter = FALSE;

    protected $maxlength;

    use FieldTrait;

    use Transformable;

    public const TYPE = 'text';
}
