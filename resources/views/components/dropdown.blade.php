@props(['trigger'])
{{-- Dropdown --}}
<div x-data="{show:false}" @click.away="show = false"class="relative">
    <div @click="show = !show ">
        {{ $trigger }}
    </div>
    {{-- Links --}}
    <div x-show="show"class="py-2 absolute bg-gray-100 mt-0.5 rounded-xl w-full z-500 overflow-auto max-h-52"style="display:none">
        {{ $slot }}
    </div>
</div>
