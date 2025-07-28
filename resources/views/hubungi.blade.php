<x-layout>
<style>
    /* .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    } */
    .bungkusjudul {
        height: 65vh;
        background-image: url('/images/hubungi.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    .hubungi {
        font-family: "Bayon", sans-serif;
        font-size: 140px;
        font-weight: 400;
        font-style: normal;
        margin-top: 100px;
        margin-right: 30px;
    }
    .kami {
        font-family: "Bayon", sans-serif;
        font-size: 140px;
        font-weight: 400;
        font-style: normal;
        margin-top: 100px;
    }
    input::placeholder,
    textarea::placeholder {
        font-style: italic;
    }
    input, textarea {
        color: #000000;
    }
    .pembungkus1 {
        margin: 0 142px;
    }
    .judul {
        font-size: 28px;
    }
    .deskripsi {
        font-size: 20px;
    }
    .media {
        font-size: 20px;
    }
    .label {
        font-size: 20px;
    }
    .maps {
        width: 100%;
        height: 350px;
        border-radius: 10px;
        border: 5px solid white;
    }
    .icontelepon {
        padding: 8px 12px;
        font-size: 20px;
        background-color: #21725E;
        border-radius: 9px;
    }
    .iconemail {
        padding: 8px 12px;
        font-size: 20px;
        background-color: #476CFF;
        padding: 10px;
        border-radius: 9px;
    }
    .iconalamat {
        padding: 8px 12px;
        font-size: 20px;
        background-color: #AF0003;
        padding: 10px;
        border-radius: 9px;
    }

    @media (max-width: 768px) {
        .bungkusjudul {
            height: 65vh;
            background-image: url('/images/hubungi.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .pembungkus1 {
            margin: 0 30px;
        }
        .hubungi {
            font-size: 70px;
            margin: 0;
        }
        .kami {
            font-size: 70px;
            margin-top: -30px;
        }
        .judul {
            font-size: 18px;
        }
        .deskripsi {
            font-size: 12px;
        }
        .media {
            font-size: 12px;
        }
        .label {
            font-size: 12px;
        }
        .maps {
            width: 100%;
            height: 150px;
            border-radius: 10px;
            border: 5px solid white;
        }
        .icontelepon {
            font-size: 15px;
            background-color: #21725E;
            border-radius: 9px;
        }
        .iconemail {
            font-size: 15px;
            background-color: #476CFF;
            border-radius: 9px;
        }
        .iconalamat {
            padding-top: 15px;
            font-size: 15px;
            background-color: #AF0003;
            border-radius: 9px;
        }
    }

    /* @keyframes bounce-one {
        0%, 20%, 100% {
            transform: translateY(0);
        }
        10% {
            transform: translateY(-20px);
        }
    } */
</style>
<!-- <div id="loader" class="fixed inset-0 bg-white/30 backdrop-blur-md flex items-center justify-center z-50">
    <div class="flex items-end gap-2 h-16">
        <div class="dot bg-red-500" style="animation-delay: 0s;"></div>
        <div class="dot bg-yellow-500" style="animation-delay: 0.4s;"></div>
        <div class="dot bg-green-500" style="animation-delay: 0.8s;"></div>
        <div class="dot bg-blue-500" style="animation-delay: 1.2s;"></div>
    </div>
</div> -->
<div class="bungkusjudul">
    <p class="hubungi text-center text-white">HUBUNGI</p>
    <p class="kami text-center text-white">KAMI!</p>
</div>

<div class="pembungkus1 text-white pt-10 pb-5">
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5">
        <div>
            <p class="judul font-semibold mb-2">Lorem Ipsum</p>
            <p class="deskripsi text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusantium necessitatibus laboriosam, commodi iste, veritatis mollitia harum amet a voluptates eos natus tenetur consectetur temporibus repudiandae perferendis voluptatum eaque. Quae!</p>

            <div class="mb-4 mt-5 flex">
                <p class="icontelepon text-white"><i class="bi bi-telephone-fill"></i></p>
                <div class="ml-5">
                    <p class="media">Telepon</p>
                    <p class="media">(0286) 321194 - Fax (0286) 321194</p>
                </div>
            </div>
            <div class="mb-4 flex">
                <p class="iconemail text-white"><i class="bi bi-envelope-fill"></i></p>
                <div class="ml-5">
                    <p class="media">Email</p>
                    <p class="media">disparbud.wonosobo31@gmail.com</p>
                </div>
            </div>
            <div class="mb-3 flex">
                <p class="iconalamat text-white"><i class="bi bi-geo-alt-fill"></i></p>
                <div class="ml-5">
                    <p class="media">Alamat</p>
                    <p class="media">Kalianget, Wonosobo, Jawa Tengah, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="bg-gray-600 p-4" style="border-radius: 10px;">
            <form action="" id="kontakForm">
                <div class="mb-3 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                    <div>
                        <label class="mb-2 font-semibold" for="nama">Nama</label>
                        <input class="px-3 py-2.5" type="text" placeholder="Nama...." style="width: 100%; border-radius: 10px;">
                    </div>
                    <div>
                        <label class="mb-2 font-semibold" for="telepon">No. Telp</label>
                        <input class="px-3 py-2.5" type="number" placeholder="Nomor Telp (WA)" style="width: 100%; border-radius: 10px;">
                    </div>
                </div>
                <label class="mb-2 font-semibold" for="email">Email</label>
                <input class="mb-3 px-3 py-2.5" type="email" placeholder="Email" style="width: 100%; border-radius: 10px;">
                <label class="mb-2 font-semibold" for="pesan">Pesan</label>
                <textarea class="mb-3 px-3 py-2.5" name="pesan" id="" placeholder="Masukkan pesan...." style="width: 100%; border-radius: 10px; height: 100px;"></textarea>
                <button class="py-3 font-semibold" type="submit" style=" background-color: #21725E; color: white; border-radius: 10px; width: 100%;">Kirim</button>
            </form>
        </div>
    </div>
    <iframe class="maps mt-14" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4026.6945663054366!2d109.90557718844289!3d-7.342780882309546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa066ad30e763%3A0x8250855c5796c39!2sDinas%20Pariwisata%20dan%20Kebudayaan%20Wonosobo!5e0!3m2!1sid!2sid!4v1749713437657!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- <script>
    window.addEventListener("DOMContentLoaded", () => {
      setTimeout(() => {
        document.getElementById("loader").classList.add("hidden");
        document.getElementById("content").classList.remove("hidden");
      }, 3000);
    });
</script> -->

<script>
    document.getElementById('kontakForm').addEventListener('submit', function(e) {
        swal("Berhasil!", "Pesan berhasil terkirim!", "success");
    });
</script>
</x-layout>