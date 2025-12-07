<nav class="bg-white border-b border-gray-200 fixed w-full z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-secondary hover:text-dark transition-colors duration-200">
                    {{ config('app.name', 'My Portfolio') }}
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="/#about" class="text-gray-700 hover:text-secondary font-medium transition-colors duration-200">About</a>
                <a href="/#projects" class="text-gray-700 hover:text-secondary font-medium transition-colors duration-200">Projects</a>
                <a href="{{ route('guide.ubuntu-apache-php') }}" class="text-gray-700 hover:text-secondary font-medium transition-colors duration-200">Guides</a>
                <a href="/#social-networks" class="px-4 py-2 bg-secondary text-white rounded-lg hover:bg-dark transition-all duration-200">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-secondary focus:outline-none transition-colors duration-200">
                    <!-- Hamburger Icon -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2 bg-white border-t border-gray-200">
        <a href="/#about" class="block py-2 text-gray-700 hover:text-secondary font-medium transition-colors duration-200">About</a>
        <a href="/#projects" class="block py-2 text-gray-700 hover:text-secondary font-medium transition-colors duration-200">Projects</a>
        <a href="{{ route('guide.ubuntu-apache-php') }}" class="block py-2 text-gray-700 hover:text-secondary font-medium transition-colors duration-200">Guides</a>
        <a href="/#social-networks" class="block py-2 text-secondary font-medium transition-colors duration-200">Contact</a>
    </div>
</nav>
