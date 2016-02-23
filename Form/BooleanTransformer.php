<?php

namespace Form;


use Symfony\Component\Form\DataTransformerInterface;

class BooleanTransformer implements DataTransformerInterface
{
    const TYPE_TRUE = 1;
    const TYPE_FALSE = 0;

    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
        if ($value === true || (int) $value == self::TYPE_TRUE) {
            return self::TYPE_TRUE;
        }

        return self::TYPE_FALSE;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($value)
    {
        if ($value == self::TYPE_TRUE) {
            return true;
        }

        return false;
    }

}