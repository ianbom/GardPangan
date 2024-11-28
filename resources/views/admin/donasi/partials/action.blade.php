<a href="{{ route('donasi.edit', $d->id_donasi) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil-fill"></i> Edit
</a>
{{-- <a href="" class="btn btn-success btn-sm">
    <i class="bi bi-plus-fill"></i> + Relawan
</a>
<a href="" class="btn btn-secondary btn-sm">
    <i class="bi bi-list-ul"></i> List
</a> --}}
<form action="{{ route('donasi.destroy', $d->id_donasi) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus donasi ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-trash-fill"></i> Hapus
    </button>
</form>
