@extends('layouts.app')

@section('content')

<header class="cv-header">
 
    @include('partials.header')
</header>


<main class="cv-content-wrapper">
  

    @if(!empty($profil))
        <x-section title="Profil">
            <p class="profil-teks">
                {{ $profil }}
            </p>
        </x-section>
    @endif


    @if(!empty($pengalaman) && count($pengalaman) > 0)
        <x-section title="Pengalaman Kerja">
            @foreach($pengalaman as $p)
                <x-cv-item 
                    :jabatan="$p['jabatan']"
                    :perusahaan="$p['perusahaan']"
                    :periode="$p['periode']"
                    :deskripsi="$p['deskripsi']"
                />
            @endforeach
        </x-section>
    @endif

    @if(!empty($organisasi) && count($organisasi) > 0)
        <x-section title="Pengalaman Organisasi">
            @foreach($organisasi as $org)
                <x-cv-item 
                    :jabatan="$org['jabatan']"
                    :perusahaan="$org['perusahaan']"
                    :periode="$org['periode']"
                    :deskripsi="$org['deskripsi']"
                />
            @endforeach
        </x-section>
    @endif

    @if(!empty($pendidikan) && count($pendidikan) > 0)
        <x-section title="Pendidikan">
            @foreach($pendidikan as $edu)
                <x-cv-item 
                    :jabatan="$edu['gelar']"
                    :perusahaan="$edu['institusi']"
                    :periode="$edu['periode']"
                />
            @endforeach
        </x-section>
    @endif
    @if(!empty($keahlian) && count($keahlian) > 0)
        <x-section title="Keahlian">
            <ul class="keahlian-list">
                @foreach($keahlian as $k)
                    <li>{{ $k }}</li>
                @endforeach
            </ul>
        </x-section>
    @endif

</main>
@endsection

