<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Grafis</title>
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
<body class="bg-white font-poppins min-h-screen flex items-center justify-center p-4">
    <!-- Decorative Elements -->
    <div class="fixed top-10 left-10 w-32 h-32 rounded-full bg-primary-500 opacity-10 animate-float"></div>
    <div class="fixed bottom-20 right-20 w-40 h-40 rounded-full bg-secondary-500 opacity-10 animate-float-delay"></div>
    <div class="fixed top-1/3 right-1/4 w-24 h-24 rounded-full bg-accent-500 opacity-10 animate-float"></div>
    
    <!-- Main Register Container -->
    <div class="w-full max-w-md bg-white rounded-3xl shadow-lg overflow-hidden z-10 transition-all duration-500 hover:shadow-xl border border-gray-100">
        <!-- Decorative Header -->
        <div class="relative h-32 bg-gradient-to-r from-primary-500 via-secondary-500 to-accent-500 flex items-end">
            <div class="w-full p-6 pt-16 text-center">
                <h1 class="text-2xl font-bold text-white">Create Account</h1>
                <p class="text-white/90">Join us today!</p>
            </div>
        </div>
        
        <!-- Register Form -->
        <div class="p-8 pt-12">
            <form class="space-y-6">
                <!-- Full Name -->
                <div class="relative">
                    <input 
                        type="text" 
                        id="fullname" 
                        placeholder=" "
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition duration-300 peer input-focus-effect"
                    >
                    <label 
                        for="fullname" 
                        class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500"
                    >
                        Full Name
                    </label>
                </div>
                
                <!-- Email Input -->
                <div class="relative">
                    <input 
                        type="email" 
                        id="email" 
                        placeholder=" "
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition duration-300 peer input-focus-effect"
                    >
                    <label 
                        for="email" 
                        class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500"
                    >
                        Email Address
                    </label>
                </div>
                
                <!-- Password Input with Strength Meter -->
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        placeholder=" "
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition duration-300 peer input-focus-effect"
                    >
                    <label 
                        for="password" 
                        class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500"
                    >
                        Password
                    </label>
                    <button type="button" class="absolute right-4 top-3 text-gray-400 hover:text-primary-500">
                        <i class="far fa-eye"></i>
                    </button>
                    
                    <!-- Password Strength Meter -->
                    <div class="mt-2">
                        <div class="flex justify-between mb-1 text-xs text-gray-500">
                            <span>Password strength</span>
                            <span class="strength-text">Weak</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-fill w-1/4 bg-primary-500"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Confirm Password -->
                <div class="relative">
                    <input 
                        type="password" 
                        id="confirm-password" 
                        placeholder=" "
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition duration-300 peer input-focus-effect"
                    >
                    <label 
                        for="confirm-password" 
                        class="absolute left-4 top-3 text-gray-400 transition-all duration-300 pointer-events-none peer-focus:text-primary-500"
                    >
                        Confirm Password
                    </label>
                </div>
                
                <!-- Terms Checkbox -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            type="checkbox" 
                            id="terms"
                            class="w-4 h-4 text-primary-500 rounded border-gray-300 focus:ring-primary-500"
                        >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="text-gray-600">
                            I agree to the <a href="#" class="text-primary-500 hover:text-primary-600 font-medium">Terms of Service</a> and <a href="#" class="text-primary-500 hover:text-primary-600 font-medium">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full py-3 px-4 bg-gradient-to-r from-primary-500 via-secondary-500 to-accent-500 hover:from-primary-600 hover:via-secondary-600 hover:to-accent-600 text-white font-semibold rounded-lg shadow-md hover:shadow-btn-hover transition-all duration-300 transform hover:-translate-y-1"
                >
                    Register
                </button>
                
            </form>
            
            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-medium text-primary-500 hover:text-primary-600">Login</a>
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
            let text = 'Weak';
            
            if (strength >= 4) {
                width = '100%';
                color = 'bg-accent-500';
                text = 'Strong';
            } else if (strength >= 2) {
                width = '66%';
                color = 'bg-secondary-500';
                text = 'Medium';
            } else if (strength >= 1) {
                width = '33%';
                color = 'bg-primary-500';
                text = 'Weak';
            }
            
            progressBar.style.width = width;
            progressBar.className = `progress-bar-fill ${color}`;
            strengthText.textContent = text;
        }
    </script>
</body>
</html>