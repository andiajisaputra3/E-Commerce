<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white">
        <div class="flex justify-center h-screen">
            <div
                class="hidden relative overflow-hidden md:flex justify-around items-center bg-gradient-to-tr from-blue-800 to-purple-700 lg:block lg:w-1/2">
                <div class="flex items-center h-full px-20 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Welcome to ShopMate</h2>
                        <p class="max-w-xl mt-3 text-gray-300">Log in to continue exploring a wide range of products,
                            enjoy exclusive offers, and manage your orders from your personalized dashboard. Don't miss
                            out on a seamless shopping experience!
                        </p>
                    </div>
                </div>
                <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
                </div>
                <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
                </div>
                <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
                </div>
                <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-1/2">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700">ShopMate</h2>
                        <p class="mt-3 text-gray-600">Sign in to access your account</p>
                    </div>
                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <label for="email" class="block text-sm text-gray-600">Email</label>
                                <input type="text" id="email" name="email" placeholder="example@example.com"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600">Password</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot
                                            password?</a>
                                    @endif
                                </div>

                                <input type="password" name="password" id="password" placeholder="Your Password"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="mt-6">
                                <button class="w-full btn btn-primary text-white">
                                    Login
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a
                                href="{{ route('register') }}"
                                class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
