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

                        <!-- Features -->
                        <div>
                            <h4 class="text-lg font-semibold mb-3 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Key Features
                            </h4>
                            <ul class="space-y-2">
                                @foreach($project['features'] as $feature)
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Key Highlights -->
                        <div>
                            <h4 class="text-lg font-semibold mb-3 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                                Key Highlights
                            </h4>
                            <ul class="space-y-2">
                                @foreach($project['key_highlights'] as $highlight)
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $highlight }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <!-- Development Approach -->
                        <div>
                            <h4 class="text-lg font-semibold mb-3 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Development Approach
                            </h4>
                            <ul class="space-y-2">
                                @foreach($project['development_approach'] as $step)
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $step }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Technical Achievements -->
                        <div>
                            <h4 class="text-lg font-semibold mb-3 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Technical Achievements
                            </h4>
                            <ul class="space-y-2">
                                @foreach($project['technical_achievements'] as $achievement)
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $achievement }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Client Benefits -->
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h4 class="text-lg font-semibold mb-2 text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Client Benefits
                            </h4>
                            <p class="text-gray-700">{{ $project['client_benefits'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
