<x-jet-action-section>
    <x-slot name="title">
        {{ __('Export User Data') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Download your personal data and activity') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('You can export your personal user data and list of activities here.') }}
        </div>

        <div class="mt-5">
            <x-jet-button class="button" target="_blank">
                <a href="{{route('export.user-data')}}">
                    {{ __('Download my Export') }}
                </a>
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-action-section>
