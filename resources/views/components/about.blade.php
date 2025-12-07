<section id="about" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Profile Image -->
            <div class="flex justify-center md:justify-start">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-primary to-secondary rounded-2xl blur opacity-20"></div>
                    <img src="{{ asset('images/profile.jpeg') }}"
                         alt="Profile picture"
                         class="relative w-64 h-64 rounded-2xl shadow-xl object-cover border-4 border-white">
                </div>
            </div>

            <!-- About Text -->
            <div>
                <div class="inline-block mb-4">
                    <span class="text-secondary font-semibold text-sm uppercase tracking-wide">About Me</span>
                </div>
                <h2 class="text-4xl font-bold text-dark mb-6">Building digital experiences with passion</h2>
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    Hi 👋 I'm <span class="font-semibold text-dark">Regynald Zambrano</span>,
                    a passionate <span class="font-semibold text-secondary">Full-Stack Developer</span>
                    with experience in building web applications using
                    <strong>Laravel, React, and modern frontend technologies</strong>.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                    I love crafting clean, user-friendly interfaces and writing
                    efficient backend code. My goal is to design digital
                    experiences that not only look great but also solve
                    real-world problems. 🚀
                </p>

                <!-- Skills List -->
                <div>
                    <p class="text-sm font-semibold text-gray-700 mb-3">TECHNOLOGIES I WORK WITH</p>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 transition-colors">Laravel</span>
                        <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 transition-colors">React</span>
                        <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 transition-colors">JavaScript</span>
                        <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 transition-colors">PHP</span>
                        <span class="px-4 py-2 rounded-lg text-sm font-medium text-secondary bg-primary/20 border border-primary/30 hover:bg-primary/30 transition-colors">UI/UX Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
