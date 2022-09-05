<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\TextField;

/**
 * @internal
 * @coversNothing
 */
class TextFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = TextField::class;
        $this->fieldComponent = 'v-text-field';
    }

    public function testAComponentIsTextField()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testACounterCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setCounter('10');
        $this->assertObjectHasAttribute('counter', $field);
    }

    public function testAMaskingCanBeSetAndGet()
    {
        $test = 'Test masking';
        $field = $this->fieldClass::make();
        $field->setMasking($test);
        $this->assertSame($field->getMasking($test), $test);
    }

    public function testAMaxLengthCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setMaxLength('10');
        $this->assertObjectHasAttribute('maxlength', $field);
    }

    public function testCanGetCounter()
    {
        $field = $this->fieldClass::make();
        $field->setCounter('10');
        $this->assertTrue('10' == $field->getCounter());
    }

    public function testCanGetMaxLength()
    {
        $field = $this->fieldClass::make();
        $field->setMaxLength('10');
        $this->assertTrue('10' == $field->getMaxLength());
    }
}
