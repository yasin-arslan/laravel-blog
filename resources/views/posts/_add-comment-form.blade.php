@auth
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="post">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?u={{auth()->id()}}" alt="" width="40" height="40"class="rounded-full">
                <h2 class="ml-4">Bu post hakkında neler düşünüyorsunuz ?</h2></header>
            <div class="mt-6">
                                    <textarea name="commentbody" class="w-full text-sm focus:outline-none focus:ring"
                                              id="" rows="5"placeholder="Yorum yapın..." required></textarea>
                @error('commentbody')
                <span class="text-red-500 text-xs font-semibold flex">
                                        <i class="gg-info mr-1"></i>{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>Gönder</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        Yorum yapabilmek için <a href="/register"class="text-blue-500 hover:underline">kayıt</a> olmalı veya
        <a href="/login"class="text-blue-500 hover:underline">giriş</a> yapmalısınız...
    </p>
@endauth
