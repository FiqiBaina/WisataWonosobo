<style>
    .pembungkus1footer {
        padding-left: 142px;
        padding-right: 142px;
        padding-top: 50px;
        padding-bottom: 20px;
    }
    .garisfooter {
        border-bottom: 3px solid #000000;
        margin-top: 30px;
    }
    .pesonafooter {
        margin-top: 20px;
        font-size: 14px;
        font-weight: 500;
    }
    @media (max-width: 768px) {
        .pembungkus1footer {
            padding: 0;
            padding-top: 10px;
            padding-bottom: 20px;
        }
        .gridfooter {
            display: none !important;
        }
        .garisfooter {
            display: none !important;
        }
        .pesonafooter {
            margin: 0;
            margin-top: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        .pesonafooter span {
            font-size: 12px;
            font-weight: 600;
        }

    }
</style>
<div class="pembungkus1footer bg-white">
    <div class="gridfooter grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-6">
        <div>
            <img class="mb-4" src="{{ asset('images/footer/footer.png') }}" alt="logo" loading="lazy" style="width: 237px; height: auto;">
            <p class="text-justify" style="width: 435px; font-size: 14px;">Pesona Wonosobo adalah portal informasi pariwisata yang menyajikan destinasi terbaik, budaya lokal, dan pesona alam Wonosobo untuk para wisatawan.</p>
        </div>
        <div class="flex justify-end">
            <ul>
                <a href="/" :active="request()->is('/')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Beranda</li></a>
                <a href="/wisata" :active="request()->is('wisata')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Wisata</li></a>
                <a href="/acara" :active="request()->is('acara')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Acara</li></a>
            </ul>
        </div>
        <div class="flex justify-center">
            <ul>
                <a href="/pemanduwisata" :active="request()->is('pemanduwisata')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Layanan Pemandu Wisata</li></a>
                <a href="/birotransportasi" :active="request()->is('birotransportasi')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Layanan Biro Transportasi</li></a>
                <a href="/faq" :active="request()->is('faq')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">FAQ</li></a>
                <a href="/hubungi" :active="request()->is('hubungi')"><li class="mb-2" style="font-size: 14px; font-weight: 600;">Hubungi</li></a>
            </ul>
        </div>
        <div style="text-align: right;">
            <p class="mb-2 font-semibold" style="font-size: 14px;">Sosial Media</p>
            <div style="display: flex; flex-direction: column; align-items: flex-end; gap: 10px;">
                <div class="mb-2" style="display: flex; gap: 20px;">
                    <img src="{{ asset('images/footer/tweet.png') }}" alt="Twitter" style="width: 47px;">
                    <img src="{{ asset('images/footer/fb.png') }}" alt="Facebook" style="width: 43px;">
                    <img src="{{ asset('images/footer/ig.png') }}" alt="Instagram" style="width: 43px;">
                </div>
                <div style="display: flex; gap: 20px;">
                    <img src="{{ asset('images/footer/tiktok.png') }}" alt="TikTok" style="width: 30px;">
                    <img src="{{ asset('images/footer/ytb.png') }}" alt="YouTube" style="width: 43px;">
                </div>
            </div>
        </div>
    </div>
    <div class="garisfooter"></div>
    <p class="pesonafooter text-center">PESONA <span>WONOSOBO</span></p>
</div>