<?php

namespace App\Controller\Admin;

use App\Entity\Catégorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CatégorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Catégorie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
