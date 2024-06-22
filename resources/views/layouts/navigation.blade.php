<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 z-50 sticky top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sticky z-50">
        <div class="flex justify-between h-16">
            <div class="flex">
                @php
                    $appMarkRoute = isset($mainLogoRoute) ? $mainLogoRoute : route('dashboard');
                @endphp

                <div class="shrink-0 flex items-center">
                    <a href="{{ $appMarkRoute }}">
                        <x-application-logo class="block h-9 w-auto" />
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="/" class="text-gray-900 hover:text-gray-700 {{ request()->routeIs('/') ? 'font-bold' : '' }}">
                        {{ __('Home') }}
                    </a>

                    <a href="#" class="text-gray-900 hover:text-gray-700 {{ request()->routeIs('services') ? 'font-bold' : '' }}">
                        {{ __('Rooms') }}
                    </a>

                    @if (isset($navlinks))
                        {!! $navlinks !!}
                    @endif

                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-900 hover:text-gray-700 {{ request()->routeIs('dashboard') ? 'font-bold' : '' }}">
                            {{ __('Dashboard') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 {{ request()->routeIs('login') ? 'font-bold' : '' }}">
                            {{ __('Login') }}
                        </a>

                        <a href="{{ route('register') }}" class="text-gray-900 hover:text-gray-700 {{ request()->routeIs('register') ? 'font-bold' : '' }}">
                            {{ __('Register') }}
                        </a>
                    @endauth
                </div>

                @auth
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endauth
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium {{ request()->routeIs('home') ? 'text-gray-900 bg-gray-100 border-indigo-500' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 hover:border-gray-300' }}">
                {{ __('Home') }}
            </a>
            <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium {{ request()->routeIs('services') ? 'text-gray-900 bg-gray-100 border-indigo-500' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 hover:border-gray-300' }}">
                {{ __('Rooms') }}
            </a>
            @if (isset($navlinks))
                {!! $navlinks !!}
            @endif
            @auth
                <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium {{ request()->routeIs('dashboard') ? 'text-gray-900 bg-gray-100 border-indigo-500' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 hover:border-gray-300' }}">
                    {{ __('Dashboard') }}
                </a>
            @else
                <a href="{{ route('login') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium {{ request()->routeIs('login') ? 'text-gray-900 bg-gray-100 border-indigo-500' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 hover:border-gray-300' }}">
                    {{ __('Login') }}
                </a>

                <a href="{{ route('register') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium {{ request()->routeIs('register') ? 'text-gray-900 bg-gray-100 border-indigo-500' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 hover:border-gray-300' }}">
                    {{ __('Register') }}
                </a>
            @endauth
        </div>

        @auth
                <div class="py-1 border-t border-gray-200">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
        @endauth
    </div>
</nav>
