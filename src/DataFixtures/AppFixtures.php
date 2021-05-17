<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Site;
use App\Entity\User;
use App\Entity\Prestation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // Admin
        $user = new User;
        $user->setPrenom('Jeanne')
            ->setNom('Fourel')
            ->setEmail('labelleoreille29@gmail.com')
            ->setTelephone('0681558776')
            ->setVille('Quimper')
            ->setRoles(['ROLE_ADMIN']);

        $password = $this->encoder->hashPassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        // Site
        $site = new Site;
        $site->setPhraseTitre('Des voix en mémoire')
            ->setLienFacebook('https://www.facebook.com/La-Belle-Oreille-101656721318094/?modal=admin_todo_tour')
            ->setLienInstagram('https://www.instagram.com/foureljeanne/')
            ->setPhrase("Quoi de plus riche et émouvant que d’entendre
            et de conserver la voix de ceux que l’on aime")
            ->setDescription('Réalisation de reportage audio pour les particuliers et les professionnels')
            ->setProprietaire('Jeanne Fourel');
        
        $manager->persist($site);

        // Catégorie particuliers
        $categorie = new Categorie;
        $categorie->setNom('particuliers');

        $manager->persist($categorie);

        // Catégorie entreprises
        $categorie2 = new Categorie;
        $categorie2->setNom('entreprises');

        $manager->persist($categorie2);

        // Prestation 1
        $prestation = new Prestation;
        $prestation->setTitre("Album sonore d’événements familiaux et amicaux")
            ->setContenu("A l’occasion d’un événement familial ou amical, je me mêle aux festivités avec mon micro et interviewe les invités au sujet de l’événement. Chacun est libre de parler comme il le souhaite de la fête et des personnes fêtées. Et pour les plus timides, je sais les mettre à l’aise par de petites questions sympathiques…Au cours du montage, j’intègre entre chaque interview de courts extraits musicaux et des sons de l’ambiance de la fête.")
            ->setContenu2("Un cadeau original et précieux : un album sonore dans lequel les organisateurs de l’événement auront le plaisir de réentendre la voix de tous ceux et de toutes celles qu’ils aiment et qui auront partagé avec eux ce moment unique.")
            ->setCategorie($categorie);

        $manager->persist($prestation);

        // Prestation 2
        $prestation2 = new Prestation;
        $prestation2->setTitre("Recueil de souvenirs de vie")
            ->setContenu("Vous avez dans votre entourage ou votre cercle familial une personne qui vous est chère et dont vous voudriez conserver la voix et quelques souvenirs de vie en mémoire.
            Je me propose de réaliser son interview avec ou sans vous.
            Au cours du montage, j’intègre de courts extraits musicaux et ambiances sonores reflétant sa personnalité et sa vie.")
            ->setContenu2("Un cadeau précieux que vous pourrez conserver toute votre vie: la voix de ceux que vous aimez.")
            ->setCategorie($categorie);

        $manager->persist($prestation2);

        // Prestation 3
        $prestation3 = new Prestation;
        $prestation3->setTitre("Communication d'entreprises")
            ->setContenu("Quoi de plus innovant et original
            que de communiquer sur son entreprise
            seulement par la voix. Valoriser votre communication par un procédé simple et original : un reportage audio")
            ->setContenu2("Les formes de communication et d’information des entreprises connaissent aujourd’hui de grands changements avec l’utilisation massive des nouveaux outils numériques.
            Les entreprises doivent sans cesse innover dans leurs moyens de communication, d’information et de fidélisation de ses clients et partenaires.
            Parmi ces nouveaux moyens, le son, la voix sans l’image, revient au cœur de la communication d’entreprise.
            Elles sont de plus en plus nombreuses à utiliser ce nouveau mode de communication sous la forme de podcasts, de spots sonores, écoutables et téléchargeables sur les nouveaux outils de communication (smartphones, tablettes…)")
            ->setCategorie($categorie2);

        $manager->persist($prestation3);

        $manager->flush();
    }
}
