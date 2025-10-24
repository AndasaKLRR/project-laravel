<header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-8 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center space-x-6">
                @if(file_exists(public_path('public/andri-profile.jpg')))
                    <img src="{{ asset('public/andri-profile.jpg') }}" 
                         alt="Foto Profil Andri" 
                         class="w-24 h-24 rounded-full border-4 border-white shadow-lg">
                @else
                    <div class="w-24 h-24 rounded-full bg-white flex items-center justify-center border-4 border-white shadow-lg">
                        <i class="fas fa-user text-blue-600 text-2xl"></i>
                    </div>
                @endif
                <div>
                    <h1 class="text-3xl font-bold">{{ $profileData['name'] }}</h1>
                    <p class="text-lg opacity-90">Web Developer & Mahasiswa Sistem Informasi</p>
                </div>
            </div>
            <div class="mt-4 md:mt-0 text-center md:text-right">
                <p class="text-sm opacity-80">Yogyakarta, Indonesia</p>
                <p class="text-sm opacity-80">Curriculum Vitae | Available for Internship</p>
            </div>
        </div>
    </div>
</header>
