
<a 
    class="btn {{ $type == 'delete' ? "btn-danger" : "btn-success" }}"
    @if ($type == 'delete')
        onclick="return confirm('Are You sure?')" 
        href="{{ route('property.delete', ['id'=> $item->id]) }}"
    @else 
        href="{{ route('property.edit', ['property' => $item->id]) }}"
    @endif
>
{{$name}}
</a>

