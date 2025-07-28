<x-layout>
<style>
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    input::placeholder,
    textarea::placeholder {
        font-style: italic;
    }
    .pembungkus2 {
        margin: 0 142px;
    }
    .judul {
        font-size: 45px;
        font-weight: 700;
    }
    .deskripsiwisata {
        width: 100%;
        font-size: 18px;
        font-weight: 400;
        margin: 20px 0;
    }
    .judululasan {
        color: white;
        font-size: 28px;
        font-weight: 700;
    }
    .namapengunjung {
        font-weight: 600;
        font-size: 24px;
    }
    .deskripsiulasan {
        font-weight: 400;
        font-size: 18px;
    }
    .lihatulasan {
        font-size: 24px;
        font-weight: 600;
        color: #F3B27C;
    }
    .pembungkus3 {
        display: flex;
        gap: 2rem;
    }
    .lokasi {
        width: 488px;
    }
    .pembungkus4 {
        width: 630px;
        margin-right: 20px;
    }
    svg {
        width: 24px;
        height: 24px;
    }
    .review {
        font-size: 18px;
    }
    .bungkuslihatulasan {
        margin: 20px 0;
    }
    .label {
        font-size: 18px;
        font-weight: 600;
    }
    .labelrating {
        font-size: 14px;
    }
    .kirim {
        width: 100%;
        background-color: #21725E;
        font-size: 18px;
        font-weight: 600;
    }
    .fotoutama {
        height: 454.6px;
    }
    .iconkembali {
        margin-left: -50px;
    }
    .pembungkus5 {
        display: flex;
    }
    .pembungkus6 {
        width: 100%;
        margin-left: 20px;
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
        .grid {
            display: none !important;
        }
        .pembungkus2 {
            margin: 0 30px;
        }
        .judul {
            font-size: 20px;
            font-weight: 700;
        }
        .deskripsiwisata {
            width: 100%;
            font-size: 12px;
            font-weight: 400;
            margin: 10px 0;
        }
        .judululasan {
            color: white;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .namapengunjung {
            font-weight: 600;
            font-size: 12px;
        }
        .deskripsiulasan {
            font-weight: 400;
            font-size: 12px;
        }
        .lihatulasan {
            font-size: 12px;
            font-weight: 600;
            color: #F3B27C;
            margin-left: auto;
            right: 20px;
        }
        .pembungkus3 {
            flex-direction: column;
        }
        .lokasi {
            width: 330px;
        }
        .pembungkus4 {
            width: 330px;
            margin: 0;
        }
        svg {
            width: 15px;
            height: 15px;
        }
        .review {
            font-size: 12px;
        }
        .bungkuslihatulasan {
            margin: 10px 0;
        }
        .label {
            font-size: 12px;
            font-weight: 600;
        }
        .labelrating {
            font-size: 12px;
        }
        .kirim {
            width: 100%;
            background-color: #21725E;
            font-size: 14px;
            font-weight: 600;
        }
        .fotoutama {
            height: 264px;
        }
        .iconkembali {
            position: absolute;
            top: 10px;
            left: 25%;
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
        .pembungkus5 {
            position: relative;
        }
        .pembungkus6 {
            margin-left: 0;
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
    <div class="pembungkus2" style="padding-top: 120px;">
        <div class="pembungkus5 w-full relative-container">
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

<!-- KONTEN -->
            <div class="pembungkus6" style="">
                <div class="fotoutama">
                    <img id="mainImage" src="{{ asset($data['gambar1']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 18px;">
                </div>
                <div class="py-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    <div style="width: 216.4px; height: 143.8px;">
                    <img class="thumbnail" src="{{ asset($data['gambar2']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; cursor: pointer;">
                    </div>
                    <div style="width: 216.4px; height: 143.8px;">
                    <img class="thumbnail" src="{{ asset($data['gambar3']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; cursor: pointer;">
                    </div>
                    <div style="width: 216.4px; height: 143.8px;">
                    <img class="thumbnail" src="{{ asset($data['gambar4']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; cursor: pointer;">
                    </div>
                    <div style="width: 216.4px; height: 143.8px;">
                    <img class="thumbnail" src="{{ asset($data['gambar5']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; cursor: pointer;">
                    </div>
                    <div style="width: 216.4px; height: 143.8px;">
                    <img class="thumbnail" src="{{ asset($data['gambar6']) }}" alt="gambar {{ $data['judul'] }}" loading="lazy"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
        <h1 class="judul text-white mt-10">{{ $data['judul'] }}</h1>
        <div class="flex space-x-1 rounded mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#e59659">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>
            <p class="review text-white">62 review</p>
        </div>
        <p class="deskripsiwisata text-white text-justify">{{ $data['deskripsi'] }}</p>

        <p class="judululasan mt-10">Ulasan <span style="color: #F3B27C;">Pengunjung</span></p>
        <div class="pembungkus3 text-white flex w-full">
            <div class="pembungkus4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="mb-3">
                        <div class="flex justify-between items-center">
                            <p class="namapengunjung">Nama Pengunjung</p>
                            <div class="flex space-x-1 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#e59659">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                        </div>
                        <p class="deskripsiulasan text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sit iusto ipsa saepe quas illo reprehenderit velit distinctio? Minus nisi assumenda alias, quo sed tempora eligendi consequuntur ea veniam illum!
                        </p>
                    </div>
                @endfor
                <div class="bungkuslihatulasan">
                    <a class="lihatulasan" href="#">Lihat semua ulasan</a>
                </div>
            </div>
            
            <div class="lokasi ml-auto">
                {!! $data['lokasi'] !!}
                
                <form action="">
                    <p class="label mt-4 mb-3">Rating</p>
                    <div class="flex">
                        <div class="flex space-x-1" id="rating-stars"></div>
                        <div>
                            <p class="labelrating text-white mx-3 italic">Tambahkan rating anda....</p>
                        </div>
                        <input type="hidden" name="rating" id="rating-value" value="0" />
                    </div>
                    <p class="label mt-4 mb-3">Nama</p>
                    <input class="py-3.5 px-3" type="text" placeholder="Masukkan nama anda...." style="font-size: 14px; width: 100%; color: black;">
                    <p class="label mt-4 mb-3">Ulasan</p>
                    <textarea name="ulasan" id="" placeholder="Tulis ulasan anda...." style="padding: 10px; font-size: 14px; width: 100%; height: 80px; color: black;"></textarea>
                    <button type="submit" class="kirim py-3 mt-4 mb-8">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const starContainer = document.getElementById('rating-stars');
        const ratingInput = document.getElementById('rating-value');
        let currentRating = 0;

        const createStar = (index) => {
        const filled = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>`;
        const empty = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#e59659">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
            </svg>`;

        const wrapper = document.createElement('span');
        wrapper.innerHTML = empty;
        wrapper.classList.add('cursor-pointer');

        wrapper.addEventListener('click', () => {
            currentRating = index;
            ratingInput.value = index;
            renderStars();
        });

        return wrapper;
        };

        function renderStars() {
        starContainer.innerHTML = '';
        for (let i = 1; i <= 5; i++) {
            const star = createStar(i);
            star.innerHTML = i <= currentRating ? star.innerHTML.replace('fill="none"', 'fill="#e59659"') : star.innerHTML;
            starContainer.appendChild(star);
        }
        }

        renderStars();
    </script>

    <script>
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
            const tempSrc = mainImage.src;
            mainImage.src = thumb.src;
            thumb.src = tempSrc;

            const tempAlt = mainImage.alt;
            mainImage.alt = thumb.alt;
            thumb.alt = tempAlt;
            });
        });
    </script>

    <script>
        window.addEventListener("DOMContentLoaded", () => {
        setTimeout(() => {
            document.getElementById("loader").classList.add("hidden");
            document.getElementById("content").classList.remove("hidden");
        }, 3000);
        });
    </script>
</x-layout>