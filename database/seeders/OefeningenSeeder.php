<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oefeningen = [
            [
                    'name' => 'Squat',
                    'description_nl' => 'Een squat is een fitnessoefening waarbij je je knieën buigt en je billen naar achter duwt.',
                    'description_en' => 'A squat is a fitness exercise where you bend your knees and push your buttocks backward.',
            ],
            [
                'name' => 'Push-up',
                'description_nl' => 'Opdrukken, ook wel push-ups, is een calisthenics krachttraining waarbij het lichaam in horizontale positie met handen en voeten op de grond op en neer wordt gedrukt met de armen.',
                'description_en' => 'Push-ups, also known as press-ups, are a calisthenics strength training exercise where the body is in a horizontal position with hands and feet on the ground, and the arms are used to push the body up and down.',
            ],
            [
                'name' => 'Dip',
                'description_nl' => 'De dip is een oefening waarmee je de triceps traint, die ongeveer zestig procent van de spiermassa in je arm vormen.',
                'description_en' => 'The dip is an exercise that targets and trains the triceps, which make up approximately sixty percent of the muscle mass in your arm.',
            ],
            [
                'name' => 'Mountain Climber',
                'description_nl' => 'De mountain climber is een fitnessoefening voor het hele lichaam, waarbij de nadruk ligt op je core. De oefening heet zo, omdat de beweging wat wegheeft van het beklimmen van een berg: terwijl je handen op de grond staan, beweeg je je knieën omstebeurt naar je ellebogen.',
                'description_en' => 'The mountain climber is a full-body fitness exercise that focuses on your core. It is named as such because the movement resembles climbing a mountain: while your hands are on the ground, you alternate moving your knees toward your elbows.',
            ],
            [
                'name' => 'Burpee',
                'description_nl' => 'Een burpee is een samengestelde fitnessoefening waarmee je vrijwel je gehele lichaam aanspreekt.',
                'description_en' => 'A burpee is a compound fitness exercise that engages nearly your entire body.',
            ],
            [
                'name' => 'Lunge',
                'description_nl' => 'Een lunge is een fitnessoefening waarbij je beurtelings met je benen vooruit stapt.',
                'description_en' => 'A lunge is a fitness exercise where you alternately step forward with your legs.',
            ],
            [
                'name' => 'Wall Sit',
                'description_nl' => 'Wall sits verwijzen naar de oefening waarbij je tegen een muur aan zit met je knieën in een hoek van 90 graden.',
                'description_en' => 'Wall sits refer to the exercise where you sit against a wall with your knees bent at a 90-degree angle.',
            ],
            [
                'name' => 'Crunch',
                'description_nl' => 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Adem in en til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit.',
                'description_en' => 'Lie on your back and place your hands on your chest. Position your feet on the ground in front of you with your knees bent at a 90-degree angle. Inhale and lift your shoulders off the ground, rolling up slowly while keeping your lower back on the ground. Gently lower your head back down and exhale.',
            ],
        ];
        DB::table('oefeningens')->insert($oefeningen);
    }
}
