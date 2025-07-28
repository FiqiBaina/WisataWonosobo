<x-layout>
<style>
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .iconkembali {
        margin-left: -50px;
    }
    .pembungkus1 {
        margin: 0 142px;
        padding-top: 120px;
    }
    .pembungkus2 {
        width: 1153.5px;
        display: flex;
    }
    .pembungkus3 {
        display: flex;
        margin: 20px 0;
    }
    .pembungkus4 {
        width: 103px;
        height: 143px;
    }
    .fotoutama {
        width: 1156px;
        height: 454.6px;
    }
    .judul {
        font-size: 45px;
        font-weight: 700;
    }
    .deskripsi {
        font-size: 18px;
    }
    .bulan {
        font-size: 16px;
    }
    .tanggal {
        font-size: 38px;
    }
    .tahun {
        font-size: 16px;
    }
    .jam {
        font-size: 12px; 
    }
    .bungkusdeskripsi {
        width: 1013px;
    }
    .iconkembali {
        position: absolute;
        top: 120px;
        transform: translateX(-50%);
        z-index: 50;
        transition: top 0.3s ease, position 0.3s ease;
    }
    .iconkembali.fixed {
        position: fixed;
        top: 4%;
        transform: translateX(-50%);
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
        .iconkembali {
            position: absolute;
            top: 10px;
            left: 27%;
            transform: translateX(-50%);
            z-index: 50;
            transition: top 0.3s ease, position 0.3s ease;
        }
        .iconkembali.fixed {
            position: fixed;
            top: 5%;
            left: 25%;
            transform: translateX(-50%);
        }
        .pembungkus1 {
            margin: 0;
        }
        .pembungkus2 {
            width: 368px;
            position: relative;
        }
        .pembungkus3 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            gap: 1.5rem;
            margin: 0 20px 20px 20px;
        }
        .pembungkus4 {
            width: 103px;
            height: 143px;
        }
        .fotoutama {
            width: 345px;
            height: 264px;
        }
        .judul {
            font-size: 20px;
            font-weight: 700;
            margin: 20px 0 10px 20px;
        }
        .deskripsi {
            font-size: 12px;
        }
        .bungkusdeskripsi {
            width: 247px;
        }
        .bulan {
            font-size: 15px;
        }
        .tanggal {
            font-size: 30px;
        }
        .tahun {
            font-size: 15px;
        }
        .jam {
            font-size: 15px; 
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

<div class="pembungkus1">
    <div class="pembungkus2 flex w-full">
        <a class="iconkembali" href="{{ url()->previous() }}">
            <i class="bi bi-arrow-left-circle-fill" style="color: white; font-size: 36px;"></i>
        </a>
        <script>
            window.addEventListener('scroll', () => {
                const icon = document.querySelector('.iconkembali');
                if (window.scrollY > 100) {
                    icon.classList.add('fixed');
                } else {
                    icon.classList.remove('fixed');
                }
            });
        </script>
        <div class="fotoutama ml-auto">
            <img id="mainImage" src="{{ asset($data['gambar']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
            style="width: 100%; height: 100%; object-fit: cover; border-radius: 18px;">
        </div>
    </div>
    <h1 class="judul text-white mt-10">{{ $data['judul'] }}</h1>
        <div class="pembungkus3 flex flex-col md:flex-row justify-between items-start gap-6 max-w-6xl">
            <div class="bungkusdeskripsi text-white">
                <p class="deskripsi text-justify font-regular leading-relaxed">
                    {{ $data['deskripsi'] }}
                </p>
            </div>
            <div class="pembungkus4 flex flex-col text-white bg-[#30446C] rounded-md shrink-0">
                <div class="flex flex-col items-center justify-center flex-grow">
                    <p class="bulan font-medium text-center">{{ $data['bulan'] }}</p>
                    <p class="tanggal font-medium text-center">{{ $data['tanggal'] }}</p>
                    <p class="tahun font-medium text-center">{{ $data['tahun'] }}</p>
                </div>
                <p class="jam py-1.5 font-medium text-black text-center bg-light w-full">{{ $data['jam'] }}</p>
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