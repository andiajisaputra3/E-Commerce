<x-guest-layout>
        <div class="bg-white">
        <div class="flex justify-center h-screen">
            <div
                class="hidden relative overflow-hidden md:flex justify-around items-center bg-gradient-to-tr from-blue-800 to-purple-700 lg:block lg:w-1/2">
                <div class="flex items-center h-full px-20 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Welcome to ShopMate</h2>
                        <p class="max-w-xl mt-3 text-gray-300">Join ShopMate today and unlock a world of exclusive deals
                            and a wide range of products tailored just for you. Create your account now to start
                            shopping and enjoy a personalized shopping experience!
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
                        <h2 class="text-4xl font-bold text-center text-gray-700">Register</h2>
                        <p class="mt-3 text-gray-600">Create an account to start shopping!</p>
                    </div>
                    <div class="mt-8">
                        <form method="POST" action="{{ route('register') }}">
                            <div>
                                <label for="name" class="block text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name" placeholder="Jhon Doe"
                                    value="{{ old('name') }}"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autofocus autocomplete="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-6">
                                <label for="email" class="block text-sm text-gray-600">Email</label>
                                <input type="text" id="email" name="email" placeholder="example@example.com"
                                    value="{{ old('email') }}"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-6">
                                <label for="password" class="text-sm text-gray-600">Password</label>
                                <input type="password" name="password" id="password" placeholder="Your Password"
                                    value="{{ old('password') }}"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6">
                                <label for="password" class="text-sm text-gray-600">Confirm Password</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Confirm Your Password" value="{{ old('Confirm Password') }}"
                                    class="mt-1 p-2 w-full border rounded-md focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="mt-6">
                                <button class="w-full btn btn-primary text-white">
                                    Register
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Already have an account ? <a
                                href="{{ route('login') }}"
                                class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign In</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
