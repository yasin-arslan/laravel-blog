@props(['name','type'=>'text'])
<div class="mb-6">
    <x-form.label name="{{$name}}"/>
    <input type="{{$type}}" class="border border-gray-200 p-2 w-full rounded" name="name" id="name"
            {{$attributes(['value'=>old($name)])}}
           required>
    <x-form.error name="{{ $name }}"/>
</div>
