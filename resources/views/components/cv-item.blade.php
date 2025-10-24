
<div class="item">


    <h3>{{ $jabatan }}</h3>
    <p class="item-meta">{{ $perusahaan }} | {{ $periode }}</p>


    @php 
        $deskripsi = $deskripsi ?? []; 
    @endphp


    @if(!empty($deskripsi))
        <ul class="item-deskripsi">
            @foreach($deskripsi as $desk)
                <li>{{ $desk }}</li>
            @endforeach
        </ul>
    @endif

</div>

