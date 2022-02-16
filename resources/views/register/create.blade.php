<x-layout>
    <section class="px-6 py-8">
        <main  class="max-w-lg mx-auto mt-10 bg-gray-200 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Kayıt Formu</h1>
            <form method="POST"action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-cs text-gray-700"
                for="name">Ad Soyad</label>
                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        value="{{old('name')}}"
                        required
                    >
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-cs text-gray-700"
                for="email">E-Posta ADRESİ</label>
                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="email"
                        name="email"
                        id="email"
                        value="{{old('email')}}"
                        required
                    >
                </div>
                <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-cs text-gray-700"
                for="username">Kullanıcı Adı</label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="username"
                    id="username"
                    value="{{old('username')}}"
                    required
                >
            </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-cs text-gray-700"
                for="password">ŞİFRE</label>
                    <input
                        class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                </div>
                <div class="mb-6">
                    <x-form.button>Gönder</x-form.button>
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

        </main>
    </section>
</x-layout>
