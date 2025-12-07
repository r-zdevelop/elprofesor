<footer class="bg-dark text-gray-300 py-12 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

            <!-- Brand Section -->
            <div>
                <a href="/" class="text-2xl font-bold text-white hover:text-primary transition-colors duration-200">
                    {{ config('app.name', 'My Portfolio') }}
                </a>
                <p class="mt-4 text-gray-400 text-sm leading-relaxed">
                    Building digital experiences with passion and precision. Let's create something amazing together.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold mb-4 text-sm uppercase tracking-wide">Quick Links</h3>
                <div class="flex flex-col space-y-3">
                    <a href="/#about" class="text-gray-400 hover:text-primary transition-colors duration-200 text-sm">About Me</a>
                    <a href="/#projects" class="text-gray-400 hover:text-primary transition-colors duration-200 text-sm">Projects</a>
                    <a href="{{ route('guide.ubuntu-apache-php') }}" class="text-gray-400 hover:text-primary transition-colors duration-200 text-sm">Guides</a>
                    <a href="/#social-networks" class="text-gray-400 hover:text-primary transition-colors duration-200 text-sm">Contact</a>
                </div>
            </div>

            <!-- Social Links -->
            <div>
                <h3 class="text-white font-semibold mb-4 text-sm uppercase tracking-wide">Connect With Me</h3>
                <div class="flex space-x-4">
                    <a href="https://github.com/yourusername" target="_blank"
                       class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-200">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2.2c-3.2.7-3.9-1.6-3.9-1.6-.6-1.6-1.5-2-1.5-2-1.2-.8.1-.8.1-.8 1.3.1 2 .9 2 .9 1.2 2 3.2 1.4 4 .9.1-.9.5-1.4.8-1.7-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.2 11.2 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 2.9.1 3.2.8.9 1.2 1.9 1.2 3.2 0 4.6-2.7 5.6-5.3 5.9.6.5.9 1.2.9 2.5v3.7c0 .3.2.7.8.6a11.5 11.5 0 0 0 7.9-10.9C23.5 5.65 18.35.5 12 .5z"/>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank"
                       class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary hover:scale-110 transition-all duration-200">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.7 2.2 5 5 5h14c2.8 0 5-2.3 5-5v-14c0-2.8-2.2-5-5-5zM8.3 19.6h-3.1V9h3.1v10.6zm-1.5-12.1c-1 0-1.7-.7-1.7-1.6 0-.9.7-1.6 1.7-1.6 1 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6zM20 19.6h-3.1v-5.1c0-1.2 0-2.8-1.7-2.8s-1.9 1.3-1.9 2.7v5.2h-3.1V9h3v1.5h.1c.4-.8 1.5-1.7 3.1-1.7 3.4 0 4 2.3 4 5.2v5.6z"/>
                        </svg>
                    </a>
                </div>
                <p class="mt-4 text-gray-400 text-sm">
                    Available for freelance opportunities
                </p>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 pt-8 mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} {{ config('app.name', 'My Portfolio') }}. All rights reserved.
                </p>
                <p class="text-gray-500 text-sm mt-2 md:mt-0">
                    Built with Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </div>
</footer>
