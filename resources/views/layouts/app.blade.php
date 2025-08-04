
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ trans('Barnie\'s Academy offers professional courses to learn the art of specialty coffee preparation.') }}">
    <meta property="og:title" content="{{ trans('Barnie\'s Academy - Learn the Art of Coffee') }}">
    <meta property="og:description" content="{{ trans('Join Barnie\'s Academy to learn specialty coffee preparation with industry experts.') }}">
    <meta property="og:image" content="https://barniesacademy.com/og-image.jpg">
    <meta property="og:url" content="https://barniesacademy.com">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_AR' : 'en_US' }}">
    <meta name="robots" content="index, follow">
    <title>{{ trans('Barnie\'s Academy') }}</title>

    <!-- Preconnect to improve loading speed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com" defer></script>
    <!-- Font Awesome and Animate.css -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet" media="all" onload="this.media='all'">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" media="all" onload="this.media='all'">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" media="all" onload="this.media='all'">
    
    <!-- XLSX library (loaded asynchronously) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js" defer></script>

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            transition: all 0.3s ease-in-out;
        }
        :root {
            --dark-green: #064E3B;
            --light-green: #0f766e;
        }
        /* RTL styles */
        html[dir="rtl"] .nav-menu ul {
            flex-direction: row-reverse;
        }
        html[dir="rtl"] .nav-menu li {
            text-align: right;
        }
        html[dir="rtl"] .language-dropdown-content a {
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        /* LTR styles */
        html[dir="ltr"] .nav-menu ul {
            flex-direction: row;
        }
        html[dir="ltr"] .nav-menu li {
            text-align: left;
        }
        html[dir="ltr"] .language-dropdown-content a {
            flex-direction: row;
            justify-content: flex-start;
        }
        /* Mobile menu */
        html[dir="rtl"] #mobile-menu ul {
            text-align: right;
        }
        html[dir="ltr"] #mobile-menu ul {
            text-align: left;
        }
        /* Language dropdown */
        .language-dropdown {
            position: relative;
            transition: all 0.2s ease;
        }
        .language-dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            {{ app()->getLocale() === 'ar' ? 'right: 0' : 'left: 0' }};
            background-color: var(--dark-green);
            min-width: 140px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            z-index: 10;
            border-radius: 4px;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .language-dropdown:hover .language-dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        .language-dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }
        .language-dropdown-content a:hover {
            background-color: var(--light-green);
            transform: scale(1.05);
            animation: pulse 0.3s ease;
        }
        .flag-icon {
            width: 20px;
            height: 15px;
            display: inline-block;
            background-size: cover;
            border-radius: 2px;
        }
        /* Navigation links hover effects */
        .nav-menu a {
            position: relative;
            transition: color 0.2s ease, transform 0.2s ease;
        }
        .nav-menu a:hover {
            color: var(--light-green);
            transform: scale(1.1);
            animation: pulse 0.3s ease;
        }
        .nav-menu a:hover::after {
            content: '';
            position: absolute;
            bottom: -2px;
            {{ app()->getLocale() === 'ar' ? 'right: 0' : 'left: 0' }};
            width: 100%;
            height: 2px;
            background-color: var(--light-green);
            animation: underline 0.3s ease-in-out;
        }
        @keyframes underline {
            from { width: 0; }
            to { width: 100%; }
        }
        /* Mobile menu toggle button */
        #menu-toggle:hover i {
            transform: scale(1.2);
            animation: tada 0.5s ease;
        }
        /* Loading spinner */
        .loading-spinner {
            display: none;
            width: 16px;
            height: 16px;
            border: 2px solid #fff;
            border-top: 2px solid var(--light-green);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 8px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Smooth transitions for mobile menu */
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }
        #mobile-menu.hidden {
            transform: {{ app()->getLocale() === 'ar' ? 'translateX(-100%)' : 'translateX(100%)' }};
        }
        #mobile-menu:not(.hidden) {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-[var(--dark-green)] text-white py-4 sticky top-0 z-50 shadow-lg" dir="{{ app()->getLocale()  == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl md:text-3xl font-bold flex items-center animate__animated animate__fadeIn">
                <i class="fas fa-coffee mr-2"></i> <span class="translatable" data-key="Barnie's Academy"><a href="https://barnies.sa">{{ trans('Barnie\'s Academy') }}</a></span>
            </h1>
            <div class="flex items-center gap-4">
                <!-- Language Dropdown -->
                <div class="language-dropdown">
                    <button class="flex items-center gap-2 focus:outline-none" aria-label="{{ trans('Select Language') }}">
                        <i class="fas fa-globe"></i>
                        <span id="current-language">{{ app()->getLocale() === 'ar' ? 'العربية' : 'English' }}</span>
                        <span class="loading-spinner" id="language-loading"></span>
                    </button>
                    <div class="language-dropdown-content animate__animated" data-animation="animate__slideInDown">
                        <a href="#" class="language-option" data-locale="ar" lang="ar">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/20x15/sa.png');"></span>
                            العربية
                        </a>
                        <a href="#" class="language-option" data-locale="en" lang="en">
                            <span class="flag-icon" style="background-image: url('https://flagcdn.com/20x15/gb.png');"></span>
                            English
                        </a>
                    </div>
                </div>
                <button id="menu-toggle" class="md:hidden focus:outline-none" aria-label="{{ trans('Navigation Menu') }}">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            <nav class="nav-menu hidden md:flex" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
                <ul class="flex space-x-6">
                    <li><a href="#courses" class="hover:animate__animated hover:animate__pulse translatable" data-key="Courses" lang="{{ app()->getLocale() }}">{{ trans('Courses') }}</a></li>
                    <li><a href="#workshops" class="hover:animate__animated hover:animate__pulse translatable" data-key="Workshops" lang="{{ app()->getLocale() }}">{{ trans('Workshops') }}</a></li>
                    <li><a href="#sustainability" class="hover:animate__animated hover:animate__pulse translatable" data-key="Sustainability" lang="{{ app()->getLocale() }}">{{ trans('Sustainability') }}</a></li>
                    <li><a href="#certifications" class="hover:animate__animated hover:animate__pulse translatable" data-key="Certifications" lang="{{ app()->getLocale() }}">{{ trans('Certifications') }}</a></li>
                    <li><a href="#testimonials" class="hover:animate__animated hover:animate__pulse translatable" data-key="Testimonials" lang="{{ app()->getLocale() }}">{{ trans('Testimonials') }}</a></li>
                    <li><a href="#faq" class="hover:animate__animated hover:animate__pulse translatable" data-key="FAQ" lang="{{ app()->getLocale() }}">{{ trans('FAQ') }}</a></li>
                    <li><a href="#resources" class="hover:animate__animated hover:animate__pulse translatable" data-key="Free Resources" lang="{{ app()->getLocale() }}">{{ trans('Free Resources') }}</a></li>
                    <li><a href="#about" class="hover:animate__animated hover:animate__pulse translatable" data-key="About" lang="{{ app()->getLocale() }}">{{ trans('About') }}</a></li>
                    <li><a href="#contact" class="hover:animate__animated hover:animate__pulse translatable" data-key="Contact" lang="{{ app()->getLocale() }}">{{ trans('Contact') }}</a></li>
                    <li><a href="#home" class="hover:animate__animated hover:animate__pulse translatable" data-key="Home" lang="{{ app()->getLocale() }}">{{ trans('Home') }}</a></li>

                  </ul>
            </nav>
            <nav id="mobile-menu" class="nav-menu md:hidden w-full absolute top-16 {{ app()->getLocale() === 'ar' ? 'right-0' : 'left-0' }} bg-[var(--dark-green)] text-white shadow-lg hidden">
                <ul class="flex flex-col space-y-4 p-4 animate__animated animate__slideInRight">
                    <li><a href="#home" class="hover:animate__animated hover:animate__pulse translatable" data-key="Home" lang="{{ app()->getLocale() }}">{{ trans('Home') }}</a></li>
                    <li><a href="#courses" class="hover:animate__animated hover:animate__pulse translatable" data-key="Courses" lang="{{ app()->getLocale() }}">{{ trans('Courses') }}</a></li>
                    <li><a href="#workshops" class="hover:animate__animated hover:animate__pulse translatable" data-key="Workshops" lang="{{ app()->getLocale() }}">{{ trans('Workshops') }}</a></li>
                    <li><a href="#sustainability" class="hover:animate__animated hover:animate__pulse translatable" data-key="Sustainability" lang="{{ app()->getLocale() }}">{{ trans('Sustainability') }}</a></li>
                    <li><a href="#certifications" class="hover:animate__animated hover:animate__pulse translatable" data-key="Certifications" lang="{{ app()->getLocale() }}">{{ trans('Certifications') }}</a></li>
                    <li><a href="#testimonials" class="hover:animate__animated hover:animate__pulse translatable" data-key="Testimonials" lang="{{ app()->getLocale() }}">{{ trans('Testimonials') }}</a></li>
                    <li><a href="#faq" class="hover:animate__animated hover:animate__pulse translatable" data-key="FAQ" lang="{{ app()->getLocale() }}">{{ trans('FAQ') }}</a></li>
                    <li><a href="#resources" class="hover:animate__animated hover:animate__pulse translatable" data-key="Free Resources" lang="{{ app()->getLocale() }}">{{ trans('Free Resources') }}</a></li>
                    <li><a href="#about" class="hover:animate__animated hover:animate__pulse translatable" data-key="About" lang="{{ app()->getLocale() }}">{{ trans('About') }}</a></li>
                    <li><a href="#contact" class="hover:animate__animated hover:animate__pulse translatable" data-key="Contact" lang="{{ app()->getLocale() }}">{{ trans('Contact') }}</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-0">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[var(--dark-green)] text-white py-6 text-center">
        <span class="translatable" data-key="All rights reserved.">&copy; {{ date('Y') }} {{ trans('All rights reserved.') }}</span>
    </footer>

    <!-- JavaScript for language switching and mobile menu -->
    <script>
        // Translation dictionary
        const translations = {
            ar: {
                "Barnie's Academy": "أكاديمية بارنيز",
                "Home": "الرئيسية",
                "Courses": "الكورسات",
                "Workshops": "ورش العمل",
                "Sustainability": "الاستدامة",
                "Certifications": "الشهادات",
                "Testimonials": "قصص النجاح",
                "FAQ": "الأسئلة الشائعة",
                "Free Resources": "الموارد المجانية",
                "About": "عن الأكاديمية",
                "Contact": "تواصل معنا",
                "All rights reserved.": "جميع الحقوق محفوظة."
            },
            en: {
                "Barnie's Academy": "Barnie's Academy",
                "Home": "Home",
                "Courses": "Courses",
                "Workshops": "Workshops",
                "Sustainability": "Sustainability",
                "Certifications": "Certifications",
                "Testimonials": "Testimonials",
                "FAQ": "FAQ",
                "Free Resources": "Free Resources",
                "About": "About",
                "Contact": "Contact",
                "All rights reserved.": "All rights reserved."
            }
        };

        // Function to update translations
        function updateTranslations(locale) {
            document.querySelectorAll('.translatable').forEach(element => {
                const key = element.getAttribute('data-key');
                if (translations[locale][key]) {
                    element.textContent = translations[locale][key];
                }
            });
            document.getElementById('current-language').textContent = locale === 'ar' ? 'العربية' : 'English';
        }

        // Function to update document direction
        function updateDocumentDirection(locale) {
            document.documentElement.setAttribute('lang', locale);
            document.documentElement.setAttribute('dir', locale === 'ar' ? 'rtl' : 'ltr');
            const navMenu = document.querySelector('.nav-menu ul');
            const mobileMenu = document.querySelector('#mobile-menu');
            const mobileMenuUl = document.querySelector('#mobile-menu ul');
            const dropdownContent = document.querySelector('.language-dropdown-content');
            if (locale === 'ar') {
                navMenu.style.flexDirection = 'row-reverse';
                mobileMenuUl.style.textAlign = 'right';
                mobileMenu.classList.remove('left-0');
                mobileMenu.classList.add('right-0');
                dropdownContent.style.right = '0';
                dropdownContent.style.left = 'auto';
            } else {
                navMenu.style.flexDirection = 'row';
                mobileMenuUl.style.textAlign = 'left';
                mobileMenu.classList.remove('right-0');
                mobileMenu.classList.add('left-0');
                dropdownContent.style.left = '0';
                dropdownContent.style.right = 'auto';
            }
        }

        // Load saved locale from localStorage
        document.addEventListener('DOMContentLoaded', function () {
            const savedLocale = localStorage.getItem('locale') || '{{ app()->getLocale() }}';
            updateDocumentDirection(savedLocale);
            updateTranslations(savedLocale);
        });

        // Language switch handler with improved error handling
        document.querySelectorAll('.language-option').forEach(option => {
            option.addEventListener('click', function (e) {
                e.preventDefault();
                const locale = this.getAttribute('data-locale');
                const loadingSpinner = document.getElementById('language-loading');
                loadingSpinner.style.display = 'inline-block';

                // Send AJAX request to update session
                fetch('{{ route('set-locale') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ locale: locale })
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response headers:', response.headers.get('content-type'));
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.text();
                })
                .then(text => {
                    console.log('Response text:', text);
                    try {
                        const data = JSON.parse(text);
                        loadingSpinner.style.display = 'none';
                        if (data.success) {
                            // Save locale to localStorage
                            localStorage.setItem('locale', data.locale);
                            // Update UI and reload page
                            updateTranslations(data.locale);
                            updateDocumentDirection(data.locale);
                            window.location.reload();
                        } else {
                            console.error('Server error:', data.message);
                            alert('فشل تغيير اللغة: ' + data.message);
                        }
                    } catch (error) {
                        console.error('JSON parse error:', error);
                        console.error('Response text was:', text);
                        alert('خطأ: استجابة غير صالحة من الخادم. تحقق من وحدة التحكم للحصول على التفاصيل.');
                    }
                })
                .catch(error => {
                    loadingSpinner.style.display = 'none';
                    console.error('Fetch error:', error);
                    alert('خطأ: لا يمكن تغيير اللغة. تحقق من وحدة التحكم للحصول على التفاصيل.');
                });
            });
        });

        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('animate__slideInRight');
            mobileMenu.classList.toggle('animate__slideOutRight');
        });
    </script>
</body>
</html>
