<x-layout>
    <section class="px-6 py-8">
        <main  class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">GİRİŞ EKRANI</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <div class="mb-6">
                    <x-form.label name="email"/>
                    <input type="email" class="border border-gray-200 p-2 w-full rounded" name="email" id="email"
                           value="{{old('email')}}"
                           required>
                    <x-form.label name="password"/>
                    <input type="password" class="border border-gray-200 p-2 w-full rounded" name="password" id="password"
                           value="{{old('password')}}"
                           required></div>
                            <x-form.button>GİRİŞ</x-form.button>
                    </div>
                    @if ($errors->any())
                        <div class="text-red-500 text-xs mt-1">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
