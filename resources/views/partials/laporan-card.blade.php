<div style="
    background-color: white;
    border: 2px solid #d90429;
    border-radius: 10px;
    padding: 15px 20px;
    margin-bottom: 15px;
    width: 350px;
    box-shadow: 0 2px 6px rgba(217, 4, 41, 0.15);
">
    <p style="margin: 5px 0;"><strong>Nama Pelapor:</strong> {{ $item['nama'] }}</p>
    <p style="margin: 5px 0;"><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
    <p style="margin: 5px 0;"><strong>Tinggi Genangan:</strong> {{ $item['tinggi_air'] }} cm</p>

    @if ($item['tinggi_air'] < 30)
        <span style="background:#ffc107; color:#7a0019; padding:4px 10px; border-radius:5px; font-weight:bold;">Waspada</span>
    @elseif ($item['tinggi_air'] <= 70)
        <span style="background:#fd7e14; color:white; padding:4px 10px; border-radius:5px; font-weight:bold;">Siaga</span>
    @else
        <span style="background:#d90429; color:white; padding:4px 10px; border-radius:5px; font-weight:bold;">Awas</span>
    @endif
</div>