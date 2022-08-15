<livewire:layouts.navbar-main>
    <x-guest-layout>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-dark-base">
            <div>
                <img width="100px" src="{{ asset('images/logo.png') }}" alt="" srcset="">
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-primary shadow-md overflow-hidden sm:rounded-lg">
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label class="block font-medium text-sm text-gray-100" for="email" value="">{{ __('Email')
                            }}</label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 block mt-1 text-gray-700 w-full focus:ring-opacity-50 rounded-md shadow-sm"
                            id="email" type="email" name="email" value="{{old('email')}}" required autofocus />
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-100" for="password">{{ __('Password')
                            }}</label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-gray-700 block mt-1 w-full rounded-md shadow-sm"
                            id="password" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        {{-- <a class="underline text-sm text-gray-200 hover:text-gray-100"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a> --}}
                        @endif

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-900 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
    <livewire:layouts.footer />