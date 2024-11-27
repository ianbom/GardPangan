<div class="d-inline-flex align-items-center">
    <form action="{{ route('admin.block.relawan', $r->id_relawan) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-sm btn-{{ $r->is_block ? 'success' : 'danger' }} mx-1">
            <i class="bi bi-{{ $r->is_block ? 'unlock-fill' : 'lock-fill' }}"></i>
        </button>
    </form>

    <form action="{{ route('admin.relawan.delete', $r->id_relawan) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus relawan ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger me-2">
            <i class="bi bi-trash-fill"></i>
        </button>
    </form>
</div>
