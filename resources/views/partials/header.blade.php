
<div class="sidebar-info">
    @if(!empty($nama))
        <h1>{{ $nama }}</h1>
    @endif

    @if(!empty($jabatan_header))
        <p class="jabatan-header">{{ $jabatan_header }}</p>
    @endif

    <div class="kontak-info">
        <h3>Informasi Kontak :</h3>
        @if(!empty($telepon))
            <p>{{ $telepon }}</p>
        @endif
        @if(!empty($email))
            <p>{{ $email }}</p>
        @endif
        @if(!empty($linkedin))
            <p>{{ $linkedin }}</p>
        @endif
        @if(!empty($github))
            <p>{{ $github }}</p>
        @endif
    </div>
</div>

<div class="sidebar-foto-container">
    @if(!empty($foto))
        <img src="{{ $foto }}" alt="Foto Profil {{ $nama ?? '' }}" class="profil-foto">
    @endif
</div>

