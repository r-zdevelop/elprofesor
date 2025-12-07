<section id="social-networks" class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-secondary font-semibold text-sm uppercase tracking-wide">Get In Touch</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-dark mb-6">Let's Work Together</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
            </p>
        </div>

        <!-- Contact Card -->
        <div class="bg-gradient-to-br from-secondary to-dark rounded-2xl shadow-2xl p-8 md:p-12 mb-12 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <!-- Left side - CTA -->
                <div>
                    <h3 class="text-3xl font-bold mb-4">Ready to start a project?</h3>
                    <p class="text-blue-100 mb-6 text-lg">
                        Drop me a message and let's discuss how I can help bring your ideas to life.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        @foreach($networks as $network)
                            @if($network['icon'] === 'mail')
                            <a href="{{ $network['url'] }}"
                               class="inline-flex items-center justify-center px-6 py-3 bg-accent hover:bg-accent-alt text-dark rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:transform hover:-translate-y-1">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Send Email
                            </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Right side - Social Links -->
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wide mb-4 text-blue-100">Connect with me</p>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($networks as $network)
                            @if($network['icon'] !== 'mail')
                            <a href="{{ $network['url'] }}"
                                target="_blank"
                                class="flex items-center p-4 bg-white/10 backdrop-blur-sm rounded-lg hover:bg-white/20 transition-all duration-300 group border border-white/20">
                                <div class="flex-shrink-0 mr-3">
                                    @switch($network['icon'])
                                    @case('linkedin')
                                    <svg class="w-6 h-6 text-white group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                    @break
                                    @case('github')
                                    <svg class="w-6 h-6 text-white group-hover:scale-110 transition-transform duration-300"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                    </svg>
                                    @break
                                    @case('x')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 text-white group-hover:scale-110 transition-transform duration-300" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                    </svg>
                                    @break
                                    @default
                                    <div class="w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                        <span class="text-secondary text-xs font-bold">{{ substr($network['name'], 0, 1) }}</span>
                                    </div>
                                    @endswitch
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-sm font-semibold text-white truncate">
                                        {{ $network['name'] }}
                                    </h3>
                                </div>
                            </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Info -->
        <div class="grid md:grid-cols-3 gap-6 text-center">
            <div class="p-6 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-dark mb-2">Location</h4>
                <p class="text-gray-600 text-sm">Available Worldwide</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-dark mb-2">Response Time</h4>
                <p class="text-gray-600 text-sm">Usually within 24 hours</p>
            </div>

            <div class="p-6 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h4 class="font-semibold text-dark mb-2">Availability</h4>
                <p class="text-gray-600 text-sm">Open to opportunities</p>
            </div>
        </div>
    </div>
</section>