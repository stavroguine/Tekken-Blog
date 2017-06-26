<?php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Articles;

class ArticlesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Articles();
        $blog1->setTitle('Tekken 7 Out Today, Harada Talks History, Future of Fighting Games');
        $blog1->setBlog(' It is difficult to speak in general terms about complexity. I don’t believe that Tekken is complex. If it were complex, it probably wouldn’t have sold 44 million copies and be the best-selling fighting game it is today. Some people in the FGC may say it is complex, but then others even say you can win in Tekken by button mashing, which sounds contradictory.

        In fact, many techniques can easily be performed by “button mashing,” but this also means it could be said the game is accessible to a wide audience. It is frustrating when I see the same person say that Tekken is very technical, and thus difficult, but then says that it is a button masher with no depth in other instances. In actuality, I believe the game is easy for anyone to pick up and play, yet difficult to master if you want to compete at a tournament level.

        However, the fan base is about 70% casual. Otherwise, it would be much too difficult to sell 44 million copies. Half of the 44 million is from Europe, with the next biggest fanbase coming from the US, and most of the players will never go to a tournament.

        Special effort was made to ensure that Tekken 7 was more accessible than past installments. Getting up after being knocked down was made more simple, as well as the controls. The new mechanics also are quite simple. Long-time fans of the series have been saying this is the easiest Tekken for newcomers to pick up, and we have seen a large influx of new players for the arcade version in Japan and Asia. This was achieved because we have a good balance of breaking down/discarding what we have built up, and creating new content and mechanics on that streamlined base. ');
        $blog1->setImage('tekken.jpg');
        $blog1->setAuthor('Toto');
        $blog1->setTags('tekken');
        $blog1->setCreated(new \DateTime("2015-11-25 19:14:13"));
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Articles();
        $blog2->setTitle('Tekken’ It to the Streets');
        $blog2->setBlog('Sid and Ryan test their improvisation skills on this week’s episode as they slam that record button with very little preparation! Ryan puts on his formal attire and interviews Sid (someone with no direct connection to the Tekken 7 development team) about Tekken 7. What’s new in this entry of the long-running series? How will new players feel jumping in? Will Sid ever actually give Final Fantasy XIV a chance? All this, and more!

        Enjoy the show!');
        $blog2->setImage('tekken2.jpg');
        $blog2->setAuthor('Popol');
        $blog2->setTags('tekken, fight');
        $blog2->setCreated(new \DateTime("2014-08-13 17:49:28"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Articles();
        $blog3->setTitle('Tekken 7 Hits PS4 on June 2');
        $blog3->setBlog('This is Dalton from Bandai Namco and I’m excited to announce that the next chapter in the legendary Tekken series will finally land in the hands of fighting game fans on June 2, 2017 when Tekken 7 hits PS4!

        With the faithful 3D battle system intact, Tekken 7 takes the franchise to the next level with photorealistic graphics and innovative features and fighting mechanics. Select characters from an expansive roster of your favorites and new challengers, each with a distinct set of deadly techniques, martial arts moves, and combos.');
        $blog3->setImage('tekken3.jpg');
        $blog3->setAuthor('John');
        $blog3->setTags('ps4, tekken, june');
        $blog3->setCreated(new \DateTime("2013-12-27 20:19:56"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $manager->flush();

        $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
        $this->addReference('blog-3', $blog3);

    }


    public function getOrder()
    {
        return 1;
    }

}
