@props(['name'])
<label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
    @php
        $name_list = ([
        'password' => 'ŞİFRE',
        'email'=>'E-MAİL',
        'excerpt'=>'ÖZET',
        'body'=>'POST METİN',
        'title'=>'BAŞLIK',
        'slug'=>'SLUG',
        'category'=>'KATEGORİ',
        'thumbnail'=>'POST RESİM'
        ])
    @endphp
    {{$name_list[$name]}}
</label>
