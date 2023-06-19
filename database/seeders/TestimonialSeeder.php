<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Amanda',
                'surname' => 'Milost-Acebey',
                'profession' => 'pointreef - Digital Reality',
                'text' => 'The cooperation with Vitaliy was always very good. Even spontaneous orders were carried out reliably and change requests were always implemented. We are very happy to work with Vitaliy and his team.
                ',
                'image' => 'testimonials/Amanda_2x.png',
            ],
            [
                'name' => 'Marc',
                'surname' => 'Flören',
                'profession' => 'pointreef - Digital Reality',
                'text' => 'Die zusammenarbeit war sehr angenehm. Pünktliche Abgabe und sehr gute Kommunikation. Das Ergebnis war immer nach unseren Vorstellungen.
                ',
                'image' => 'testimonials/Marc_2x.png',
            ],
            [
                'name' => 'Dustin',
                'surname' => 'Allen',
                'profession' => 'Midwest Survey Specialist LLC',
                'text' => 'Vitaliy and his entire team are among the most talented and hard working people I know. They have experience in all fields types of virtual environments across many types of deliverables.
                ',
                'image' => 'testimonials/Dustin_2x.png',
            ],
            [
                'name' => 'Austin',
                'surname' => 'Goodman',
                'profession' => 'Midwest Survey Specialist LLC',
                'text' => 'We have had Vitaliy and his team at BIMprove work on several various services. They have be able to deliver on time and done a very fine job. They also receive suggestions and advice to change very well and work to resolve the issue promptly. Very satisfied with the work they have done.
                ',
                'image' => 'testimonials/Austin_2x.png',
            ],
            [
                'name' => 'Ingmar',
                'surname' => 'Aija',
                'profession' => 'Infrakit',
                'text' => "I can strongly recommend cooperation with Vitaliy and his crew. Work is done fast, properly and there's always some pleasant surprises in high quality results. Hope our cooperation will continue as seamlessly for the next decade at least!
                ",
                'image' => 'testimonials/Ingmar_2x.png',
            ],
            [
                'name' => 'Peter ',
                'surname' => 'Bellingham',
                'profession' => 'Project Surveyors',
                'text' => "Vitaliy and his colleagues at BIMProve have proven over the years to be invaluable to me. They have demonstrated a high level of expertise when working with MEP in Revit and can always be relied upon to provide a professional and accurate service.
                ",
                'image' => 'testimonials/Peter_2x.png',
            ],
        ]);
    }
}
