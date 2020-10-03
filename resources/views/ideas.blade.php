<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ideas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-5 sm:p-6">

                <div class="space-y-12">
                    @foreach ($ideas as $idea)
                        <div class="md:flex justify-between">
                            <div class="flex-1">
                                <strong>{{ $idea->name }}</strong>
                                {{ $idea->email }}

                                @if ($idea->attachment)
                                    <a
                                        href="{{ route('ideas.download', $idea) }}"
                                        class="ml-2 bg-green-400 py-1 px-2 rounded text-xs uppercase tracking-wider font-bold text-white inline-flex items-center @if ($idea->attachment) cursor-pointer @endif"
                                    >
                                        Attachment
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path></svg>
                                    </a>
                                @endif

                                <div class="text-gray-600 text-sm">
                                    {!! nl2br(e($idea->description)) !!}
                                </div>


                            </div>

                            <div class="text-sm text-gray-400 mt-2 md:mt-0">
                                {{ __('Submitted') }} {{ $idea->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
