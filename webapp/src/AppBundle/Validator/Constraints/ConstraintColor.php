<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ConstraintColor extends Constraint
{
    public $message = 'Không hợp lệ.';
}