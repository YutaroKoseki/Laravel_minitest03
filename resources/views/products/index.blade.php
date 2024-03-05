<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('products.indexですよ') }}
        </h2>
    </x-slot>

    <div class="">
        @foreach($items as $item)
            <ul>
                <li>{{$item}}</li>
            </ul>
        @endforeach
    </div>

</x-app-layout>
