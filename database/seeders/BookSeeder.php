<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $books = [
            [
                "name" => "Harry Potter and the Philosopher’s Stone",
                "description" => "When mysterious letters start arriving on his doorstep, Harry Potter has never heard of Hogwarts School of Witchcraft and Wizardry. They are swiftly confiscated by his aunt and uncle. Then, on Harry’s eleventh birthday, a strange man bursts in with some important news: Harry Potter is a wizard and has been awarded a place to study at Hogwarts. And so the first of the Harry Potter adventures is set to begin.",
                'type_id' => 1,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 1,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "Harry Potter and the Philosopher’s Stone.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Harry Potter and the Chamber of Secrets",
                "description" => "Throughout the summer holidays after his first year at Hogwarts School of Witchcraft and Wizardry, Harry Potter has been receiving sinister warnings from a house-elf called Dobby.

                Now, back at school to start his second year, Harry hears unintelligible whispers echoing through the corridors.

                Before long the attacks begin: students are found as if turned to stone.

                Dobby’s predictions seem to be coming true.",
                'type_id' => 1,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 1,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "Harry Potter and the Chamber of Secrets.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Harry Potter and the Prisoner of Azkaban",
                "description" => "For Harry Potter, it’s the start of another far-from-ordinary year at Hogwarts when the Knight Bus crashes through the darkness and comes to an abrupt halt in front of him.

                It turns out that Sirius Black, mass-murderer and follower of Lord Voldemort, has escaped – and they say he is coming after Harry.

                In his first Divination class, Professor Trelawney sees an omen of death in Harry’s tea leaves.

                And perhaps most frightening of all are the Dementors patrolling the school grounds with their soul-sucking kiss – in search of fresh victims.",
                'type_id' => 1,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 1,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "Harry Potter and the Prisoner of Azkaban.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Harry Potter and the Goblet of Fire",
                "description" => "The rules of the Triwizard Tournament, which is about to take place at Hogwarts, only allow wizards over the age of seventeen to enter.

                So Harry can only daydream about winning.

                Then, to his surprise, on Hallowe’en when the Goblet of Fire makes its selection, his name is picked out of the magical cup.

                Harry will face life-endangering tasks, dragons and Dark wizards.

                He’ll have to rely on the help of his friends if he is to make it through the contest alive.",
                'type_id' => 1,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 1,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "Harry Potter and the Goblet of Fire.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Vision in White",
                "description" => "After years of throwing make-believe weddings in the backyard, flowers, photography, desserts, and details are what these women do best: a guaranteed perfect, beautiful day full of memories to last the rest of your life. With bridal magazine covers to her credit, Mackensie Mac Elliot is most at home behind the camera—ready to capture the happy moments she never experienced while growing up. Her father replaced his first family with a second, and now her mother, moving on to yet another man, begs Mac for attention and money. Mac's foundation is jostled again moments before an important wedding planning meeting when she bumps into the bride-to-be's brother...an encounter that has them both seeing stars.Carter Maguire is definitely not her type: he's stable, and he's safe. He's even an English teacher at their high school alma mater. There's something about him that makes Mac think a casual fling is just what she needs to take her mind off dealing with bridezillas and screening her mother's phone calls. But a casual fling can turn into something more when you least expect it. And with the help of her three best friends—and business partners—Mac must learn how to make her own happy memories.",
                'type_id' => 3,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 2,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "VisionInWhite.jpg",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Inheritance",
                "description" => "Inheritance is the first in The Lost Bride Trilogy by #1 New York Times bestselling author Nora Roberts―a tale of tragedies, loves found and lost, and a family haunted for generations.

                1806: Astrid Poole sits in her bridal clothes, overwhelmed with happiness. But before her marriage can be consummated, she is murdered, and the circle of gold torn from her finger. Her last words are a promise to Collin never to leave him…

                Graphic designer Sonya MacTavish is stunned to learn that her late father had a twin he never knew about―and that her newly discovered uncle, Collin Poole, has left her almost everything he owned, including a majestic Victorian house on the Maine coast, which the will stipulates she must live in it for at least three years. Her engagement recently broken, she sets off to find out why the boys were separated at birth―and why it was all kept secret until a genealogy website brought it to light.

                Trey, the young lawyer who greets her at the sprawling clifftop manor, notes Sonya’s unease―and acknowledges that yes, the place is haunted…but just a little. Sure enough, Sonya finds objects moved and music playing out of nowhere. She sees a painting by her father inexplicably hanging in her deceased uncle’s office, and a portrait of a woman named Astrid, whom the lawyer refers to as “the first lost bride.” It’s becoming clear that Sonya has inherited far more than a house. She has inherited a centuries-old curse, and a puzzle to be solved if there is any hope of breaking it…",
                'type_id' => 3,
                'status_id' => 1,
                "date_publication" => '2023-10-21',
                "author_id" => 2,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "Inheritance.jpg",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "Born in Fire",
                "description" => "Three modern sisters bound by the timeless beauty of Ireland...

                The eldest Concannon sister, Maggie, is a reclusive, stubborn and free-spirited glassmaker—with a heart worth winning.

                Margaret Mary is a glass artist with an independent streak as fierce as her volatile temper. Hand-blowing glass is a difficult and exacting art, and while she may produce the delicate and the fragile, Maggie is a strong and opinionated woman, a Clare woman, with all the turbulence of that fascinating west country.

                One man, Dublin gallery owner Rogan Sweeney, has seen the soul in Maggie’s art, and vows to help her build a career. When he comes to Maggie’s studio, her heart is inflamed by their fierce attraction—and her scarred past is slowly healed by love...",
                'type_id' => 3,
                'status_id' => 1,
                "date_publication" => '1994-12-01',
                "author_id" => 2,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "bornInFire.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
            [
                "name" => "The Obsession",
                "description" => "“She stood in the deep, dark woods, breath shallow and cold prickling over her skin despite the hot, heavy air. She took a step back, then two, as the urge to run fell over her.”

                Naomi Bowes lost her innocence the night she followed her father into the woods. In freeing the girl trapped in the root cellar, Naomi revealed the horrible extent of her father’s crimes and made him infamous. No matter how close she gets to happiness, she can’t outrun the sins of Thomas David Bowes.

                Now a successful photographer living under the name Naomi Carson, she has found a place that calls to her, a rambling old house in need of repair, thousands of miles away from everything she’s ever known. Naomi wants to embrace the solitude, but the kindly residents of Sunrise Cove keep forcing her to open up—especially the determined Xander Keaton.

                Naomi can feel her defenses failing, and knows that the connection her new life offers is something she’s always secretly craved. But the sins of her father can become an obsession, and, as she’s learned time and again, her past is never more than a nightmare away.",
                'type_id' => 3,
                'status_id' => 1,
                "date_publication" => '2009-4-28',
                "author_id" => 2,
                'pages' => 165,
                'evaluation' => 4,
                "image" => "TheObsession.png",
                'content' => 'VisionInWhite.pdf',
                'price' => 100.0
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
