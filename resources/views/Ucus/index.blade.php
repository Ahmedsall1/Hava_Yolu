<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Ucusler</h1>
<div>
    <ul>
        @foreach ($ucuslar as $x)

        <li>
    <a href="{{ route('Ucus.show', ['Ucu' => $x['id']]) }}">ID:{{ $x['id'] }} Ucret{{ $x['ucret'] }} seferID{{ $x['sefer_id'] }} UcakID:{{ $x['ucak_id'] }}</a>
    <a href="{{ route('Ucus.edit', ['Ucu' => $x['id']]) }}">Düzenle</a>
    <form action="{{route('Ucus.destroy',['Ucu'=>$x['id']] ) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" />
            </form>
</li>

        <br>

        @endforeach
    </ul>
    <a href="{{route('Ucus.create',['sefer_id'=>9031])}}">Ucus Ekle</a>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


