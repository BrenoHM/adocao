<?php

namespace Database\Seeders;

use App\Models\Breed;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breed::insert([
            [
                'breed' => 'Afegão ou Afghan Hound',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Leal, amigo e brincalhão'
            ],
            [
                'breed' => 'Basset hound',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Paciente, teimoso e charmoso'
            ],
            [
                'breed' => 'Beagle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Alegre, companheiro e aventureiro'
            ],
            [
                'breed' => 'Bichon frisé',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Brincalhão, curioso e afetivo'
            ],
            [
                'breed' => 'Boiadeiro australiano',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Alerta, curioso e leal'
            ],
            [
                'breed' => 'Border collie',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, leal e cheio de energia'
            ],
            [
                'breed' => 'Boston terrier',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amigável, inteligente e vivaz'
            ],
            [
                'breed' => 'Boxer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Leal, afetuoso e brincalhão'
            ],
            [
                'breed' => 'Buldogue francês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Carinhoso, leal e brincalhão'
            ],
            [
                'breed' => 'Buldogue inglês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Calmo, divertido e dócil'
            ],
            [
                'breed' => 'Bull terrier',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Travesso, brincalhão e leal'
            ],
            [
                'breed' => 'Cane corso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Protetor, leal e inteligente'
            ],
            [
                'breed' => 'Cavalier king charles spaniel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Companheiro, alegre e afetuoso'
            ],
            [
                'breed' => 'Chihuahua',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Charmoso, animado e atrevido'
            ],
            [
                'breed' => 'Chow chow',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Calmo, leal e orgulhoso'
            ],
            [
                'breed' => 'Cocker spaniel inglês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Alegre, carinhoso e cheio de vida'
            ],
            [
                'breed' => 'Dachshund',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Corajoso, animado e inteligente'
            ],
            [
                'breed' => 'Dálmata',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Atlético, protetor e amável'
            ],
            [
                'breed' => 'Doberman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, leal e protetor'
            ],
            [
                'breed' => 'Dogo argentino',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Leal, confiável e corajoso'
            ],
            [
                'breed' => 'Dogue alemão',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amigável, paciente e dócil'
            ],
            [
                'breed' => 'Fila brasileiro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Companheiro, corajoso e amoroso'
            ],
            [
                'breed' => 'Golden retriever',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, brincalhão e leal'
            ],
            [
                'breed' => 'Husky siberiano',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amigável, trabalhador e extrovertido'
            ],
            [
                'breed' => 'Jack russell terrier',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amigável, atlético e alerta'
            ],
            [
                'breed' => 'Labrador retriever',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, carinhoso e brincalhão'
            ],
            [
                'breed' => 'Lhasa apso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Esperto, confiante e independente'
            ],
            [
                'breed' => 'Lulu da pomerânia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Animado, inteligente e cheio de personalidade'
            ],
            [
                'breed' => 'Maltês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Gentil, brincalhão e afetuoso'
            ],
            [
                'breed' => 'Mastiff inglês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Calmo, amável e leal'
            ],
            [
                'breed' => 'Mastim tibetano',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Independente, reservado e inteligente'
            ],
            [
                'breed' => 'Pastor alemão',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Confiante, corajoso e inteligente'
            ],
            [
                'breed' => 'Pastor australiano',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Esperto, trabalhador e exuberante'
            ],
            [
                'breed' => 'Pastor de Shetland',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Brincalhão, energético e esperto'
            ],
            [
                'breed' => 'Pequinês',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Afetuoso, leal e elegante'
            ],
            [
                'breed' => 'Pinscher',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Brincalhão, carinhoso e protetor'
            ],
            [
                'breed' => 'Pit bull',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, forte e leal'
            ],
            [
                'breed' => 'Poodle',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Orgulhoso, ativo e inteligente'
            ],
            [
                'breed' => 'Pug',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amoroso, temperamental e companheiro'
            ],
            [
                'breed' => 'Rottweiler',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Protetor, leal e inteligente'
            ],
            [
                'breed' => 'Schnauzer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Dócil, leal e companheiro'
            ],
            [
                'breed' => 'Shar-pei',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amoroso, companheiro e brincalhão'
            ],
            [
                'breed' => 'Shiba',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Independente, leal e alerta'
            ],
            [
                'breed' => 'Shih tzu',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Carinhoso, brincalhão e encantador'
            ],
            [
                'breed' => 'Staffordshire bull terrier',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Inteligente, corajoso e determinado'
            ],
            [
                'breed' => 'Weimaraner',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Amigável, corajoso e independente'
            ],
            [
                'breed' => 'Yorkshire',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'characteristics' => 'Destemido, carinhoso e cheio de energia'
            ],
        ]);
    }
}
