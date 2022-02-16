<!doctype html>

<title>Laravel Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.1/cdn.js" integrity="sha512-zJzbiPdmFRrJiIGMMV5/aXjdQTHKoZvXC+6p+8TYo9ZupZGpG1jhyk4mEv1xG/tsuA/fBUoLM6Be1BhIRMMzqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- css.gg -->
<link href='https://css.gg/css' rel='stylesheet'>

<!-- UNPKG -->
<link href='https://unpkg.com/css.gg/icons/all.css' rel='stylesheet'>

<!-- JSDelivr -->
<link href='https://cdn.jsdelivr.net/npm/css.gg/icons/all.css' rel='stylesheet'>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>
        <div class="mt-8 md:mt-0 flex items-center">
                        @auth
                        <x-dropdown>
                            <x-slot name="trigger"><button name="trigger" class="text-xs font-bold mr-6">
                            Hoşgeldiniz,{{ucwords(auth()->user()->name)}}</button></x-slot>
                            @if(auth()->user()->name === 'yasinarslan')
                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">Yeni Post Oluştur</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Postları Yönet</x-dropdown-item>
                                <x-dropdown-item href="/logout">Çıkış Yap</x-dropdown-item>
                            @else
                                <x-dropdown-item href="/logout">Çıkış Yap</x-dropdown-item>
                            @endif
                            @endauth
                    </x-dropdown>

                @guest
                <a href="/register" class="text-xs font-bold uppercase">Kayıt Ol</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">GİRİŞ Yap</a>
                @endguest
            <a href="#subscribe" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Abone Olun!
            </a>
        </div>
        <x-flash />
    </nav>
    {{ $slot }}
    <footer id="subscribe"class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Son güncellemelerden haberiniz olsun!</h5>
        <p class="text-sm mt-3">Spam yapmayacağımızın sözünü veriyoruz.</p>
        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                        </label>
                        <input name="email"id="email" type="email" placeholder="E-posta adresinizi girin..."
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>
                    <x-form.button>Abone Olun</x-form.button>
                </form>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
