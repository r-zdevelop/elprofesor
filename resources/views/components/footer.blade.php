<footer class="text-gray-300 py-8 mt-16" style="background-color: #4A5568;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row justify-between items-center">

            <!-- Logo / Brand -->
            <div class="mb-4 md:mb-0">
                <a href="/" class="text-2xl font-bold text-white">{{ config('app.name', 'My Portfolio') }}</a>
            </div>

            <!-- Navigation Links -->
            <div class="flex space-x-6 mb-4 md:mb-0">
                <a href="#about" class="hover:text-primary transition-colors duration-200">About</a>
                <a href="#projects" class="hover:text-primary transition-colors duration-200">Projects</a>
                <a href="#contact" class="hover:text-primary transition-colors duration-200">Contact</a>
            </div>

            <!-- Social Links -->
            <div class="flex space-x-4">
                <a href="https://github.com/yourusername" target="_blank" class="hover:text-primary transition-colors duration-200">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2.2c-3.2.7-3.9-1.6-3.9-1.6-.6-1.6-1.5-2-1.5-2-1.2-.8.1-.8.1-.8 1.3.1 2 .9 2 .9 1.2 2 3.2 1.4 4 .9.1-.9.5-1.4.8-1.7-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.2 11.2 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 2.9.1 3.2.8.9 1.2 1.9 1.2 3.2 0 4.6-2.7 5.6-5.3 5.9.6.5.9 1.2.9 2.5v3.7c0 .3.2.7.8.6a11.5 11.5 0 0 0 7.9-10.9C23.5 5.65 18.35.5 12 .5z"/>
                    </svg>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank" class="hover:text-primary transition-colors duration-200">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.7 2.2 5 5 5h14c2.8 0 5-2.3 5-5v-14c0-2.8-2.2-5-5-5zM8.3 19.6h-3.1V9h3.1v10.6zm-1.5-12.1c-1 0-1.7-.7-1.7-1.6 0-.9.7-1.6 1.7-1.6 1 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6zM20 19.6h-3.1v-5.1c0-1.2 0-2.8-1.7-2.8s-1.9 1.3-1.9 2.7v5.2h-3.1V9h3v1.5h.1c.4-.8 1.5-1.7 3.1-1.7 3.4 0 4 2.3 4 5.2v5.6z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-gray-500 text-sm mt-6">
            © {{ date('Y') }} {{ config('app.name', 'My Portfolio') }}. All rights reserved.
        </div>
    </div>
</footer>
