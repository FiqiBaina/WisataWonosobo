<x-layout>
<style>
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .carousel {
        position: relative;
    }
    .carousel-indicators.custom-indicators {
        position: absolute;
        bottom: 100px;
        right: 150px;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        margin: 0;
        gap: 14px;
        z-index: 2;
    }
    .carousel-indicators.custom-indicators [data-bs-target] {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: #fff;
        opacity: 0.5;
        transition: opacity 0.3s;
        border: none;
        margin: 0;
    }
    .carousel-indicators.custom-indicators .active {
        opacity: 1;
    }
    .carousel-item img {
        width: 100vw;
        height: 691px;
        object-fit: cover;
    }
    .pembungkus2 {
      margin: 0 142px;
    }
    .tag {
        color: white;
        font-size: 18px;
        font-weight: 400;
        margin: 0;
    }
    .judul {
        color: white;
        font-size: 45px;
        font-weight: 700;
        margin: 0;
    }
    .deskripsi {
        color: white;
        font-size: 18px;
        font-weight: 400;
        max-width: 800px;
    }
    .kategori {
        font-size: 22px;
        color: #FFFFFF;
        font-weight: 700;
        margin-bottom: 32px;
    }
    .judulrekomendasi {
      font-size: 16px;
      font-weight: 600;
    }
    .deskripsirekomendasi {
      font-size: 14px;
      font-weight: 400;
    }
    .itemwisataberanda {
      width: 214px;
      height: 324px;
    }
    .pembungkusgambarberanda {
      height: 204px;
      width: 100%;
    }
    .deskripsicarousel {
        width: 608px;
        margin-left: 100px;
    }
    .grid {
        margin-bottom: 64px;
    }

    @keyframes bounce-one {
        0%, 20%, 100% {
            transform: translateY(0);
        }
        10% {
            transform: translateY(-20px);
        }
    }

    @media (max-width: 768px) {
        .tag {
            color: white;
            font-size: 12px;
            font-weight: 400;
            margin: 0;
        }
        .pembungkus2 {
            margin: 0 30px;
        }
        .judul {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }
        .deskripsi {
            color: white;
            font-size: 12px;
            font-weight: 400;
            max-width: 300px;
        }
        .kategori {
            font-size: 14px;
            color: #FFFFFF;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .judulrekomendasi {
            font-size: 12px;
            font-weight: 600;
        }
        .deskripsirekomendasi {
            font-size: 12px;
            font-weight: 400;
        }
        .itemwisataberanda {
            width: 172px;
            height: 267px;
        }
        .pembungkusgambarberanda {
            height: 164px;
            width: 100%;
        }
        .deskripsicarousel {
            width: 300px;
            margin-left: 20px;
        }
        .carousel-indicators.custom-indicators {
            bottom: 20px;
        }
        .carousel-indicators.custom-indicators [data-bs-target] {
            width: 9px;
            height: 9px;
        }
        .grid {
            margin-bottom: 30px;
        }
    }
</style>
<div id="loader" class="fixed inset-0 bg-white/30 backdrop-blur-md flex items-center justify-center z-50">
    <div class="flex items-end gap-2 h-16">
        <div class="dot bg-red-500" style="animation-delay: 0s;"></div>
        <div class="dot bg-yellow-500" style="animation-delay: 0.4s;"></div>
        <div class="dot bg-green-500" style="animation-delay: 0.8s;"></div>
        <div class="dot bg-blue-500" style="animation-delay: 1.2s;"></div>
    </div>
</div>


<div id="carouselExampleIndicators" class="carousel slide position-relative w-full mb-12" data-bs-ride="carousel" data-bs-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active w-full h-full">
        @foreach ($telagadringo as $item)
            <div style="
                background-image: url('{{ asset($item['gambar']) }}');
                background-size: cover;
                background-position: center;
                height: 691px;
                position: relative;
                display: flex;
                align-items: flex-end;
                padding: 20px;">
                <div class="deskripsicarousel mb-5">
                    <p class="tag">{{ $item['tag'] }}</p>
                    <p class="judul">{{ $item['judul'] }}</p>
                    <p class="deskripsi">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="carousel-item w-full">
        @foreach ($bukitsikunir as $item)
            <div style="
                background-image: url('{{ asset($item['gambar']) }}');
                background-size: cover;
                background-position: center;
                height: 691px;
                position: relative;
                display: flex;
                align-items: flex-end;
                padding: 20px;">
                <div class="deskripsicarousel mb-5">
                    <p class="tag">{{ $item['tag'] }}</p>
                    <p class="judul">{{ $item['judul'] }}</p>
                    <p class="deskripsi">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="carousel-item w-full">
        @foreach ($batupandang as $item)
            <div style="
                background-image: url('{{ asset($item['gambar']) }}');
                background-size: cover;
                background-position: center;
                height: 691px;
                position: relative;
                display: flex;
                align-items: flex-end;
                padding: 20px;">
                <div class="deskripsicarousel mb-5">
                    <p class="tag">{{ $item['tag'] }}</p>
                    <p class="judul">{{ $item['judul'] }}</p>
                    <p class="deskripsi">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="carousel-item w-full">
        @foreach ($candiarjuna as $item)
            <div style="
                background-image: url('{{ asset($item['gambar']) }}');
                background-size: cover;
                background-position: center;
                height: 691px;
                position: relative;
                display: flex;
                align-items: flex-end;
                padding: 20px;">
                <div class="deskripsicarousel mb-5">
                    <p class="tag">{{ $item['tag'] }}</p>
                    <p class="judul">{{ $item['judul'] }}</p>
                    <p class="deskripsi">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
  </div>

  <div class="carousel-indicators custom-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
</div>

<div class="pembungkus2 mx-[142px] text-white">
    <!-- Kategori Gunung/Bukit -->
    <p class="kategori">Kategori <span style="color: #F3B27C;">Gunung/Bukit</span></p>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($destinasigunung as $item)
            <a href="{{ route('detail.wisata', $item['id']) }}">
                <div class="itemwisataberanda rounded">
                    <div class="pembungkusgambarberanda flex justify-center overflow-hidden mb-3">
                        <img src="{{ asset($item['gambar']) }}" 
                            alt="img" 
                            loading="lazy"
                            class="w-full object-cover" 
                            style="height: 100%; border-radius: 10px;">
                    </div>
                    <p class="judulrekomendasi mb-2">{{ $item['judul'] }}</p>
                    <p class="deskripsirekomendasi mb-2">{{ $item['deskripsi'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
    <!-- Kategori Danau/Sungai/Telaga -->
    <p class="kategori mb-8">Kategori <span style="color: #F3B27C;">Danau/Sungai/Telaga</span></p>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($destinasidanau as $item)
            <a href="{{ route('detail.wisata', $item['id']) }}">
                <div class="itemwisataberanda rounded">
                    <div class="pembungkusgambarberanda flex justify-center overflow-hidden mb-3">
                        <img src="{{ asset($item['gambar']) }}" 
                            alt="img" 
                            loading="lazy"
                            class="w-full object-cover" 
                            style="height: 100%; border-radius: 10px;">
                    </div>
                    <p class="judulrekomendasi mb-2">{{ $item['judul'] }}</p>
                    <p class="deskripsirekomendasi mb-2">{{ $item['deskripsi'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
    
    <!-- Kategori Perkebunan -->
    <p class="kategori mb-8">Kategori <span style="color: #F3B27C;">Perkebunan</span></p>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($destinasiperkebunan as $item)
            <a href="{{ route('detail.wisata', $item['id']) }}">
                <div class="itemwisataberanda rounded">
                    <div class="pembungkusgambarberanda flex justify-center overflow-hidden mb-3">
                        <img src="{{ asset($item['gambar']) }}" 
                            alt="img" 
                            loading="lazy"
                            class="w-full object-cover" 
                            style="height: 100%; border-radius: 10px;">
                    </div>
                    <p class="judulrekomendasi mb-2">{{ $item['judul'] }}</p>
                    <p class="deskripsirekomendasi mb-2">{{ $item['deskripsi'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
      setTimeout(() => {
        document.getElementById("loader").classList.add("hidden");
        document.getElementById("content").classList.remove("hidden");
      }, 3000);
    });
  </script>
</x-layout>