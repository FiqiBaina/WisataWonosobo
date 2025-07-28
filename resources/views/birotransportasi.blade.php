<x-layout>
<style>
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .pembungkus1 {
        margin: 0 142px
    }
    .biro {
        color: white;
        font-size: 36px;
    }
    .deskripsibiro {
        font-size: 20px;
        width: 50%;
    }
    .judul {
        font-size: 16px;
        font-weight: 600;
    }
    .deskripsi {
        font-size: 14px;
    }
    .konten {
        width: 368px;
    }
    .icon {
        font-size: 20px;
        background-color: #21725E;
        border-radius: 5px;
    }
    .pembungkus2 {
        gap: 10px;
        align-items: flex-end;
    }
    img {
        border-radius: 15px;
    }

    @media (max-width: 768px) {
        .pembungkus1 {
            margin: 0 30px;
        }
        .biro {
            color: white;
            font-size: 30px;
        }
        .deskripsibiro {
            font-size: 12px;
            width: 90%;
        }
        .judul {
            font-size: 12px;
        }
        .deskripsi {
            font-size: 10px;
        }
        .konten {
            width: 100%;
        }
        .icon {
            font-size: 15px;
            background-color: #21725E;
            border-radius: 5px;
        }
        .pembungkus2 {
            gap: 12px;
            align-items: flex-end;
        }
        img {
            border-radius: 5px;
        }
    }

    @keyframes bounce-one {
        0%, 20%, 100% {
            transform: translateY(0);
        }
        10% {
            transform: translateY(-20px);
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
<div class="pembungkus1 pt-20">
    <p class="biro text-center font-bold">Biro <span style="color: #F3B27C;">Perjalanan</span> Wisata</p>
    <div class="mt-3 flex justify-center">
        <p class="deskripsibiro text-center font-regular text-white">Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed. Lorem ipsum dolor sit amet consectetur amet consectetur.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 my-5">
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
            <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
            <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
        <div class="konten text-white">
            <img src="{{ asset('images/jeep.jpg') }}" loading="lazy" alt="biro">
            <div class="pembungkus2 flex">
                <div>
                    <p class="judul mt-3">Nama Biro</p>
                    <p class="deskripsi mt-2">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="mt-4 ml-auto">
                    <a href="#"><p class="icon text-white px-2.5 py-1.5"><i class="bi bi-telephone-fill"></i></p></a>
                </div>
            </div>
        </div>
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