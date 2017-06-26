<?php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Articles;
use BlogBundle\Entity\Comment;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setUser('jean de d.');
        $comment->setComment('kikoo tekken ^^
        kewl ton blog !
        >> www.imageforblog.1s.fr
        jette un coup doeil sur ce site
        des tonne dimage fashion
        see :)
        jean de d. ');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Power-of-Ogre');
        $comment->setComment('Bon je fait ce sky tekken
        Consacrée bien sur sur les
        persos de tekken aussi des histoire
        de perso de tekken 3,5,6
        aussi je ferai des sondages
        je metterai des image trop stylé
        et de superbe vidéo..!!!!!
        bon passer une très bonne visite a+!!!');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('www.mavideo-perso.com');
        $comment->setComment('Venez voir les videos des meufs les plus craquantes ici :

        www.mavideo-perso.com

        (copier-coller dans votre navigateur) ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('sinik');
        $comment->setComment('Salut cest SINIK,
        mon nouveau site internet est en ligne

        www.sinik609.com

        Mon album sort le 10 Décembre et tous les extraits sont sur mon site internet.

        www.sinik609.com ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 08:15:20"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Cindy');
        $comment->setComment('Si tu veux faire 1 super montage va sur:

        www.seeZat.com

        Ca gere!
        a++ ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 08:56:25"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('ninatekken');
        $comment->setComment('fais gaf a nina-anna il ma insulté !!!!!!!!!!!!!!!!!!!!!!! pour rien ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 08:17:45"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('44clem96');
        $comment->setComment('euhh wai commen on publi sur internet les blog stp rep sur mon blog premiere photo si tu peu merci ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 08:25:15"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('johnnypro');
        $comment->setComment('Jadore Tekken 5 ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 08:46:08"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('kakarot13');
        $comment->setComment('salut !!

        savai tu ke si tu aller sur mon blog et ke tu me laissé 5 comZ en 1 visite tu fé parti de ma liste 1er page avec le lien . et si tu me mé 10 comZ en 1 visite je fé 1 article sur ton blog avec les appréciation et le lien .
        Ne rate pa sa !! ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 10:22:46"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('aznangelboy.skyblog.com');
        $comment->setComment('il est bien ton blog ^^
        super les montages,comeme facile,..
        viens voir mes montages si tu vx
        allez bonne continuation a toi ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2014-09-16 12:15:48"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Tekken-Enigmes');
        $comment->setComment('Nonie, jai des cours à suivre, une tonne de devoir, et une vie sociale. Mais malgré ça jarrive encore à faire mon blog, cest juste une question dorganisation.
        Enfin merci davoir répondu. ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2016-09-14 11:36:21"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('nonie');
        $comment->setComment('ta plus de sky favoris que moi, ta plus de coms, ta plus damis, c koi ce bordel... bon en tt k va lacher d coms sur mon blog bizz ');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $comment->setCreated(new \DateTime("2015-08-14 20:38:51"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('stanislas');
        $comment->setComment('hum ma lair bien bien ');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Vanessa');
        $comment->setComment('Je suis de retour, et oui jai dis à mes parents que jétais malade mais cest pour pas allé en techno, il me saoule ce prof, bon rendez vous à 4h sur msn! ');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('omar');
        $comment->setComment('Jin vs Nina mais ce nest pas loyale, elle va se faire démontée sa jolie tête blonde! ');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
