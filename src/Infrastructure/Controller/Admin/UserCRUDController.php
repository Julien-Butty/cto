<?php

namespace App\Infrastructure\Controller\Admin;

use App\Infrastructure\Doctrine\Entity\DoctrineUser;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCRUDController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return DoctrineUser::class;

    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des membres')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier une catégorie')
            ->setSearchFields(['label', 'description'])
            ->setPaginatorPageSize(50)
            ;
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions->remove(Crud::PAGE_INDEX, Action::NEW);
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            'email'
        ];
    }
}
