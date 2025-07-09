<section id="beranda" class="relative bg-gradient-to-br from-green-50 to-green-100 min-h-screen flex items-center pt-16">
    <!-- Circuit Board Pattern Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-64 h-64 border-2 border-green-300 rounded-full"></div>
        <div class="absolute top-20 right-20 w-32 h-32 border-2 border-green-300 rounded-lg rotate-45"></div>
        <div class="absolute bottom-20 left-20 w-48 h-48 border-2 border-green-300 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 border-2 border-green-300 rounded-lg rotate-12"></div>
        
        <!-- Circuit lines -->
        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="circuit" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 0 5 L 10 5 M 5 0 L 5 10" stroke="#00FF66" stroke-width="0.5" fill="none" opacity="0.3"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#circuit)" />
        </svg>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    <span class="text-green-600">ITK</span> Lab
                </h1>
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-gray-800 mb-4">
                    Laboratorium Infrastruktur dan Tata Kelola Sistem Informasi
                </h2>
                <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                    Membangun Fondasi Digital yang Tangguh dan Terkelola untuk Masa Depan yang Berkelanjutan
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#tentang" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 shadow-lg hover:shadow-xl">
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="#kontak" class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200">
                        Hubungi Kami
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 mt-12 pt-8 border-t border-gray-200">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">50+</div>
                        <div class="text-sm text-gray-600">Proyek Riset</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">100+</div>
                        <div class="text-sm text-gray-600">Mahasiswa</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600">25+</div>
                        <div class="text-sm text-gray-600">Publikasi</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Tech Illustration -->
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md mx-auto">
                    <!-- Server Rack Illustration -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Server Infrastructure</h3>
                            <div class="flex space-x-1">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse delay-100"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse delay-200"></div>
                            </div>
                        </div>
                        
                        <!-- Server Units -->
                        <div class="space-y-3">
                            <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-800">Database Server</div>
                                    <div class="text-xs text-gray-500">Status: Online</div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-800">Cloud Gateway</div>
                                    <div class="text-xs text-gray-500">Status: Active</div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-100 rounded-lg p-4 flex items-center">
                                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm font-medium text-gray-800">Security Module</div>
                                    <div class="text-xs text-gray-500">Status: Protected</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute -top-4 -right-4 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-lg animate-bounce">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                
                <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
