<x-layout>

    <h2>Currently availale ninjas</h2>
    {{-- IF condition
    @if(1)
    <p>Hi from inside the if</p>
    @endif --}}
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 60">
                    <h3>{{ $ninja["name"] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>