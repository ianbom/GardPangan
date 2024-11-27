<a href="{{ route('admin.edit.jadwal', $item->id_jadwal) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil-fill"></i> Edit
</a>
<a href="{{ route('admin.create.relawan', $item->id_jadwal) }}" class="btn btn-success btn-sm">
    <i class="bi bi-plus-fill"></i> + Relawan
</a>
<a href="{{ route('admin.index.relawan', $item->id_jadwal) }}" class="btn btn-secondary btn-sm">
    <i class="bi bi-list-ul"></i> List
</a>
<form action="{{ route('admin.delete.jadwal', $item->id_jadwal) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-trash-fill"></i> Hapus
    </button>
</form>
