<section class="mb-8">
    <h2 class="text-2xl font-bold text-blue-600 mb-4 border-b-2 border-blue-200 pb-2">
        <i class="fas fa-graduation-cap mr-2"></i>Riwayat Pendidikan
    </h2>
    <div class="space-y-4">
        @foreach($education as $edu)
        <div class="bg-white rounded-lg p-4 shadow-sm border-l-4 border-blue-500 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-gray-800">{{ $edu['institution'] }}</h3>
                    <p class="text-gray-600">{{ $edu['status'] }}</p>
                </div>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                    {{ $edu['year'] }}
                </span>
            </div>
        </div>
        @endforeach
    </div>
</section>