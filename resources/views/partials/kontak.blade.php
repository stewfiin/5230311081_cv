<section class="kontak-info">
    @if(isset($kontak['telepon']))
        <span>Phone: {{ $kontak['telepon'] }}</span>
    @endif
    
    @if(isset($kontak['email']))
        <span>Email: {{ $kontak['email'] }}</span>
    @endif
    
    @if(isset($kontak['linkedin']))
        <span>{{ $kontak['linkedin'] }}</span>
    @endif
</section>
