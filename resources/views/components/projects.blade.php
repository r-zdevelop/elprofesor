<section id="projects" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12 text-gray-900">Featured Project</h2>
        
        @foreach($projects as $project)
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Project Header -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-12 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-3xl font-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-blue-100 text-lg">{{ $project['type'] }}</p>
                    </div>
                    <div class="text-right space-y-2">
                        <div class="bg-white/20 rounded-lg px-4 py-2">
                            <span class="text-sm font-medium">{{ $project['project_duration'] }}</span>
                        </div>
                        @if(isset($project['url']))
                        <div>
                            <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-300 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                View Project
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Project Content -->
            <div class="p-8">
                <!-- Description -->
                <div class="mb-8">
                    <h4 class="text-xl font-semibold mb-4 text-gray-900">Project Overview</h4>
                    <p class="text-gray-700 leading-relaxed mb-4">{{ $project['description'] }}</p>
                    <p class="text-gray-600 italic">{{ $project['course_description'] }}</p>
                </div>

                

                <!-- Two Column Layout -->
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <!-- Technologies -->
                        <div>
                            <h4 class="text-lg font-semibold mb-3 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                                Technologies Used
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['technologies'] as $tech)
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
