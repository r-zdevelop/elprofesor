@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">
    <!-- Header -->
    <div class="mb-12">
        <a href="/" class="text-blue-600 hover:text-blue-800 inline-flex items-center mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to Home
        </a>

        <h1 class="text-4xl font-bold text-gray-900 mb-4">Ubuntu 24.04 – Multiple PHP Versions + Apache Development Setup</h1>
        <p class="text-xl text-gray-600 mb-4">The complete, battle-tested guide (December 2025)</p>
        <p class="text-gray-700">Everything you need to develop PHP projects in <code class="bg-gray-200 px-2 py-1 rounded text-sm">~/Sites</code> with instant switching between PHP 7.0 → 8.4, exactly like the famous macOS <code class="bg-gray-200 px-2 py-1 rounded text-sm">sphp</code> script — but working perfectly on Ubuntu 24.04.</p>
    </div>

    <!-- Warning Box -->
    <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8 rounded-r-lg">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-6 w-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-lg font-bold text-orange-900 mb-2">⚠️ For the Brave Souls Only!</h3>
                <p class="text-orange-900 mb-2">This guide is for developers who aren't afraid to get their hands dirty with the Linux terminal. You'll be:</p>
                <ul class="list-disc ml-5 space-y-1 text-orange-900">
                    <li>Running commands with <code class="bg-orange-100 px-2 py-1 rounded text-sm">sudo</code> (root access)</li>
                    <li>Editing system configuration files</li>
                    <li>Installing and configuring server software</li>
                    <li>Potentially breaking things (so have a backup plan!)</li>
                </ul>
                <p class="text-orange-900 mt-3 font-semibold">If you're comfortable with the terminal or willing to learn, dive in! If not, maybe stick to Docker or a VM for now.</p>
            </div>
        </div>
    </div>

    <!-- Final Result Box -->
    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8 rounded-r-lg">
        <h3 class="text-lg font-bold text-blue-900 mb-3">Final Result You Will Have</h3>
        <ul class="space-y-2 text-blue-900">
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Apache 2.4 + PHP-FPM (not mod_php)
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                PHP 7.0, 7.1, 7.2, 7.3, 7.4, 8.0, 8.1, 8.2, 8.3, 8.4 installed side-by-side
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                One command to switch versions: <code class="bg-blue-100 px-2 py-1 rounded text-sm">sudo sphp 8.3</code>, <code class="bg-blue-100 px-2 py-1 rounded text-sm">sudo sphp 7.4</code>, etc.
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                All projects live safely in <code class="bg-blue-100 px-2 py-1 rounded text-sm">~/Sites</code>
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <code class="bg-blue-100 px-2 py-1 rounded text-sm">http://localhost/info.php</code> instantly reflects the active version
            </li>
            <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-0.5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                No permission errors, no socket errors, no AppArmor headaches
            </li>
        </ul>
    </div>

    <!-- Table of Contents -->
    <div class="bg-gray-50 rounded-lg p-6 mb-8">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Table of Contents</h3>
        <nav class="space-y-2">
            <a href="#step-1" class="block text-blue-600 hover:text-blue-800">Step 1 – Clean Start</a>
            <a href="#step-2" class="block text-blue-600 hover:text-blue-800">Step 2 – System Update & Tools</a>
            <a href="#step-3" class="block text-blue-600 hover:text-blue-800">Step 3 – Add PHP PPA</a>
            <a href="#step-4" class="block text-blue-600 hover:text-blue-800">Step 4 – Install Apache</a>
            <a href="#step-5" class="block text-blue-600 hover:text-blue-800">Step 5 – Install All PHP Versions</a>
            <a href="#step-6" class="block text-blue-600 hover:text-blue-800">Step 6 – Fix PHP-FPM Socket Permissions</a>
            <a href="#step-7" class="block text-blue-600 hover:text-blue-800">Step 7 – Create Apache Config Files</a>
            <a href="#step-8" class="block text-blue-600 hover:text-blue-800">Step 8 – Enable PHP by Default</a>
            <a href="#step-9" class="block text-blue-600 hover:text-blue-800">Step 9 – Allow Apache to Read Home Directory</a>
            <a href="#step-10" class="block text-blue-600 hover:text-blue-800">Step 10 – Set Up DirectoryIndex</a>
            <a href="#step-11" class="block text-blue-600 hover:text-blue-800">Step 11 – Create sphp Switcher Script</a>
            <a href="#step-12" class="block text-blue-600 hover:text-blue-800">Step 12 – Test Everything</a>
            <a href="#optional" class="block text-blue-600 hover:text-blue-800">Optional: Test with Grav CMS</a>
            <a href="#updating" class="block text-blue-600 hover:text-blue-800">Updating PHP Versions</a>
        </nav>
    </div>

    <!-- Steps -->
    <div class="space-y-12">
        <!-- Step 1 -->
        <section id="step-1">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">1</span>
                Clean Start (if you already messed with PHP)
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt purge php* libapache2-mod-php* -y
sudo apt autoremove -y
sudo rm -rf /etc/php/*/fpm/pool.d/www.conf.bak* 2>/dev/null || true</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">apt purge</code> – Completely removes packages and their config files (like npm uninstall + deleting node_modules)</li>
                    <li><code class="bg-gray-100 px-1 rounded">apt autoremove</code> – Cleans up leftover dependencies that are no longer needed</li>
                    <li><code class="bg-gray-100 px-1 rounded">rm -rf</code> – Force delete files/folders (the <code class="bg-gray-100 px-1 rounded">-rf</code> means recursive + force)</li>
                </ul>
            </div>
        </section>

        <!-- Step 2 -->
        <section id="step-2">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">2</span>
                System Update & Tools
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt update && sudo apt upgrade -y
sudo apt install -y software-properties-common curl unzip wget</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">apt update</code> – Refreshes the list of available packages (like checking for new npm package versions)</li>
                    <li><code class="bg-gray-100 px-1 rounded">apt upgrade</code> – Installs newer versions of installed packages</li>
                    <li><code class="bg-gray-100 px-1 rounded">apt install</code> – Installs new packages (similar to npm install)</li>
                    <li><code class="bg-gray-100 px-1 rounded">&&</code> – Runs the second command only if the first succeeds (like chaining promises)</li>
                </ul>
            </div>
        </section>

        <!-- Step 3 -->
        <section id="step-3">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">3</span>
                Add Ondřej Surý's PHP PPA (all versions)
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo add-apt-repository ppa:ondrej/php -y
sudo apt update</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">add-apt-repository</code> – Adds a new package source (like adding a custom npm registry)</li>
                    <li><code class="bg-gray-100 px-1 rounded">ppa:ondrej/php</code> – A third-party repository that provides all PHP versions</li>
                </ul>
            </div>
        </section>

        <!-- Step 4 -->
        <section id="step-4">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">4</span>
                Install Apache
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y apache2
sudo a2enmod rewrite actions alias proxy_fcgi setenvif
sudo systemctl enable apache2</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">a2enmod</code> – "Apache 2 Enable Module" - activates Apache modules (like enabling plugins)</li>
                    <li><code class="bg-gray-100 px-1 rounded">systemctl enable</code> – Makes Apache start automatically when your computer boots</li>
                    <li><code class="bg-gray-100 px-1 rounded">proxy_fcgi</code> – The module that lets Apache talk to PHP-FPM</li>
                </ul>
            </div>
        </section>

        <!-- Step 5 -->
        <section id="step-5">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">5</span>
                Install All PHP Versions + Common Extensions
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt install -y php7.0 php7.0-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php7.1 php7.1-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php7.2 php7.2-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php7.3 php7.3-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php7.4 php7.4-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php8.0 php8.0-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php8.1 php8.1-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php8.2 php8.2-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php8.3 php8.3-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}
sudo apt install -y php8.4 php8.4-{cli,fpm,curl,gd,mbstring,mysql,xml,zip,opcache}</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">{cli,fpm,curl,...}</code> – Bash brace expansion, installs multiple packages at once (like installing multiple npm packages in one command)</li>
                    <li><code class="bg-gray-100 px-1 rounded">cli</code> – Command line version of PHP (for running scripts)</li>
                    <li><code class="bg-gray-100 px-1 rounded">fpm</code> – FastCGI Process Manager (the server version that Apache will use)</li>
                </ul>
            </div>
        </section>

        <!-- Step 6 -->
        <section id="step-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">6</span>
                Fix PHP-FPM Socket Permissions (Critical on Ubuntu 24.04!)
            </h2>
            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-4">
                <p class="text-yellow-900 font-medium">This step is critical for Ubuntu 24.04!</p>
            </div>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo sed -i 's/;listen.mode = 0660/listen.mode = 0666/' /etc/php/*/fpm/pool.d/www.conf
sudo systemctl restart php*-fpm</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">sed -i</code> – "Stream editor in-place" - edits files by find/replace (like Find & Replace in your code editor)</li>
                    <li><code class="bg-gray-100 px-1 rounded">s/find/replace/</code> – The find/replace pattern (s = substitute)</li>
                    <li><code class="bg-gray-100 px-1 rounded">0666</code> – File permissions (read+write for everyone, needed for Apache to access the socket)</li>
                    <li><code class="bg-gray-100 px-1 rounded">systemctl restart</code> – Restarts a service (like restarting a Node.js server)</li>
                </ul>
            </div>
        </section>

        <!-- Step 7 -->
        <section id="step-7">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">7</span>
                Create Apache Config Files for Every Version
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>for v in 7.0 7.1 7.2 7.3 7.4 8.0 8.1 8.2 8.3 8.4; do
    sudo tee /etc/apache2/conf-available/php${v}-fpm.conf > /dev/null &lt;&lt;EOF
&lt;FilesMatch \.php$>
    SetHandler "proxy:unix:/run/php/php${v}-fpm.sock|fcgi://localhost/"
&lt;/FilesMatch>
EOF
done</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">for v in ...</code> – A loop that iterates over each version (like <code class="bg-gray-100 px-1 rounded">for...of</code> in JavaScript)</li>
                    <li><code class="bg-gray-100 px-1 rounded">tee</code> – Writes text to a file (like <code class="bg-gray-100 px-1 rounded">fs.writeFileSync</code>)</li>
                    <li><code class="bg-gray-100 px-1 rounded">&lt;&lt;EOF...EOF</code> – A "heredoc" (like template literals in JS, creates multi-line strings)</li>
                    <li><code class="bg-gray-100 px-1 rounded">${v}</code> – Variable substitution (like <code class="bg-gray-100 px-1 rounded">${v}</code> in JS template literals)</li>
                </ul>
            </div>
        </section>

        <!-- Step 8 -->
        <section id="step-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">8</span>
                Enable PHP 8.3 by Default (or any version you want first)
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo a2enconf php8.3-fpm
sudo systemctl restart apache2</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">a2enconf</code> – "Apache 2 Enable Configuration" - activates a config file</li>
                    <li>This tells Apache to start using PHP 8.3 by default</li>
                </ul>
            </div>
        </section>

        <!-- Step 9 -->
        <section id="step-9">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">9</span>
                Allow Apache to Read Your Home Directory
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>chmod +x ~/
mkdir -p ~/Sites
chmod 755 ~/Sites</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">chmod</code> – "Change mode" - changes file/folder permissions</li>
                    <li><code class="bg-gray-100 px-1 rounded">+x</code> – Makes a folder executable (allows entering it)</li>
                    <li><code class="bg-gray-100 px-1 rounded">755</code> – Permission code: owner can read/write/execute, others can read/execute</li>
                    <li><code class="bg-gray-100 px-1 rounded">mkdir -p</code> – Creates a directory (the <code class="bg-gray-100 px-1 rounded">-p</code> means "don't error if it already exists")</li>
                    <li><code class="bg-gray-100 px-1 rounded">~</code> – Shortcut for your home folder (like <code class="bg-gray-100 px-1 rounded">/home/username</code>)</li>
                </ul>
            </div>
        </section>

        <!-- Step 10 -->
        <section id="step-10">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">10</span>
                Set Up DirectoryIndex (show index.php first)
            </h2>
            <p class="text-gray-700 mb-4">Edit <code class="bg-gray-200 px-2 py-1 rounded text-sm">/etc/apache2/mods-enabled/dir.conf</code> and make it look like this:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>&lt;IfModule mod_dir.c>
    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
&lt;/IfModule></code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">DirectoryIndex</code> – Tells Apache which files to look for when visiting a folder</li>
                    <li>By putting <code class="bg-gray-100 px-1 rounded">index.php</code> first, it prioritizes PHP files (like how Express.js looks for index.js)</li>
                </ul>
            </div>
        </section>

        <!-- Step 11 -->
        <section id="step-11">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">11</span>
                Create the Real Ubuntu sphp Switcher Script
            </h2>
            <p class="text-gray-700 mb-4">Create the script at <code class="bg-gray-200 px-2 py-1 rounded text-sm">/usr/local/bin/sphp</code> with the following content:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>#!/usr/bin/env bash
# sphp — Ubuntu PHP version switcher (FPM + Apache)
# Usage: sudo sphp 8.3   sudo sphp 7.4   etc.

VERSION="${1#php@}"
case "$VERSION" in
    7.0|7.1|7.2|7.3|7.4|8.0|8.1|8.2|8.3|8.4) ;;
    *) echo "Supported: 7.0 7.1 7.2 7.3 7.4 8.0 8.1 8.2 8.3 8.4"; exit 1 ;;
esac

echo "Switching to PHP $VERSION..."
sudo systemctl stop 'php*-fpm' 2>/dev/null || true
sudo systemctl start php${VERSION}-fpm
sudo update-alternatives --set php /usr/bin/php${VERSION} >/dev/null 2>&1 || true
sudo a2disconf php*-fpm.conf 2>/dev/null || true
sudo a2enconf php${VERSION}-fpm.conf
sudo systemctl restart apache2

echo "Active PHP version:"
php -v | head -1
echo "Test at http://localhost/info.php"</code></pre>
            </div>

            <p class="text-gray-700 mb-4 mt-4">After creating the file, make it executable:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo chmod +x /usr/local/bin/sphp</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What the script does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">#!/usr/bin/env bash</code> – Shebang line (tells the system this is a bash script)</li>
                    <li><code class="bg-gray-100 px-1 rounded">case "$VERSION" in</code> – Switch statement (like <code class="bg-gray-100 px-1 rounded">switch</code> in JavaScript)</li>
                    <li><code class="bg-gray-100 px-1 rounded">systemctl stop/start</code> – Stops/starts services (manages background processes)</li>
                    <li><code class="bg-gray-100 px-1 rounded">update-alternatives</code> – Changes which version of PHP the <code class="bg-gray-100 px-1 rounded">php</code> command uses in terminal</li>
                    <li><code class="bg-gray-100 px-1 rounded">a2disconf/a2enconf</code> – Disables old config, enables new config for the chosen PHP version</li>
                </ul>
            </div>
        </section>

        <!-- Step 12 -->
        <section id="step-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">12</span>
                Test Everything
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group mb-4">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>echo "&lt;?php phpinfo(); ?>" > ~/Sites/info.php

# Try different versions
sudo sphp 8.3
sudo sphp 8.2
sudo sphp 7.4
sudo sphp 8.1</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">echo "text" > file</code> – Writes text to a file (redirects output, like <code class="bg-gray-100 px-1 rounded">fs.writeFileSync</code>)</li>
                    <li><code class="bg-gray-100 px-1 rounded">#</code> – Comment line (like <code class="bg-gray-100 px-1 rounded">//</code> in JavaScript)</li>
                    <li><code class="bg-gray-100 px-1 rounded">sudo sphp 8.3</code> – Runs your custom script to switch PHP versions</li>
                </ul>
            </div>
            <p class="text-gray-700">Open <a href="http://localhost/info.php" class="text-blue-600 hover:text-blue-800 underline" target="_blank">http://localhost/info.php</a> after each command — version changes instantly.</p>
        </section>

        <!-- Optional -->
        <section id="optional">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-green-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">✓</span>
                Optional: Test with Grav CMS
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group mb-4">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>cd ~/Sites
curl -OL https://getgrav.org/download/core/grav-admin/latest
unzip -q grav-admin*.zip && rm grav-admin*.zip</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">cd</code> – "Change directory" - navigates to a folder (like <code class="bg-gray-100 px-1 rounded">cd</code> in your terminal)</li>
                    <li><code class="bg-gray-100 px-1 rounded">curl -OL</code> – Downloads a file (<code class="bg-gray-100 px-1 rounded">-O</code> saves with original name, <code class="bg-gray-100 px-1 rounded">-L</code> follows redirects)</li>
                    <li><code class="bg-gray-100 px-1 rounded">unzip -q</code> – Extracts a zip file (<code class="bg-gray-100 px-1 rounded">-q</code> = quiet mode, no verbose output)</li>
                    <li><code class="bg-gray-100 px-1 rounded">*</code> – Wildcard that matches any characters (like <code class="bg-gray-100 px-1 rounded">*.js</code> in glob patterns)</li>
                </ul>
            </div>
            <p class="text-gray-700">Visit <a href="http://localhost/grav-admin" class="text-blue-600 hover:text-blue-800 underline" target="_blank">http://localhost/grav-admin</a> → works on any PHP version you switch to.</p>
        </section>

        <!-- Updating -->
        <section id="updating">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                <span class="bg-purple-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">↻</span>
                Updating PHP Versions
            </h2>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto relative group mb-4">
                <button onclick="copyCode(this)" class="absolute top-2 right-2 bg-gray-700 hover:bg-gray-600 text-white px-3 py-1 rounded text-sm opacity-0 group-hover:opacity-100 transition-opacity">
                    Copy
                </button>
                <pre class="text-gray-100 text-sm"><code>sudo apt update && sudo apt upgrade
# Then switch to each version once so its binaries get updated
for v in 8.3 8.2 8.1 7.4; do sudo sphp $v; done</code></pre>
            </div>
            <div class="mt-3 text-sm text-gray-600 space-y-1">
                <p><strong>What this does:</strong></p>
                <ul class="list-disc ml-5 space-y-1">
                    <li><code class="bg-gray-100 px-1 rounded">apt upgrade</code> – Updates all installed packages to their latest versions</li>
                    <li><code class="bg-gray-100 px-1 rounded">for v in ...; do ...; done</code> – Loop through versions and activate each one</li>
                    <li><code class="bg-gray-100 px-1 rounded">$v</code> – References the loop variable (like <code class="bg-gray-100 px-1 rounded">${v}</code> in JS)</li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Conclusion -->
    <div class="bg-green-50 border-l-4 border-green-500 p-6 mt-12 rounded-r-lg">
        <h3 class="text-xl font-bold text-green-900 mb-2">You're done! 🎉</h3>
        <p class="text-green-900">You now have the perfect, rock-solid multiple-PHP development environment on Ubuntu 24.04 — exactly like the famous macOS setup, but actually working.</p>
        <p class="text-green-900 mt-2 font-semibold">Enjoy coding!</p>
    </div>

    <!-- Credits -->
    <div class="bg-gray-50 border-l-4 border-gray-400 p-6 mt-8 rounded-r-lg">
        <h3 class="text-lg font-bold text-gray-900 mb-2">📚 Credits & Inspiration</h3>
        <p class="text-gray-700">This guide was inspired by and adapted from the excellent <a href="https://getgrav.org/blog/macos-sequoia-apache-multiple-php-versions" class="text-blue-600 hover:text-blue-800 underline font-semibold" target="_blank" rel="noopener">macOS Sequoia Apache Multiple PHP Versions</a> guide from the Grav CMS team.</p>
        <p class="text-gray-700 mt-2">I've translated and adapted their approach to work perfectly on Ubuntu 24.04, adding beginner-friendly explanations for those new to Linux.</p>
    </div>

    <!-- Back to top -->
    <div class="text-center mt-12">
        <a href="#" class="text-blue-600 hover:text-blue-800 inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
            Back to Top
        </a>
    </div>
</div>

<script>
function copyCode(button) {
    const codeBlock = button.nextElementSibling.querySelector('code');
    const text = codeBlock.textContent;

    navigator.clipboard.writeText(text).then(() => {
        const originalText = button.textContent;
        button.textContent = 'Copied!';
        button.classList.add('bg-green-600');
        button.classList.remove('bg-gray-700');

        setTimeout(() => {
            button.textContent = originalText;
            button.classList.remove('bg-green-600');
            button.classList.add('bg-gray-700');
        }, 2000);
    });
}
</script>
@endsection
