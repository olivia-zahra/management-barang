<!-- resources/views/barang/index.blade.php -->
<h1>Daftar Barang</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('barang.create') }}">Tambah Barang</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Harga Satuan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->jenis_barang }}</td>
                <td>{{ $barang->stock ?? '-' }}</td>
                <td>{{ $barang->status ?? '-' }}</td>
                <td>{{ $barang->harga_satuan ?? '-' }}</td>
                <td>
                    <a href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
