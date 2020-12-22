<?php

namespace App\Controller\EasyAdmin;

use App\Entity\CrewMember;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class CrewMemberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CrewMember::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            AssociationField::new('job'),
            AssociationField::new('person'),            
            AssociationField::new('movie'),
            DateTimeField::new('createdAt')->onlyOnIndex(),
            DateTimeField::new('updatedAt')->onlyOnIndex(),
        ];
    }   
}
