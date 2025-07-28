<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | KaryaKu</title>
    <link rel="website icon" type="png" href="album/ftk.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            500: 'rgba(14,83,112,0.9)',
                            600: 'rgba(14,83,112,1)',
                        },
                        secondary: {
                            500: 'rgba(173,94,45,0.9)',
                            600: 'rgba(173,94,45,1)',
                        },
                        accent: {
                            500: 'rgba(121,155,193,0.9)',
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
                        'btn-hover': '0 10px 25px -5px rgba(14,83,112,0.2), 0 10px 10px -5px rgba(14,83,112,0.1)',
                    }
                }
            }
        }
    </script>
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
      }
    </style>
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
        }
    </style>
</head>
<body class="font-poppins min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 animate-change-bg z-0"></div>
    <div class="fixed inset-0 bg-black/30 z-0"></div>
    
    <!-- Decorative Elements -->
    <div class="fixed top-10 left-10 w-32 h-32 rounded-full bg-[rgba(14,83,112,0.1)] animate-float z-0"></div>
    <div class="fixed bottom-20 right-20 w-40 h-40 rounded-full bg-[rgba(173,94,45,0.1)] animate-float-delay z-0"></div>
    <div class="fixed top-1/3 right-1/4 w-24 h-24 rounded-full bg-[rgba(121,155,193,0.1)] animate-float z-0"></div>
    
    <!-- Main Login Container -->
    <div class="w-full max-w-md bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg overflow-hidden z-10 border border-white/30 transition-all duration-500 hover:shadow-xl">
        <!-- Decorative Header -->
        <div class="relative h-32 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] flex items-end">
            <div class="w-full p-6 pt-16 text-center">
                <h1 class="text-2xl font-bold text-white">Selamat Datang diKaryaKu</h1>
                <p class="text-white/80">Masuk untuk mengakses kontributor</p>
            </div>
        </div>
        
        <!-- Login Form -->
        <div class="p-8 pt-12">
            <form action="{{ route('login') }}" method="post" class="space-y-6">
                @csrf
                @error('email') <small class="text-red-500">{{ $message }}</small> @enderror
                @error('password') <small class="text-red-500">{{ $message }}</small> @enderror
                
                <!-- Email Input -->
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="Alamat Email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-[rgba(14,83,112,0.7)] focus:ring-2 focus:ring-[rgba(14,83,112,0.1)] outline-none transition duration-300 peer input-focus-effect">
                    <label for="email" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-[rgba(14,83,112,0.9)]"></label>
                </div>
                
                <!-- Password Input -->
                <div class="relative mt-8">
                    <input type="password" id="password" name="password" placeholder="Kata Sandi"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-[rgba(14,83,112,0.7)] focus:ring-2 focus:ring-[rgba(14,83,112,0.1)] outline-none transition duration-300 peer input-focus-effect">
                    <label for="password" class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-[rgba(14,83,112,0.9)]"></label>
                    <button type="button" class="absolute right-4 top-3 text-gray-400 hover:text-[rgba(14,83,112,0.9)]">
                        <i class="far fa-eye"></i>
                    </button>
                </div>
                
                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full py-3 px-4 bg-gradient-to-r from-[rgba(14,83,112,0.7)] via-[rgba(173,94,45,0.7)] to-[rgba(121,155,193,0.7)] hover:from-[rgba(14,83,112,0.8)] hover:via-[rgba(173,94,45,0.8)] hover:to-[rgba(121,155,193,0.8)] text-white font-semibold rounded-lg shadow-md hover:shadow-btn-hover transition-all duration-300 transform hover:-translate-y-0.5"
                >
                    Masuk
                </button>
            </form>
            
            <!-- Sign Up Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" class="font-medium text-[rgba(14,83,112,0.9)] hover:text-[rgba(14,83,112,1)]">Daftar disini</a>
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        document.querySelector('button[type="button"]').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
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
    </script>
</body>
</html>