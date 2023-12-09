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
                'level' => '2nd',
                'profession' => 'pointreef - Digital Reality',
                'date' => 'February 14, 2023',
                'text' => 'The cooperation with Vitaliy was always very good. Even spontaneous orders were carried out reliably and change requests were always implemented. We are very happy to work with Vitaliy and his team.
                ',
                'image' => 'testimonials/Amanda_2x.webp',
            ],
            [
                'name' => 'Marc',
                'surname' => 'Flören',
                'level' => '2nd',
                'profession' => 'pointreef - Digital Reality',
                'date' => 'January 18, 2023',
                'text' => 'Die zusammenarbeit war sehr angenehm. Pünktliche Abgabe und sehr gute Kommunikation. Das Ergebnis war immer nach unseren Vorstellungen.
                ',
                'image' => 'testimonials/Marc_2x.webp',
            ],
            [
                'name' => 'Dustin',
                'surname' => 'Allen',
                'level' => '1nd',
                'profession' => 'Midwest Survey Specialist LLC',
                'date' => 'January 16, 2023',
                'text' => 'Vitaliy and his entire team are among the most talented and hard working people I know. They have experience in all fields types of virtual environments across many types of deliverables.
                ',
                'image' => 'testimonials/Dustin_2x.webp',
            ],
            [
                'name' => 'Austin',
                'surname' => 'Goodman',
                'level' => '2nd',
                'profession' => 'Midwest Survey Specialist LLC',
                'date' => 'January 16, 2023',
                'text' => 'We have had Vitaliy and his team at BIMprove work on several various services. They have be able to deliver on time and done a very fine job. They also receive suggestions and advice to change very well and work to resolve the issue promptly. Very satisfied with the work they have done.
                ',
                'image' => 'testimonials/Austin_2x.webp',
            ],
            [
                'name' => 'Ingmar',
                'surname' => 'Aija',
                'level' => '2nd',
                'profession' => 'Infrakit',
                'date' => 'April 28, 2020',
                'text' => "I can strongly recommend cooperation with Vitaliy and his crew. Work is done fast, properly and there's always some pleasant surprises in high quality results. Hope our cooperation will continue as seamlessly for the next decade at least!
                ",
                'image' => 'testimonials/Ingmar_2x.webp',
            ],
            [
                'name' => 'Peter ',
                'surname' => 'Bellingham',
                'level' => '2nd',
                'profession' => 'Project Surveyors',
                'date' => 'April 19, 2022',
                'text' => "Vitaliy and his colleagues at BIMProve have proven over the years to be invaluable to me. They have demonstrated a high level of expertise when working with MEP in Revit and can always be relied upon to provide a professional and accurate service.
                ",
                'image' => 'testimonials/Peter_2x.webp',
            ],
        ]);
    }
}
