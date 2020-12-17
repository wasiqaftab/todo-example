<x-jet-form-section submit="createItem">
    <x-slot name="title">
        {{ __('Create New To-Do Item') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new item in your to-do list.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __('Title') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" autocomplete="title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Created.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Create') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
