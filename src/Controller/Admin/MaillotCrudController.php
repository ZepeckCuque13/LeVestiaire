<?php

namespace App\Controller\Admin;

use App\Entity\Maillot;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MaillotCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Maillot::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('annee'),
            TextField::new('equipe'),
            AssociationField::new('vestiaire'),
            
        ];
    }
    
}
