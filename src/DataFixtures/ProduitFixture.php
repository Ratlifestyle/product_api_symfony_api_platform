<?php


namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProduitFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 100; $i++) {
            $produit = new Produit();
            $produit->setNom('nom' . $i);
            $produit->setStock($i);
            $manager->persist($produit);
        }
        $manager->flush();
    }
}
