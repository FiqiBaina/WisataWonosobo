<x-layout>
<style>
    .faq {
      font-family: "Bayon", sans-serif;
      font-size: 140px;
      font-weight: 400;
      font-style: normal;
    }
    .dot {
        width: 1rem;
        height: 1rem;
        border-radius: 9999px;
        animation: bounce-one 1.6s ease-in-out infinite;
    }
    .pembungkus1 {
      margin: 0 142px;
    }
    .pertanyaan {
      font-size: 18px;
    }

    @media (max-width: 768px) {
      .pembungkus1 {
        margin: 0 30px;
      }
      .faq {
        font-size: 96px;
      }
      .pertanyaan {
        font-size: 15px;
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
<div class="pembungkus1">
  <div>
    <p class="faq text-white text-center pt-20 pb-10">FAQ</p>
  </div>
  <div class="mb-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 mt-10">
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
    <div class="w-full my-1">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button
          class="flex items-center justify-between w-full px-5 py-4 text-left font-semibold focus:outline-none"
          onclick="toggleFAQ(this)"
        >
          <span class="pertanyaan">Pertanyaan</span>
          <span class="w-[32px] h-[32px] rounded-full bg-[#1C1F2E] flex items-center justify-center transition-transform duration-300">
            <svg class="w-4 h-4 text-white transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
        <div class="px-5 pb-4 hidden text-sm text-gray-700 transition-all duration-300">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae blanditiis maiores, est ad quod eum consequuntur libero dolor labore reiciendis illo! Temporibus, nesciunt aperiam sint aspernatur modi labore mollitia esse?
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
  function toggleFAQ(button) {
      const answer = button.nextElementSibling;
      const icon = button.querySelector('svg');

      answer.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    }
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