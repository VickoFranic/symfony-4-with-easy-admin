<?php

namespace App\Controller;

use AlterPHP\EasyAdminExtensionBundle\Controller\AdminController;
use App\Entity\User;

class UserController extends AdminController
{
    /**
     * @param User $entity
     */
    protected function prePersistEntity($entity)
    {
        $password = $this->get('security.password_encoder')->encodePassword($entity, $entity->getPassword());
        $entity->setPassword($password);
    }
}
