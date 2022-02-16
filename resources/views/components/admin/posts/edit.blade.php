<x-layout>
    <x-setting :heading="'Düzenlenen Post -> ' . $post->title">
        <form action="{{route('admin.post.edit',$post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" :value="$post->title"/>
            <x-form.input name="slug" :value="$post->slug"/>
            <div>
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                <img src="{{asset('storage/thumbnails/'. $post->thumbnail)}}" alt="" class="rounded-xl">
            </div>
            <x-form.textarea name="excerpt">
                {{old('excerpt',$post->excerpt)}}
            </x-form.textarea>
            {{ old('excerpt'),$post->excerpt }}
            <x-form.textarea name="body" :value="$post->body">
                {{old('body',$post->body)}}
            </x-form.textarea>
            <div class="mb-6">
                <x-form.label name="category"/>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"{{ old('category_id',$post->category_id) == $category->id ? 'selected' : '' }}>{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </div>
            <x-form.button>Düzenle</x-form.button>
        </form>
    </x-setting>
</x-layout>
