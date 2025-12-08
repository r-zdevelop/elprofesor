<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Development Guides</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Step-by-step tutorials to help you set up the perfect development environment
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Ubuntu Apache PHP Guide - Part 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-blue-900 text-white text-xs font-bold px-2 py-1 rounded">Part 1</span>
                        <svg class="w-8 h-8 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">Ubuntu Multiple PHP Versions</h3>
                </div>

                <div class="p-4">
                    <p class="text-gray-700 text-sm mb-4">
                        Set up Apache with PHP 7.0-8.4 and instant version switching like macOS
                    </p>

                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">December 2025</span>
                        <a href="{{ route('guide.ubuntu-apache-php') }}" class="text-blue-600 hover:text-blue-800 font-semibold text-sm inline-flex items-center">
                            Read Guide
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ubuntu MySQL VHost APCu - Part 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                <div class="bg-gradient-to-r from-green-600 to-green-700 p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="bg-green-900 text-white text-xs font-bold px-2 py-1 rounded">Part 2</span>
                        <svg class="w-8 h-8 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                            </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white">MySQL, VHosts & Xdebug</h3>
                </div>

                <div class="p-4">
                    <p class="text-gray-700 text-sm mb-4">
                        Add MySQL, wildcard domains, Xdebug debugging, and APCu caching
                    </p>

                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">December 2025</span>
                        <a href="{{ route('guide.ubuntu-mysql-vhost-apu') }}" class="text-green-600 hover:text-green-800 font-semibold text-sm inline-flex items-center">
                            Read Guide
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Guides Card -->
            <div class="bg-gradient-to-br from-purple-600 to-purple-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1 flex flex-col justify-center items-center p-6 text-center">
                <svg class="w-16 h-16 text-white opacity-80 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <h3 class="text-xl font-bold text-white mb-2">More Guides</h3>
                <p class="text-purple-100 text-sm mb-4">
                    Explore all available development guides
                </p>
                <a href="{{ route('guides.index') }}" class="bg-white text-purple-700 px-6 py-2 rounded-lg font-semibold hover:bg-purple-50 transition-colors inline-flex items-center">
                    View All
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
