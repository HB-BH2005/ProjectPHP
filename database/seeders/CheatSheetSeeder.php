<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CheatSheet;

class CheatSheetSeeder extends Seeder
{
    public function run(): void
    {
        // Définir les cheat sheets avec les niveaux et les matières spécifiques
        $cheatSheets = [
            // Aucune donnée de cheat sheet pour l'instant. Tu peux ajouter des cheat sheets plus tard.
        ];

        // Insérer ou mettre à jour les cheat sheets dans la base de données
        foreach ($cheatSheets as $data) {
            CheatSheet::updateOrCreate(['nom' => $data['nom']], $data); // On évite les doublons si relancé
        }
    }
}
