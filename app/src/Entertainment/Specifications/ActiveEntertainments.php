<?php

namespace App\Entertainment\Specifications;

use App\Entity\EntertainmentType;
use Happyr\DoctrineSpecification\BaseSpecification;
use Happyr\DoctrineSpecification\Spec;

class ActiveEntertainments extends BaseSpecification
{
    public function getSpec()
    {
        return Spec::andX(
            Spec::eq(EntertainmentType::PROP_ACTIVE, true)
        );
    }
}