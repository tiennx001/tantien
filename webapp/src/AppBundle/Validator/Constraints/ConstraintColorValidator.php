<?php
/**
 * Created by PhpStorm.
 * User: DELL-VOSTRO
 * Date: 2017-12-24
 * Time: 4:27 PM
 */

namespace AppBundle\Validator\Constraints;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use AppBundle\Entity\Color;

class ConstraintColorValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function validate($value, Constraint $constraint)
    {
        $colorRepo = $this->entityManager->getRepository(Color::class);

        foreach ($value as $colorInfo) {
            if (!$colorRepo->find($colorInfo['color'])
            || ($colorInfo['quantity'] < 0 || $colorInfo['quantity'] > 9999999999)
            || ($colorInfo['price'] < 0 || $colorInfo['price'] > 9999999999)) {
                $this->context->buildViolation($constraint->message)
//                ->setParameter('{{ string }}', $value)
                    ->addViolation();
            }
        }
    }
}