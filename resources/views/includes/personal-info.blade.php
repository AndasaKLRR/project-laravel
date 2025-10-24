<section class="mb-8">
    <h2 class="text-2xl font-bold text-blue-600 mb-4 border-b-2 border-blue-200 pb-2">
        <i class="fas fa-user-circle mr-2"></i>Informasi Pribadi
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white rounded-lg p-6 shadow-sm">
        <div class="space-y-3">
            <div class="flex items-center">
                <i class="fas fa-user text-blue-500 w-6"></i>
                <span class="ml-3"><strong>Nama Lengkap:</strong> {{ $profileData['name'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-birthday-cake text-blue-500 w-6"></i>
                <span class="ml-3"><strong>Tempat, Tgl Lahir:</strong> {{ $profileData['birthplace'] }}, {{ $profileData['birthdate'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-venus-mars text-blue-500 w-6"></i>
                <span class="ml-3"><strong>Jenis Kelamin:</strong> {{ $profileData['gender'] }}</span>
            </div>
        </div>
        <div class="space-y-3">
            <div class="flex items-center">
                <i class="fas fa-phone text-green-500 w-6"></i>
                <span class="ml-3"><strong>No. HP:</strong> {{ $profileData['phone'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-envelope text-green-500 w-6"></i>
                <span class="ml-3"><strong>Email:</strong> {{ $profileData['email'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-graduation-cap text-green-500 w-6"></i>
                <span class="ml-3"><strong>Status:</strong> {{ $profileData['status'] }}</span>
            </div>
        </div>
    </div>
</section>