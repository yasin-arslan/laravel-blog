@props(['title','category','id','slug'])
<tr>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
                <div class="text-sm font-medium text-gray-900">
                    <a href="/posts/{{$slug}}">{{$title}}</a>
                </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-500"><a href="/?category={{$category}}">{{$category}}</a></div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Yayınlandı
                </span>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <a href="/admin/posts/{{ $id }}/edit" class="text-blue-600 hover:text-blue-600 hover:underline">Edit</a>
    </td>
</tr>
