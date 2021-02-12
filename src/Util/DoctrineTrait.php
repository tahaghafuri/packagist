<?php declare(strict_types=1);

namespace App\Util;

use Doctrine\ORM\EntityManager;

/**
 * Requires a property Doctrine or type Doctrine\Persistence\ManagerRegistry to be present
 */
trait DoctrineTrait
{
    protected function getEM(): \Doctrine\ORM\EntityManager
    {
        return $this->doctrine->getManager();
    }
}