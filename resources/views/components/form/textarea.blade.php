@props(['name'])
<div class="mb-6">
    <x-form.label name="{{$name}}"/>
    <textarea required class="border border-gray-200 p-2 w-full rounded" name="name" id="name" {{$attributes}}>
        {{$slot ?? old($name)}}
    </textarea>
    <x-form.error name="{{$name}}"/>
</div>
