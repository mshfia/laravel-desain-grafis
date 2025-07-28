<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="website icon" type="png" href="album/ftk.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      @keyframes changeBackground {
        0%, 100% {
          background-image: url('{{ asset('album/bg01.jpg') }}');
        }
        33% {
          background-image: url('{{ asset('album/bg02.jpg') }}');
        }
        66% {
          background-image: url('{{ asset('album/bg03.jpg') }}');
        }
      }
      .animate-change-bg {
        animation: changeBackground 9s infinite ease-in-out;
        background-size: cover;
        background-position: center;
        opacity: 0.8;
      }
      .glass-morphism {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.7);
      }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            500: 'rgba(14,83,112,0.7)',
                            600: 'rgba(14,83,112,1)',
                        },
                        secondary: {
                            500: 'rgba(173,94,45,0.7)',
                            600: 'rgba(173,94,45,1)',
                        },
                        accent: {
                            500: 'rgba(121,155,193,0.7)',
                            600: 'rgba(121,155,193,1)',
                        },
                        dark: {
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    boxShadow: {
                        'neumorph': '8px 8px 16px #d1d9e6, -8px -8px 16px #ffffff',
                        'neumorph-inset': 'inset 2px 2px 5px #d1d9e6, inset -2px -2px 5px #ffffff',
                        'btn-hover': '0 10px 25px -5px rgba(14,83,112,0.4), 0 10px 10px -5px rgba(14,83,112,0.2)',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }
            
            .animate-float-delay {
                animation: float 6s ease-in-out infinite 1s;
            }
            
            .input-focus-effect:focus ~ label,
            .input-focus-effect:not(:placeholder-shown) ~ label {
                @apply -top-3 left-3 text-sm bg-white px-1 text-primary-500;
            }
            
            .progress-bar {
                height: 4px;
                @apply bg-gray-200 rounded-full;
            }
            
            .progress-bar-fill {
                height: 100%;
                @apply rounded-full transition-all duration-300;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 animate-change-bg">
    <!-- Decorative Elements -->
    <div class="fixed top-10 left-10 w-32 h-32 rounded-full bg-primary-500 opacity-10 animate-float"></div>
    <div class="fixed bottom-20 right-20 w-40 h-40 rounded-full bg-secondary-500 opacity-10 animate-float-delay"></div>
    <div class="fixed top-1/3 right-1/4 w-24 h-24 rounded-full bg-accent-500 opacity-10 animate-float"></div>
    
    <!-- Registration Form with Glass Morphism Effect -->
    <div class="w-full max-w-md rounded-3xl overflow-hidden z-10 border border-gray-100 transition-all duration-500 hover:shadow-xl mt-10 glass-morphism">
        <!-- Decorative Header -->
        <div class="relative h-32 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] flex items-end">
            <div class="w-full p-6 pt-16 text-center">
                <h1 class="text-2xl font-bold text-white">Buat Akun Kontributor</h1>
                <p class="text-white/80">& bergabunglah dengan kami</p>
            </div>
        </div>

        <!-- Register Form -->
        <div class="p-8 pt-12">
            <form action="{{ route('register.store') }}" method="post" class="space-y-6">
                @csrf
                <!-- Name Input -->
                 <br>
                    @error('email') <small style="color:red;">{{ $message }}</small> @enderror  
                    @error('password') <small style="color:red;">{{ $message }}</small> @enderror
                    @error('name') <small style="color:red;">{{ $message }}</small><br> @enderror
                <div class="relative">
                    <input type="text" id="name" name="name" placeholder="Nama Lengkap"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition duration-300 peer input-focus-effect">
                    <label for="name" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500">
                        
                    </label>
                </div>

                <!-- Email Input -->
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition duration-300 peer input-focus-effect">
                    <label for="email" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500">
                        
                    </label>
                </div>

                <!-- Password Input -->
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Kata Sandi"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition duration-300 peer input-focus-effect">
                    <label for="password" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500">
                    </label>
                </div>

                <!-- Confirm Password Input -->
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition duration-300 peer input-focus-effect">
                    <label for="password_confirmation" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500">
                        
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 px-4 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] hover:from-[rgba(14,83,112,0.8)] hover:via-[rgba(173,94,45,0.8)] hover:to-[rgba(121,155,193,0.8)] text-white font-semibold rounded-lg shadow-md hover:shadow-btn-hover transition-all duration-300 transform hover:-translate-y-0.5">
                    Daftar
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-medium text-primary-500 hover:text-primary-600">Masuk</a>
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        document.querySelectorAll('button[aria-label="Show password"]').forEach(button => {
            button.addEventListener('click', function() {
                const inputId = this.parentElement.querySelector('input').id;
                const passwordInput = document.getElementById(inputId);
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });
        
        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthText = document.querySelector('.strength-text');
        const progressBar = document.querySelector('.progress-bar-fill');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Check length
            if (password.length >= 8) strength += 1;
            if (password.length >= 12) strength += 1;
            
            // Check for mixed case
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 1;
            
            // Check for numbers
            if (/\d/.test(password)) strength += 1;
            
            // Check for special chars
            if (/[^a-zA-Z0-9]/.test(password)) strength += 1;
            
            // Update UI
            updateStrengthIndicator(strength);
        });
        
        function updateStrengthIndicator(strength) {
            let width = '0%';
            let color = 'bg-primary-500';
            let text = 'Lemah';
            
            if (strength >= 4) {
                width = '100%';
                color = 'bg-accent-500';
                text = 'Kuat';
            } else if (strength >= 2) {
                width = '66%';
                color = 'bg-secondary-500';
                text = 'Sedang';
            } else if (strength >= 1) {
                width = '33%';
                color = 'bg-primary-500';
                text = 'Lemah';
            }
            
            progressBar.style.width = width;
            progressBar.className = `progress-bar-fill ${color}`;
            strengthText.textContent = text;
        }
    </script>
</body>
</html>