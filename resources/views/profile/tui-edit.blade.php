<x-app-layout>
    <x-slot name="header">
        <x-t-heading
            variant="light"
            level="2"
            size="sm"
            class="mb-0"
        >
            {{ __('Profile') }}
        </x-t-heading>
    </x-slot>
    <x-t-section>
        <x-t-container
            size="xs"
            border="false"
        > 
            @include('profile.partials.update-profile-information-form')
        </x-t-container>
    </x-t-section>
    <x-t-section>
        <x-t-container
            size="xs"
            border="false"
        > 
            @include('profile.partials.update-password-form')
        </x-t-container>
    </x-t-section>
    <x-t-section>
        <x-t-container
            size="xs"
            border="false"
        > 
            @include('profile.partials.delete-user-form')
        </x-t-container>
    </x-t-section>
</x-app-layout>
