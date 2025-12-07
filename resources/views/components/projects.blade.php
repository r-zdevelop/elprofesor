<section id="projects" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wide">Portfolio</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-dark mb-4">Featured Projects</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Explore my latest work and see how I bring ideas to life
            </p>
        </div>

        <div class="space-y-12">
            @foreach($projects as $project)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <!-- Project Header -->
                <div class="px-6 py-8 md:px-8 md:py-10 bg-gradient-to-r from-secondary to-dark text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-3xl md:text-4xl font-bold mb-2">{{ $project->title }}</h3>
                            <p class="text-blue-100 text-lg">{{ $project->type }}</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            @if($project->project_duration)
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2 border border-white/20">
                                <span class="text-sm font-medium">{{ $project->project_duration }}</span>
                            </div>
                            @endif
                            @if($project->url)
                            <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center justify-center px-6 py-2 rounded-lg font-semibold bg-accent hover:bg-accent-alt text-dark transition-all duration-300 shadow-lg hover:shadow-xl hover:transform hover:-translate-y-1">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                View Project
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-6 md:p-8">
                    <!-- Description -->
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold mb-4 text-dark flex items-center">
                            <span class="w-1 h-6 bg-secondary rounded-full mr-3"></span>
                            Project Overview
                        </h4>
                        <p class="text-gray-700 leading-relaxed text-lg mb-4">{{ $project->description }}</p>
                        @if($project->course_description)
                        <p class="text-gray-600 italic bg-gray-50 p-4 rounded-lg border-l-4 border-primary">
                            {{ $project->course_description }}
                        </p>
                        @endif
                    </div>

                    <!-- Technologies -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-dark flex items-center">
                            <svg class="w-5 h-5 mr-2 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                            Technologies Used
                        </h4>
                        <div class="flex flex-wrap gap-3">
                            @foreach($project->technologies as $tech)
                            <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 hover:scale-105 transition-all">
                                {{ $tech->name }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
