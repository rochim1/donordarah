<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
<x-jet-danger-button>{{__('auth.tes')}}</x-jet-danger-button>
    <x-about />
    
</x-app-layout>