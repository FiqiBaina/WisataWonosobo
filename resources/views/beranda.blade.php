<x-layout>
<style>
    .bg-zoom {
      animation: zoomIn 1.2s ease-in-out forwards;
    }
    .highlight-item {
        transition: width 0.3s ease;
        width: 211px;
        height: 407px;
        border-radius: 10px;
    }

    /* .highlight-item.active {
        width: 230px !important;
    } */
    .pesona {
      font-family: "Bayon", sans-serif;
      font-size: 140px;
      font-weight: 400;
      font-style: normal;
    }
    .wonosobo {
      font-family: "Bayon", sans-serif;
      font-size: 140px;
      font-weight: 400;
      font-style: normal;
      margin-top: -60px;
    }
    .deskripsipesona {
      font-size: 20px;
    }
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .pembungkus2 {
      margin: 0 142px;
    }
    .highlight {
      max-height: 454px;
      width: 100%;
    }
    .jelajahi {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 212px;
      height: 34px;
      margin-top: 24px;
      border-radius: 9999px;
      border: 1px solid white;
      color: white;
      font-size: 14px;
      font-weight: 400;
      transition: 0.3s ease;
      text-decoration: none;
    }
    .jelajahi:hover {
      background-color: white;
      color: black !important;
    }
    .itemwisataberanda {
      width: 214px;
      height: 324px;
    }
    .pembungkusgambarberanda {
      height: 204px;
      width: 100%;
    }
    svg {
      width: 24px;
      height: 24px;
    }

    /* HIGHLIGHT */
    .judulhighlight {
      font-size: 24px;
      font-weight: 700;
    }
    .deskripsihighlight {
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 20px;
    }

    /* REKOMENDASI */
    .rekomendasi {
      font-size: 22px;
      color: #FFFFFF;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .judulrekomendasi {
      font-size: 16px;
      font-weight: 600;
    }
    .deskripsirekomendasi {
      font-size: 14px;
      font-weight: 400;
    }

    /* TENTANG WONOSOBO */
    .tentangwonosobo {
      font-size: 18px;
      font-weight: 400;
    }
    .judultentangwonosobo {
      font-size: 22px;
      font-weight: 700;
      color: #FFFFFF;
      margin-bottom: 20px;
    }
    .deskripsitentangwonosobo {
      font-size: 14px;
    }

    @keyframes bounce-one {
        0%, 20%, 100% {
            transform: translateY(0);
        }
        10% {
            transform: translateY(-20px);
        }
    }
    @keyframes zoomIn {
      0% {
        transform: scale(1);
      }
      100% {
        transform: scale(1.1);
      }
    }

    @media (max-width: 768px) {
      .pembungkus1 {
        margin-left: 0 !important;
        width: 100%;
      }
      .pembungkus2 {
        margin: 0 30px;
      }
      .pesona {
        font-size: 70px;
        text-align: center;
      }
      .wonosobo {
        font-size: 70px;
        margin-top: -20px;
        text-align: center;
      }
      .deskripsipesona {
        text-align: center;
        font-size: 12px;
      }
      .bottom-20.right-20 {
        display: none;
      }
      .jelajahi {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 134px;
        height: 27px;
        margin: 0 auto;
        margin-top: 24px;
        border-radius: 15px;
        border: 1px solid white;
        color: white;
        font-size: 10px;
        font-weight: 400;
        transition: 0.3s ease;
        text-decoration: none;
      }
      .jelajahi:hover {
        background-color: white;
        color: black !important;
      }
      #main-bg {
        
      }
      .backgroundpesona {
        background-image: url('images/beranda/prau.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .gridhighlight {
        display: flex !important;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        padding: 0 20px;
        gap: 12px;
      }

      .highlight-item {
        flex: 0 0 auto;
        width: 116px;
        height: 189px;
        scroll-snap-align: center;
        transition: all 0.3s ease-in-out;
        opacity: 0.6;
      }

      .highlight-item.active {
        width: 128px;
        height: 205px;
        opacity: 1;
      }

      .gridhighlight::-webkit-scrollbar {
        display: none;
      }

      .itemwisataberanda {
        width: 172px;
        height: 267px;
      }
      .pembungkusgambarberanda {
        height: 164px;
        width: 100%;
      }
      svg {
        width: 15px;
        height: 15px;
      }

      /* HIGHLIGHT */
      .highlight {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .judulhighlight {
        font-size: 16px;
        font-weight: 700;
      }
      .deskripsihighlight {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 10px;
      }
      .gridhighlight {
        scroll-behavior: smooth;
      }
      .highlight-item p {
        display: none !important;
      }

      /* REKOMENDASI */
      .rekomendasi {
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

      /* TENTANG WONOSOBO */
      .tentangwonosobo {
        font-size: 12px;
        font-weight: 400;
      }
      .judultentangwonosobo {
        font-size: 16px;
        font-weight: 700;
        color: #FFFFFF;
        margin-bottom: 10px;
      }
      .deskripsitentangwonosobo {
        font-size: 12px;
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

<!-- HERO SECTION -->
<div class="mb-10 relative w-full h-screen overflow-hidden">
  <div id="main-bg" class="absolute inset-0 bg-cover bg-center transition-all duration-700"></div>

  <div class="backgroundpesona absolute inset-0 bg-black/40 flex flex-col justify-center px-10">
    <div class="pembungkus1 ml-[142px]">
      <p class="pesona text-white font-bold leading-tight tracking-[0.04em]">PESONA</p>
      <p class="wonosobo text-white font-bold leading-tight tracking-[0.04em]">WONOSOBO</p>
      <p class="deskripsipesona text-white max-w-xl">Pesona Wonosobo adalah portal informasi pariwisata yang menyajikan pesona Wonosobo untuk para wisatawan.</p>
      <a href="/wisata" class="jelajahi">Jelajahi Sekarang</a>
    </div>
  </div>

  <div class="absolute bottom-20 right-20 flex gap-2"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const images = [
    'images/beranda/prau.jpg',
    'images/beranda/curugsikarim.png',
    'images/beranda/menjer.jpg',
    'images/beranda/gncilik.jpg',
    'images/beranda/bukitscooter.jpg'
  ];

  const mainBg = document.getElementById('main-bg');
  const thumbContainer = document.querySelector('div.absolute.bottom-20.right-20');

  if (!mainBg) return;

  if (window.innerWidth > 768) {
    let currentMain = 0;

    function updateView() {
      mainBg.classList.remove('bg-zoom');
      void mainBg.offsetWidth;
      mainBg.style.backgroundImage = `url(${images[currentMain]})`;
      mainBg.classList.add('bg-zoom');

      if (thumbContainer) {
        thumbContainer.innerHTML = '';
        const thumbs = [];
        for (let i = 1; i <= 4; i++) {
          let idx = (currentMain + i) % images.length;
          thumbs.push(idx);
        }

        thumbs.forEach((i) => {
          const div = document.createElement('div');
          div.className = 'w-[160px] h-[234px] rounded-lg bg-cover bg-center shadow-md';
          div.style.backgroundImage = `url(${images[i]})`;
          thumbContainer.appendChild(div);
        });
      }
    }

    function rotate() {
      currentMain = (currentMain + 1) % images.length;
      updateView();
    }

    updateView();
    setInterval(rotate, 4000);
  } else {
    mainBg.style.backgroundImage = `url(${images[0]})`;
  }
});
</script>

<div class="pembungkus2 mx-[142px] text-white">

    <!-- HIGHLIGHT -->
    <div class="mb-10 sm:px-6 lg:px-8">
        <p class="judulhighlight text-center text-white">Pesona <span style="color: #F3B27C;">Wonosobo</span></p>
        <p class="deskripsihighlight text-center">Lorem ipsum dolor sit amet consectetur. Laoreet in nullam in duis ante sed.</p>
        <div class="gridhighlight grid grid-cols-5 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">
            @for ($i = 1; $i <= 5; $i++)
            <div class="highlight-item" data-index="{{ $i - 1 }}">
                <div class="highlight mb-4 flex justify-center overflow-hidden">
                    <img 
                        src="{{ asset("images/HIGHLIGHT $i.png") }}" 
                        data-default="{{ asset("images/HIGHLIGHT $i.png") }}" 
                        data-alt="{{ asset("images/HIGHLIGHT WARNA $i.png") }}"
                        class="highlight-image transition-transform duration-500 ease-in-out rounded-[10px]" 
                        loading="lazy"
                        alt="highlight-{{ $i }}"
                        style="width: 100%;"
                    >
                </div>
                <p class="text-center text-base font-semibold">Telaga Dringo</p>
                <p class="text-center text-sm font-normal">Dieng</p>
            </div>
            @endfor
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const images = document.querySelectorAll(".highlight-image");
                let currentIndex = 0;

                setInterval(() => {
                    images.forEach((img, idx) => {
                        img.src = img.getAttribute("data-default");
                        img.classList.remove("scale-105");
                    });

                    const currentImg = images[currentIndex];
                    currentImg.src = currentImg.getAttribute("data-alt");
                    currentImg.classList.add("scale-105");

                    currentIndex = (currentIndex + 1) % images.length;
                }, 1000);
            });
        </script>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            const container = document.querySelector(".gridhighlight");
            const items = document.querySelectorAll(".highlight-item");

            function setActiveMiddleItem() {
              const containerRect = container.getBoundingClientRect();
              const middle = containerRect.left + containerRect.width / 2;

              let closest = null;
              let closestDistance = Infinity;

              items.forEach(item => {
                const rect = item.getBoundingClientRect();
                const itemCenter = rect.left + rect.width / 2;
                const distance = Math.abs(middle - itemCenter);

                if (distance < closestDistance) {
                  closest = item;
                  closestDistance = distance;
                }
              });

              items.forEach(item => item.classList.remove("active"));
              if (closest) closest.classList.add("active");
            }

            container.addEventListener("scroll", () => {
              window.requestAnimationFrame(setActiveMiddleItem);
            });

            const initial = items[2];
            container.scrollLeft = initial.offsetLeft - (container.offsetWidth / 2) + (initial.offsetWidth / 2);

            setActiveMiddleItem();
          });
          </script>


    </div>
    
    <!-- REKOMENDASI WISATA -->
    <div class="mb-10 sm:px-6 lg:px-8">
        <p class="rekomendasi">Rekomendasi <span style="color: #F3B27C;">Wisata</span></p>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach ($destinasi as $item)
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
                </a>
            @endforeach
        </div>
    </div>
    
    <!-- TENTANG WONOSOBO -->
    <div class="mb-10 sm:px-6 lg:px-8">
        <p class="tentangwonosobo text-center">Tentang Wonosobo</p>
        <p class="judultentangwonosobo text-center">Wonosobo, <span style="color: #F3B27C;">Kote Kecil </span>dengan sejuta <span style="color: #F3B27C;">Keindahan</span></p>
    
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            <div>
                <p class="deskripsitentangwonosobo font-normal text-justify">Terletak di kaki Pegunungan Dieng, Wonosobo menawarkan pemandangan alam yang menakjubkan, udara sejuk, dan suasana yang menenangkan. Kota ini menjadi salah satu destinasi favorit bagi wisatawan yang mencari ketenangan sekaligus petualangan alam.</p>
            </div>
            <div>
                <p class="deskripsitentangwonosobo font-normal text-justify">Dari Telaga Warna hingga Gunung Prau, setiap sudut Wonosobo menyimpan pesona yang unik. Selain alamnya, Wonosobo juga kaya akan budaya lokal, kuliner khas, serta keramahan penduduk yang membuat setiap kunjungan menjadi pengalaman tak terlupakan.</p>
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