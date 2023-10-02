<x-dashboard.app>

    <x-slot name="header">
        Cards
    </x-slot>
    <div class="section mt-2">

        @foreach($atmCardDetails as $atmCardDetail)
             <x-dashboard.atmard />
        @endforeach

    </div>

</x-dashboard.app>
