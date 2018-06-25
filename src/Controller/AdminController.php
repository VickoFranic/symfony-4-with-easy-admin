<?php

namespace App\Controller;

use AlterPHP\EasyAdminExtensionBundle\Controller\AdminController as BaseAdminController;
use App\Entity\Admin;

class AdminController extends BaseAdminController
{
    /**
     * @param Admin $entity
     */
    protected function prePersistEntity($entity)
    {
        $password = $this->get('security.password_encoder')->encodePassword($entity, $entity->getPassword());
        $entity->setPassword($password);
    }
}
