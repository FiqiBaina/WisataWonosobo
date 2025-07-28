<x-layout> 
<style>
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .pembungkus1 {
        margin: 0 142px;
    }
    .festival {
        font-size: 36px;
        font-weight: 600;
    }
    .deskripsifestival {
        width: 50%;
        font-size: 20px;
    }
    .lokasi {
        font-size: 12px;
    }
    .judul {
        font-size: 24px;
    }
    .deskripsi {
        font-size: 14px;
    }
    .btndetail {
        width: 165px;
        height: 31px;
        font-size: 12px;
    }
    .pembungkusgambar {
        width: 337px;
        height: 135px;
    }
    .pembungkus2 {
        width: 693px;
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
        .pembungkus1 {
            margin: 0;
        }
        .festival {
            font-size: 30px;
            font-weight: 600;
        }
        .deskripsifestival {
            width: 75%;
            font-size: 12px;
        }
        .jadwal {
            display: none !important;
        }
        .lokasi {
            font-size: 10px;
        }
        .judul {
            font-size: 18px;
        }
        .deskripsi {
            font-size: 12px;
        }
        .btndetail {
            width: 94px;
            height: 28px;
            font-size: 10px;
        }
        .pembungkusgambar {
            width: 122px;
            height: 202px;
        }
        .pembungkus2 {
            width: 200px;
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
 <div class="pembungkus1 pt-28">
    <p class="festival text-white text-center font-bold">Festival <span style="color: #F3B27C;">Wonosobo</span></p>
    <div class="mt-3 flex justify-center">
        <p class="deskripsifestival text-center text-white font-regular">Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consectetur amet consectetur.</p>
    </div>

    <div class="flex flex-col gap-4 my-5">
        @foreach ($detail as $item)
        <div class="flex">
            <div class="jadwal flex flex-col text-white bg-[#30446C] h-[136px] w-[80px]">
                <div class="flex flex-col items-center justify-center flex-grow">
                    <p class="font-medium text-center text-[12px]">{{ $item['bulan'] }}</p>
                    <p class="font-medium text-center text-[26px]">{{ $item['tanggal'] }}</p>
                    <p class="font-medium text-center text-[12px]">{{ $item['tahun'] }}</p>
                </div>
                <p class="py-1.5 font-medium text-black text-center bg-light text-[10px] w-full">{{ $item['jam'] }}</p>
            </div>
            <div class="pembungkus2 text-white mx-4">
                <p class="lokasi font-regular">Lokasi Acara</p>
                <p class="judul font-semibold">{{ $item['judul'] }}</p>
                <p class="deskripsi text-justify font-regular">{{ $item['deskripsi'] }}</p>
                <a href="{{ route('detail.acara', $item['id']) }}" class="btndetail mt-2 inline-block border border-white text-white text-center leading-[31px] no-underline">Lihat Detail</a>
            </div>
            <div class="pembungkusgambar">
                <img src="{{ asset($item['gambar']) }}" loading="lazy" alt="acara" style="width: 100%; height: 100%; object-fit: cover; border-radius: 4px;">
            </div>
        </div>
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