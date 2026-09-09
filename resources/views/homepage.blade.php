<x-layout>
    <header class="w-full flex justify-end px-6">
        <form method="POST" action="/logout">
            @csrf
            @method('DELETE')

            <button type="submit" class="p-1.5 bg-primary text-white">Log out</button>
        </form>
    </header>
    <h1>Homepage</h1>
</x-layout>
