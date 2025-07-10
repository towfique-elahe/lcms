    <footer class="bg-surface text-onSurface border-t border-gray-200 mt-12">
        <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
            <!-- About -->
            <div>
                <h4 class="text-base font-semibold mb-3">About</h4>
                <p class="text-sm leading-relaxed">
                    {{ config('app.name') }} is a modern content management system built for simplicity and speed.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-base font-semibold mb-3">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition">Home</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-primary transition">Blog</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-primary transition">Services</a></li>
                    <li><a href="{{ route('page', 'about') }}" class="hover:text-primary transition">About</a></li>
                    <li><a href="{{ route('page', 'contact') }}" class="hover:text-primary transition">Contact</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="text-base font-semibold mb-3">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-primary transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-primary transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-primary transition">Support</a></li>
                </ul>
            </div>

            <!-- Newsletter or Social -->
            <div>
                <h4 class="text-base font-semibold mb-3">Stay Connected</h4>
                <p class="mb-3">Follow us on:</p>
                <div class="flex space-x-4 items-center">
                    <!-- Facebook -->
                    <a href="#" class="hover:text-primary transition" aria-label="Facebook">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.2 3-3.2.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12z"/>
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="#" class="hover:text-primary transition" aria-label="Twitter">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.88-2.37 8.6 8.6 0 0 1-2.72 1.04 4.28 4.28 0 0 0-7.3 3.9A12.15 12.15 0 0 1 3.15 4.9a4.28 4.28 0 0 0 1.32 5.7 4.2 4.2 0 0 1-1.94-.54v.05a4.28 4.28 0 0 0 3.43 4.2 4.3 4.3 0 0 1-1.94.07 4.28 4.28 0 0 0 4 2.97A8.6 8.6 0 0 1 2 19.54a12.1 12.1 0 0 0 6.56 1.92c7.88 0 12.2-6.53 12.2-12.2l-.01-.56A8.7 8.7 0 0 0 24 5.1a8.4 8.4 0 0 1-2.54.7z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" class="hover:text-primary transition" aria-label="LinkedIn">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14C2.25 0 0 2.25 0 5v14c0 2.75 2.25 5 5 5h14c2.75 0 5-2.25 5-5V5c0-2.75-2.25-5-5-5zm-11 19H5V9h3v10zm-1.5-11.25c-.96 0-1.5-.64-1.5-1.44C5 5.64 5.54 5 6.5 5s1.5.64 1.5 1.44c0 .8-.54 1.44-1.5 1.44zM20 19h-3v-5.25c0-1.27-.45-2.13-1.57-2.13-.86 0-1.37.58-1.6 1.13-.08.2-.1.47-.1.74V19h-3V9h3v1.38c.4-.62 1.1-1.5 2.68-1.5 1.96 0 3.59 1.28 3.59 4.04V19z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center text-xs text-onSurface bg-surface border-t border-gray-100 py-4 mt-8">
            &copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.
        </div>
    </footer>

</body>

</html>
