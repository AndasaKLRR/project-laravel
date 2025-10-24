@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    
    <!-- Personal Information -->
    @include('includes.personal-info')

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- Education -->
            <x-card title="Pendidikan" icon="fas fa-graduation-cap">
                @include('includes.education')
            </x-card>

            <!-- Skills -->
            <x-card title="Skills & Kemampuan" icon="fas fa-code">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-800 mb-4 border-b pb-2">Technical Skills</h4>
                        @foreach($skills['technical'] as $skill)
                            <x-skill-item 
                                :skill="$skill['name']" 
                                :level="$skill['level']" 
                                :color="$skill['color']" 
                            />
                        @endforeach
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg text-gray-800 mb-4 border-b pb-2">Soft Skills</h4>
                        @foreach($skills['soft_skills'] as $skill)
                            <x-skill-item 
                                :skill="$skill['name']" 
                                :level="$skill['level']" 
                                :color="$skill['color']" 
                            />
                        @endforeach
                    </div>
                </div>
            </x-card>

            <!-- Projects -->
            <x-card title="Proyek & Pengalaman" icon="fas fa-project-diagram">
                <div class="space-y-4">
                    @foreach($projects as $project)
                    <div class="border-l-4 border-blue-400 pl-4 py-2 hover:border-blue-600 transition-colors">
                        <h4 class="font-semibold text-gray-800">{{ $project['name'] }}</h4>
                        <p class="text-gray-600 text-sm mt-1">{{ $project['description'] }}</p>
                        <div class="mt-2">
                            <span class="inline-block bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs font-medium">
                                {{ $project['tech'] }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </x-card>
        </div>

        <!-- Right Column -->
        <div class="space-y-8">
            
            <!-- Profile Summary -->
            <x-card title="Profil Singkat" icon="fas fa-user-tie">
                <p class="text-gray-700 leading-relaxed">
                    Mahasiswa Sistem Informasi yang passionate dalam pengembangan web. 
                    Memiliki dasar kuat dalam HTML, CSS, PHP, dan framework Laravel. 
                    Aktif belajar teknologi terbaru dan siap berkontribusi dalam tim pengembangan software.
                </p>
            </x-card>

            <!-- Contact Info -->
            <x-card title="Kontak" icon="fas fa-address-book">
                <div class="space-y-4">
                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                        <i class="fas fa-phone text-blue-500 w-6"></i>
                        <div class="ml-3">
                            <p class="font-medium">{{ $profileData['phone'] }}</p>
                            <p class="text-sm text-gray-600">Telepon/WhatsApp</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                        <i class="fas fa-envelope text-green-500 w-6"></i>
                        <div class="ml-3">
                            <p class="font-medium">{{ $profileData['email'] }}</p>
                            <p class="text-sm text-gray-600">Email</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                        <i class="fas fa-map-marker-alt text-purple-500 w-6"></i>
                        <div class="ml-3">
                            <p class="font-medium">Yogyakarta</p>
                            <p class="text-sm text-gray-600">Lokasi</p>
                        </div>
                    </div>
                </div>
            </x-card>

            <!-- Languages -->
            <x-card title="Bahasa" icon="fas fa-language">
                <div class="space-y-3">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Indonesia</span>
                            <span class="text-sm text-gray-600">Native</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">English</span>
                            <span class="text-sm text-gray-600">Intermediate</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</div>
@endsection