<form action="{{ $href }}" method="post" id="deleteService-{{ $id }}" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deleteService({{ $id }})" class="btn btn-danger">
        <i class="fe fe-trash-2 fe-2x"></i>
    </button>
</form>
