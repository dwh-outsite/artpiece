<div>
    @if ($completed)
        {{ __('Thank you for submitting your idea!') }}
    @else
        <form wire:submit.prevent="submit">

            <div class="md:w-3/4">
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-1">
                        {{ __('Name') }}
                    </label>
                    <input wire:model="name" type="text" placeholder="{{ __('How should we call you?') }}" class="rounded-lg px-4 py-2 w-full shadow border" />
                    @error('name') <div class="text-red-500 mt-2">{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-1">
                        {{ __('Email') }}
                    </label>
                    <input wire:model="email" type="text" placeholder="{{ __('Your email address') }}" class="rounded-lg px-4 py-2 w-full shadow border" />
                    @error('email') <div class="text-red-500 mt-2">{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-semibold mb-1">
                        {{ __('Description') }}
                    </label>
                    <textarea wire:model="description" placeholder="{{ __('Describe your idea for an art piece') }}" rows="4" class="rounded-lg px-4 py-2 w-full shadow border"></textarea>
                    @error('description') <div class="text-red-500 mt-2">{{ $message }}</div> @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-1">
                        {{ __('Attachment') }}
                    </label>
                    <input wire:model="attachmentFile" type="file" class="rounded-lg p-4 shadow border w-full" />
                    @error('attachmentFile') <div class="text-red-500 mt-2">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="text-gray-400 text-sm">
                @lang('messages.form.privacy')
            </div>

            <button class="bg-art-purple hover:bg-opacity-75 mt-4 py-2 px-4 font-bold rounded-full text-white" type="submit">
                {{ __('Submit') }}
            </button>
        </form>
    @endif
</div>
