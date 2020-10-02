<div>
    @if ($completed)
        {{ __('Thank you for submitting your idea.') }}
    @else
        <form wire:submit.prevent="submit">

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold">
                    {{ __('Name') }}:
                </label>
                <input wire:model="name" type="text" placeholder="{{ __('How should we call you?') }}" class="rounded-lg px-4 py-2 w-full shadow border" />
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold">
                    {{ __('Email') }}:
                </label>
                <input wire:model="email" type="text" placeholder="{{ __('Your email address') }}" class="rounded-lg px-4 py-2 w-full shadow border" />
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold">
                    {{ __('Description') }}:
                </label>
                <textarea wire:model="description" placeholder="{{ __('Describe your idea for an art piece') }}" rows="4" class="rounded-lg px-4 py-2 w-full shadow border"></textarea>
                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold">
                    {{ __('Attachment') }}:
                </label>
                <input wire:model="attachmentFile" type="file" class="rounded-lg px-4 py-2 w-full shadow border" />
                @error('attachmentFile') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button class="bg-blue-500 p-2 rounded-lg text-white" type="submit">
                {{ __('Submit') }}
            </button>
        </form>
    @endif
</div>
