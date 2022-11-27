<?php

namespace Database\Seeders;

use App\Models\Teaching;
use Illuminate\Database\Seeder;

class TeachingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teaching::factory()
        ->create([
        'teaching'=>'Front end',
        'body'=>'<p>Le front-end, c\'est la partie du développement que l\'utilisateur va voir au final, ce qui s\'affiche à l\'écran.</p>',
        ]);

        Teaching::factory()
        ->create([
        'teaching'=>'Back end',
        'body'=>'<p>Le développement back-end sert à gérer la partie que l\'utilisateur ne voit pas.</p> <p>La connection au server web, la gestion de formulaires, l\'authentification d\'utilisateurs, les bases de données, ...</p>',
        ]);

        Teaching::factory()
        ->create([
        'teaching'=>'Design',
        'body'=>'<p>Pendant la formation, tu seras amené à créer plusieurs sites ainsi que des applications mobiles.</p> <p>La création passe bien sur par une phase de design.</p> <p>Tes professeurs t\'encadreront afin de t\'enseigner les principes importants du design, l\'UX (user experience) ainsi que l\'UI (user interface).</p>',
        ]);

        Teaching::factory()
        ->create([
        'teaching'=>'Accessibilité',
        'body'=>'<p>Un point important de notre formation est l\'accessibilité web.</p> <p>Nous pensons que n\'importe qui doit pouvoir utiliser un site, peut importe ses capacités d\'accessibilité.</p> <p>Tu devras donc apprendre les bonnes pratiques d\'accessibilité afin de pouvoir créer des sites web résilients et adaptatifs.</p>',
        ]);

        Teaching::factory()
        ->create([
        'teaching'=>'Gestion de projets',
            'body'=>'<p>Dès la deuxième année, tu sera amené à créer tes propres projets, et il faudra apprendre à s\'organiser pour les mener à bien.</p> <p>Tu apprendras le processus de création d\'un site web du cahier des charges jusqu\'à la mise en ligne.</p>',
        ]);
    }
}
