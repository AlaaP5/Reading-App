<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'J.K.Rowling',
                'birthDay' => '1965-07-31',
                'education' => 'University of Exeter',
                'country' => 'British',
                'languish' => 'English',
                'About_author' => "Joanne Rowling CH OBE FRSL (/ˈroʊlɪŋ/ ROH-ling);[1] born 31 July 1965), better known by her pen name J.K.Rowling, is a British author and philanthropist. She wrote Harry Potter, a seven-volume fantasy series published from 1997 to 2007. The series has sold over 600 million copies, been translated into 84 languages, and spawned a global media franchise including films and video games. The Casual Vacancy (2012) was her first novel for adults. She writes Cormoran Strike, an ongoing crime fiction series, under the alias Robert Galbraith.Born in Yate, Gloucestershire, Rowling was working as a researcher and bilingual secretary for Amnesty International in 1990 when she conceived the idea for the Harry Potter series. The seven-year period that followed saw the death of her mother, the birth of her first child, divorce from her first husband, and relative poverty until the first novel in the series, Harry Potter and the Philosopher's Stone, was published in 1997. Six sequels followed, concluding with Harry Potter and the Deathly Hallows (2007). By 2008, Forbes had named her the world's highest-paid author.The novels follow a boy called Harry Potter as he attends Hogwarts (a school for wizards), and battles Lord Voldemort. Death and the divide between good and evil are the central themes of the series. Its influences include Bildungsroman (the coming-of-age genre), school stories, fairy tales, and Christian allegory. The series revived fantasy as a genre in the children's market, spawned a host of imitators, and inspired an active fandom. Critical reception has been more mixed. Many reviewers see Rowling's writing as conventional; some regard her portrayal of gender and social division as regressive. There were also religious debates over the Harry Potter series.Rowling has won many accolades for her work. She has received an OBE and was made a Companion of Honour for services to literature and philanthropy. Harry Potter brought her wealth and recognition, which she has used to advance philanthropic endeavours and political causes. She co-founded the charity Lumos and established the Volant Charitable Trust, named after her mother. Rowling's charitable giving centres on medical causes and supporting at-risk women and children. In politics, she has donated to Britain's Labour Party and opposed Scottish independence and Brexit. She has publicly expressed her opinions on transgender people and related civil rights since 2017. These views have been described as transphobic by critics and LGBT rights organisations. They have divided feminists, fuelled debates on freedom of speech and cancel culture, and prompted declarations of support for transgender people from the literary, arts, and culture sectors.",
                'image' => 'authors/author.jpg'
            ],
            [
                'name' => "Nora Roberts",
                'birthDay' => '1950-11-10',
                'education' => 'Montgomery Blair High School',
                'country' => "Maryland,The United States",
                'languish' => 'English',
                'About_author' => "Nora Roberts is the #1 New York Times bestselling author of more than 200 novels, including Hideaway, Under Currents, Come Sundown, The Awakening, Legacy, and coming in November 2021 -- The Becoming -- the second book in The Dragon Heart Legacy. She is also the author of the futuristic suspense In Death series written under the pen name J.D. Robb. There are more than 500 million copies of her books in print. ",
                'image' => 'authors/noraRoberts.png'
            ],
            [
                'name' => "Fyodor Dostoevsky",
                'birthDay' => '1821-11-11',
                'education' => 'military engineering school in Russia',
                'country' => "Moscow, Russian Empire",
                'languish' => 'Russian',
                'About_author' => "Fyodor Mikhailovich Dostoevsky[a] (UK: /ˌdɒstɔɪˈɛfski/,[1] US: /ˌdɒstəˈjɛfski, ˌdʌs-/;[2] Russian: Фёдор Михайлович Достоевский[b], romanized: Fyodor Mikhaylovich Dostoyevskiy, IPA: [ˈfʲɵdər mʲɪˈxajləvʲɪdʑ dəstɐˈjefskʲɪj] ⓘ; 11 November 1821 – 9 February 1881[3][c]), sometimes transliterated as Dostoyevsky, was a Russian novelist, short story writer, essayist and journalist. Numerous literary critics regard him as one of the greatest novelists in all of world literature, as many of his works are considered highly influential masterpieces.[4][page needed]
                Dostoevsky's literary works explore the human condition in the troubled political, social, and spiritual atmospheres of 19th-century Russia, and engage with a variety of philosophical and religious themes. His most acclaimed novels include Crime and Punishment (1866), The Idiot (1869), Demons (1872), and The Brothers Karamazov (1880). His 1864 novella Notes from Underground is considered to be one of the first works of existentialist literature.[5]
                Born in Moscow in 1821, Dostoevsky was introduced to literature at an early age through fairy tales and legends, and through books by Russian and foreign authors. His mother died in 1837 when he was 15, and around the same time, he left school to enter the Nikolayev Military Engineering Institute. After graduating, he worked as an engineer and briefly enjoyed a lavish lifestyle, translating books to earn extra money. In the mid-1840s he wrote his first novel, Poor Folk, which gained him entry into Saint Petersburg's literary circles. However, he was arrested in 1849 for belonging to a literary group, the Petrashevsky Circle, that discussed banned books critical of Tsarist Russia. Dostoevsky was sentenced to death but the sentence was commuted at the last moment. He spent four years in a Siberian prison camp, followed by six years of compulsory military service in exile. In the following years, Dostoevsky worked as a journalist, publishing and editing several magazines of his own and later A Writer's Diary, a collection of his writings. He began to travel around western Europe and developed a gambling addiction, which led to financial hardship. For a time, he had to beg for money, but he eventually became one of the most widely read and highly regarded Russian writers.
                Dostoevsky's body of work consists of thirteen novels, three novellas, seventeen short stories, and numerous other works. His writings were widely read both within and beyond his native Russia and influenced an equally great number of later writers including Russians such as Aleksandr Solzhenitsyn and Anton Chekhov, philosophers Friedrich Nietzsche and Jean-Paul Sartre, and the emergence of Existentialism and Freudianism.[3] His books have been translated into more than 170 languages, and served as the inspiration for many films. ",
                'image' => 'authors/fyodor dostoevsky2.png'
            ],
            [
                'name' => "Franz Kafka",
                'birthDay' => '1883-03-07',
                'education' => 'Law at Charles University',
                'country' => "Prague, Kingdom",
                'languish' => 'German',
                'About_author' => "Franz Kafka[b] (3 July 1883 – 3 June 1924) was a German-speaking Bohemian Jewish novelist and writer from Prague. He is widely regarded as one of the major figures of 20th-century literature. His work fuses elements of realism and the fantastic.[4] It typically features isolated protagonists facing bizarre or surrealistic predicaments and incomprehensible socio-bureaucratic powers. It has been interpreted as exploring themes of alienation, existential anxiety, guilt, and absurdity.[5] His best known works include the novella The Metamorphosis and novels The Trial and The Castle. The term Kafkaesque has entered English to describe absurd situations like those depicted in his writing.[6]
                Kafka was born into a middle-class German-speaking Czech Jewish family in Prague, the capital of the Kingdom of Bohemia, then part of the Austro-Hungarian Empire (today the capital of the Czech Republic).[7] He trained as a lawyer, and after completing his legal education was employed full-time by an insurance company, forcing him to relegate writing to his spare time. Over the course of his life, Kafka wrote hundreds of letters to family and close friends, including his father, with whom he had a strained and formal relationship. He became engaged to several women but never married. He died in obscurity in 1924 at the age of 40 from tuberculosis.
                Kafka was a prolific writer, spending most of his free time writing, often late in the night. He burned an estimated 90 percent of his total work due to his persistent struggles with self-doubt. Much of the remaining 10 percent is lost or otherwise unpublished. Few of Kafka's works were published during his lifetime; the story collections Contemplation and A Country Doctor, and individual stories, such as his novella The Metamorphosis, were published in literary magazines but received little attention.
                In his will, Kafka instructed his close friend and literary executor Max Brod to destroy his unfinished works, including his novels The Trial, The Castle, and Amerika, but Brod ignored these instructions and had much of his work published. Kafka's writings became famous in German-speaking countries after World War II, influencing German literature, and its influence spread elsewhere in the world in the 1960s. It has also influenced artists, composers, and philosophers.",
                'image' => 'authors/franz kafka.png'
            ],
        ];
        foreach($authors as $author){
            Author::create($author);
        }
    }
}
