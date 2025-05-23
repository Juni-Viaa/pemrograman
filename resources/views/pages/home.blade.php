@extends ('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2x1 font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>
    
    @include('components.card', [
        'imgsrc' => 'images/kakap.jpeg',
        'title' => 'Ikan Kakap Merah',
        'desc' => 'Ikan kakap merah (Lutjanus sp.) merupakan salah satu spesies ikan laut yang sangat populer di kalangan masyarakat Indonesia. Sebagai bahan baku utama dalam berbagai hidangan laut, ikan ini memiliki nilai ekonomis dan gizi yang tinggi. Dalam ekologi, jenis ikan ini adalah salah satu komponen penting dalam rantai makanan di kawasan terumbu karang. Berikut adalah penjelasan mengenai morfologi dan habitat ikan kakap merah, dan karakteristiknya.'
    ])

@endsection