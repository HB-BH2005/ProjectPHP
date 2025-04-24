<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Définir les cours avec les niveaux et les matières spécifiques
        $courses = [
            // Aucune donnée de cours pour l'instant. Tu peux ajouter des cours plus tard.
        ];

        // Insérer ou mettre à jour les cours dans la base de données
        foreach ($courses as $data) {
            Course::updateOrCreate(['nom' => $data['nom']], $data); // On évite les doublons si relancé
        }
    }
}
