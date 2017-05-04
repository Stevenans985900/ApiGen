<?php declare(strict_types=1);

namespace ApiGen\Tests\Parser\Reflection\ReflectionClassSource;

class ParentClass
{
    public const SOME_PARENT_CONSTANT = 123;

    /**
     * @var mixed
     */
    protected $someParentProperty;

    public function getSomeParentStuff()
    {
        return $this->someParentProperty;
    }
}
