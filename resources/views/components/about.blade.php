<section id="about" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Profile Image -->
            <div class="flex justify-center md:justify-start">
                <img src="{{ asset('images/profile.jpeg') }}"
                     alt="Profile picture"
                     class="w-64 h-64 rounded-2xl shadow-lg object-cover">
            </div>

            <!-- About Text -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">About Me</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Hi 👋 I’m <span class="font-semibold">Regynald Zambrano</span>,
                    a passionate <span class="text-blue-600 font-semibold">Full-Stack Developer</span>
                    with experience in building web applications using
                    <strong>Laravel, React, and modern frontend technologies</strong>.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    I love crafting clean, user-friendly interfaces and writing
                    efficient backend code. My goal is to design digital
                    experiences that not only look great but also solve
                    real-world problems. 🚀
                </p>

                <!-- Skills List -->
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700">Laravel</span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700">React</span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700">JavaScript</span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700">PHP</span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full text-sm text-gray-700">UI/UX Design</span>
                </div>
            </div>
        </div>
    </div>
</section>
