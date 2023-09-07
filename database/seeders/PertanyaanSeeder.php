<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertanyaans')->insert([
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Rompi Kerja.',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Sepatu Safety (Safety Shoes).',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => '. Topi/ Helmet.',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Flash light (Stick Marshaller)/ Bat
                Marshaller.',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Earmuff/ Earplug.',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Kaca mata (Glasses).',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Sarung Tangan.',
            ],
            ['jenis_pertanyaan' => '1',
                'sub_jenis' => '1',
                'pertanyaan' => 'Pemeriksaan kendaraan Marshaller.',
            ],
            ['jenis_pertanyaan' => '2',
                'sub_jenis' => '1',
                'pertanyaan' => 'Memastikan waktu dan tempat parkir pesawat
                udara.',
            ],
            ['jenis_pertanyaan' => '2',
                'sub_jenis' => '1',
                'pertanyaan' => 'Persiapan 15 menit sebelum kedatangan
                pesawat udara.',
            ],
            ['jenis_pertanyaan' => '2',
                'sub_jenis' => '1',
                'pertanyaan' => 'Koordinasi dengan pihak pihak terkait
                persiapan kedatangan pesawat udara.',
            ],
            ['jenis_pertanyaan' => '2',
                'sub_jenis' => '1',
                'pertanyaan' => 'Menjalankan sweeping FOD dan walk around
                check parking stand memastikan clear obstacle
                (Garbarata, GSE, dan personil).',
            ],
            // A. Hand Signal Marshalling (Fixed Wing)
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Menunjukan posisi marshalling.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Menunjukan lokasi parking stand.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan maju lurus.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan belok kanan.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan belok kiri.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan slow down.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan berhenti darurat (Emergency Stop).',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan berhenti (Stop).',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan pasang Rem.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => '. Gerakan stand by.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan Cock terpasang.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan lepas Rem.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan mematikan mesin pesawat.',
            ],
            ['jenis_pertanyaan' => '3',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan All Clear.',
            ],
            // B. Hand Signal Marshalling (Rotary Wing)
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan Maju lurus (Straight Forward
                Movement).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan belok kiri (Turn Left).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan belok kanan (Turn Right).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan bergeser kiri (Move Horizontally
                Left).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => ' Gerakan bergeser kanan (Move Horizontally
                Right).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan melayang (Hover).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan ke bawah (Move downward).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan ke atas (Move upward).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan landing di parking stand (Land).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan bahaya kebakaran (Fire).',
            ],
            ['jenis_pertanyaan' => '4',
                'sub_jenis' => '1',
                'pertanyaan' => 'Gerakan mesin pesawat sudah menyala
                (Engage Rotor).',
            ],

            // Pada saat setelah selesai pemanduan parkir pesawat udara: 

            [
                'jenis_pertanyaan' => '5',
                'sub_jenis' => '1',
                'pertanyaan' => 'Posisi Nose Wheel dengan Stop Bar.',
            ],
            [
                'jenis_pertanyaan' => '5',
                'sub_jenis' => '1',
                'pertanyaan' => 'Memastikan Wheel Cock dan safety cone sudah 10
                terpasang.',
            ],
        ]);
    }
}
