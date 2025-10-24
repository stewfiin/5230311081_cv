<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cvController extends Controller
{
    public function show()
    {
        $data = [
            'foto' => 'images/pfp.jpg',
            'nama' => 'Dimas Primo Hadrian',
            'jabatan_header' => 'Mahasiswa Sistem Informasi', 
            'profil' => 'Nama Saya Dimas Primo Hadrian, Saya mahasiswa Sistem Informasi dengan pengalaman kerja di bidang industri kreatif, juga aktif berorganisasi di perkuliahan. Pemahaman 
            saya dalam materi perkuliahan memungkinkan saya untuk ikut serta berkontribusi pada proyek yang membutuhkan solusi kreatif dan inovatif.',
            

            'telepon' => '0821-2461-7235',
            'email' => 'dimasprimohadrians@example.com',
            'linkedin' => 'linkedin.com/in/Dimasprimohadrian',
           

            'pengalaman' => [
                [
                    'jabatan' => 'UI/UX Designer & Penanggung Jawab Proyek [MAGANG]',
                    'perusahaan' => 'PT. Rumah Logic Indonesia',
                    'periode' => 'Oktober 2022-Desember 2022',
                    'deskripsi' => [
                        'Membuat dan mendesain rancangan tampilan untuk aplikasi
 serta menjadi penanggung jawab dalam berjalan nya proyek
 aplikasi Inventory Management System.'
                    ]
                ],
                [
                    'jabatan' => 'Videograpgher & Fotographer (Pekerja Lepas)',
                    'perusahaan' => 'PT. Ardena Food',
                    'periode' => 'November 2021 - Juli 2022',
                    'deskripsi' => [
                        ' Mendokumentasikan acara yang diikuti perusahaan maupun
 milik perusahaan dan membuat video yang menarik tentang
 acara tersebut'
                    ]
                ]
            ],
            'organisasi' => [
                [
                    'jabatan' => 'Koordinator Publikasi Desain dan Dokumentasi Dalam UKM Campoer Seni',
                    'perusahaan' => 'Pameran Besar Fotografi dan Seni Rupa UKM Campoer Seni',
                    'periode' => 'Maret 2024 - Juli 2024',
                    'deskripsi' => [
                        'Bertanggung jawab memimpin dan mengkoordinasi tim media untuk memastikan strategi komunikasi acara berjalan efektif, mencakup perencanaan konten, pengelolaan platform publikasi, dan menjamin liputan visual pameran. Peran ini berfokus pada promosi acara, branding, dan keterlibatan audiens untuk kesuksesan pameran seni rupa dan fotografi.',
                    ],
                ],
                [
                    'jabatan' => 'Koordinator Publikasi Desain dan Dokumentasi Dalam UKM Campoer Seni',
                    'perusahaan' => 'UKM Campoer Seni',
                    'periode' => 'September 2024 - September 2025',
                    'deskripsi' => [
                        'Memimpin seluruh kegiatan yang berkaitan dengan identitas visual dan arsip organisasi, termasuk mengelola dan memperbarui website resmi UKM sebagai pusat informasi utama. Tugas inti meliputi pengawasan desain materi publikasi, serta memastikan dokumentasi (foto dan video) seluruh program kerja dilakukan secara terstruktur dan terorganisir.',
                    ],
                ],
                [
                    'jabatan' => 'Anggota Pengembangan Sumber Daya Manusia',
                    'perusahaan' => 'UKM Campoer Seni',
                    'periode' => 'Oktober 2024',
                    'deskripsi' => [
                        'Berperan aktif dalam tim PSDM dengan fokus pada peningkatan kualitas dan performa anggota. Kontribusi meliputi implementasi kebijakan untuk mengelola dan memastikan sumber daya manusia di UKM Campoer Seni terdistribusi secara efektif, serta membantu menjaga tingkat motivasi dan keterlibatan anggota dalam setiap kegiatan organisasi.',
                    ],
                ],
            ],
            
            'pendidikan' => [
                [
                    'gelar' => 'S1 Sistem Informasi',
                    'institusi' => 'Universitas Teknologi Yogyakarta',
                    'periode' => '2023 - Saat Ini'
                ],
                [
                    'gelar' => 'Rekayasa Perangkat Lunak',
                    'institusi' => 'SMK LETRIS INDONESIA 2',
                    'periode' => '2020-2023'
                ]
            ],
            'keahlian' => [
                'PHP', 'Html', 'CSS', 'Figma', 'Laravel',
                'MySQL', 'UI/UX', 'Bootstrap', 'Tailwind'
            ]
        ];

        return view('cv', $data);
    }
}

