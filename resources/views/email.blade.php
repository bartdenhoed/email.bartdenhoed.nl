<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Email') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('email.send') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email to')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Email Body -->
                        <div>
                            <x-label for="body" :value="__('Body')" />

                            <x-textarea id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="subject" :value="__('Subject')" />

                            <x-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-label for="emailfrom" :value="__('Email from')" />

                            <x-input id="emailfrom" class="block mt-1 w-full" type="email" name="emailfrom" :value="old('emailfrom')" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Send email') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
