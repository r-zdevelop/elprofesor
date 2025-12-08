@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <!-- Header -->
    <div class="mb-12 text-center">
        <a href="/" class="text-blue-600 hover:text-blue-800 inline-flex items-center mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Home
        </a>

        <h1 class="text-4xl font-bold text-gray-900 mb-4">Development Guides</h1>
        <p class="text-xl text-gray-600">Step-by-step tutorials for setting up your development environment</p>
    </div>

    <!-- Guides Grid -->
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Ubuntu Apache PHP Guide - Part 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-6">
                <div class="flex items-center justify-between mb-2">
                    <span class="bg-blue-900 text-white text-xs font-bold px-3 py-1 rounded-full">Part 1</span>
                    <span class="text-blue-100 text-sm">December 2025</span>
                </div>
                <h2 class="text-2xl font-bold text-white mb-2">Ubuntu 24.04 – Multiple PHP Versions + Apache</h2>
                <p class="text-blue-100">The complete, battle-tested guide</p>
            </div>

            <div class="p-6">
                <p class="text-gray-700 mb-4">
                    Everything you need to develop PHP projects in <code class="bg-gray-200 px-2 py-1 rounded text-sm">~/Sites</code> with instant switching between PHP 7.0 → 8.4, exactly like the famous macOS <code class="bg-gray-200 px-2 py-1 rounded text-sm">sphp</code> script.
                </p>

                <div class="mb-4">
                    <h3 class="font-semibold text-gray-900 mb-2">What You'll Get:</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Apache 2.4 + PHP-FPM (not mod_php)
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            PHP 7.0 - 8.4 installed side-by-side
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            One command to switch: <code class="bg-gray-200 px-1 py-0.5 rounded text-xs">sudo sphp 8.3</code>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('guide.ubuntu-apache-php') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Read Part 1
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Ubuntu MySQL VHost APCu - Part 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="bg-gradient-to-r from-green-600 to-green-700 p-6">
                <div class="flex items-center justify-between mb-2">
                    <span class="bg-green-900 text-white text-xs font-bold px-3 py-1 rounded-full">Part 2</span>
                    <span class="text-green-100 text-sm">December 2025</span>
                </div>
                <h2 class="text-2xl font-bold text-white mb-2">MySQL, Virtual Hosts & Xdebug</h2>
                <p class="text-green-100">Professional development tools setup</p>
            </div>

            <div class="p-6">
                <div class="bg-blue-50 border-l-4 border-blue-500 p-3 mb-4 rounded-r">
                    <p class="text-blue-900 text-sm font-medium">
                        📋 Requires Part 1 to be completed first!
                    </p>
                </div>

                <p class="text-gray-700 mb-4">
                    Complete your PHP development environment with MySQL/MariaDB, wildcard virtual hosts, Xdebug debugging, APCu caching, and YAML support.
                </p>

                <div class="mb-4">
                    <h3 class="font-semibold text-gray-900 mb-2">What You'll Get:</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            MariaDB with phpMyAdmin or Adminer
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Wildcard <code class="bg-gray-200 px-1 py-0.5 rounded text-xs">*.test</code> domains
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Xdebug with easy on/off toggle
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            APCu cache for 5X faster YAML
                        </li>
                    </ul>
                </div>

                <a href="{{ route('guide.ubuntu-mysql-vhost-apu') }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                    Read Part 2
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Coming Soon Section -->
    <div class="mt-12">
        <div class="bg-gray-50 rounded-lg p-8 text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">More Guides Coming Soon</h3>
            <p class="text-gray-600 mb-4">
                Stay tuned for more development guides covering topics like SSL/HTTPS setup, Docker development environments, and more!
            </p>
            <div class="flex justify-center space-x-4">
                <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Part 3: SSL/HTTPS Setup</span>
                <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Docker + WSL2</span>
            </div>
        </div>
    </div>
</div>
@endsection
