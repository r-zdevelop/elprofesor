<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Get in Touch</h2>
        <p class="text-gray-600 mb-12">
            Interested in working together or have any questions?
            Drop me a message and I’ll get back to you as soon as possible.
        </p>

        <!-- Contact Form -->
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Name -->
                <input type="text" name="name" placeholder="Your Name"
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                <!-- Email -->
                <input type="email" name="email" placeholder="Your Email"
                       class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <!-- Message -->
            <textarea name="message" rows="5" placeholder="Your Message"
                      class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required></textarea>

            <!-- Submit -->
            <button type="submit"
                    class="w-full md:w-auto px-6 py-3 bg-secondary text-white rounded-lg hover:bg-dark transition-colors duration-200">
                Send Message
            </button>
        </form>

        <!-- Social Links -->
        <div class="mt-12 flex justify-center space-x-6">
            <a href="mailto:your@email.com" class="text-gray-600 hover:text-secondary transition-colors duration-200">Email</a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-gray-600 hover:text-secondary transition-colors duration-200">LinkedIn</a>
            <a href="https://github.com/yourusername" target="_blank" class="text-gray-600 hover:text-secondary transition-colors duration-200">GitHub</a>
        </div>
    </div>
</section>

@if(session('success'))
    <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg">
        {{ session('success') }}
    </div>
@endif

