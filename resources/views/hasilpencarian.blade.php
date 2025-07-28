<x-layout>
    <div class="text-white mx-[142px] py-20">
        <div class="flex items-center mb-4 mt-10">
            <a style="" href="{{ url()->previous() }}">
                <i class="bi bi-arrow-left-circle-fill" style="color: white; font-size: 36px;"></i>
            </a>
            <h2 class="ml-4"><span class="font-bold">Hasil Pencarian</span> untuk <span class="italic">"{{ $query }}"</span></h2>
        </div>

        @if(count($hasil) > 0)
            <ul>
                <div class="flex gap-3">
                @foreach ($hasil as $item)
                    <a href="{{ route('detail.wisata', ['id' => $item['id']]) }}">
                        <div class="rounded" style="width: 214px; height: 324px;">
                            <div class="flex justify-center overflow-hidden mb-3" style="height: 204px; width: 100%;">
                                <img src="{{ asset('images/pencarian/' . $item['gambar']) }}" alt="{{ $item['judul'] }}"
                                    loading="lazy"
                                    class="w-full object-cover" 
                                    style="height: 100%; border-radius: 10px;">
                            </div>
                            <p class="mb-2" style="font-size: 16px; font-weight: 600;">{{ $item['judul'] }}</p>
                            <p class="mb-2" style="font-size: 14px; font-weight: 400;">{{ $item['deskripsi'] }}</p>
                            <div class="flex space-x-1 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e59659" viewBox="0 0 24 24" stroke="#e59659" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#e59659" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
            </ul>
        @else
            <p class="text-center" style="margin-top: 100px; margin-bottom: 150px;">Hasil <span class="font-bold">tidak ditemukan</span>, cari kata kunci lain . . .</p>
        @endif
        
    </div>
</x-layout>