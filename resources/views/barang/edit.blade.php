<!-- resources/views/barang/edit.blade.php -->
<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nama_barang">Nama Barang</label>
    <input type="text" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>

    <label for="jenis_barang">Jenis Barang</label>
    <input type="text" id="jenis_barang" name="jenis_barang" value="{{ $barang->jenis_barang }}" required>

    <label for="stock">Stock</label>
    <input type="number" id="stock" name="stock" value="{{ $barang->stock }}">

    <label for="status">Status</label>
    <select id="status" name="status">
        <option value="">Pilih Status</option>
        <option value="tersedia" {{ $barang->status == 'tersedia' ? 'selected' : '' }}>tersedia</option>
        <option value="kosong" {{ $barang->status == 'kosong' ? 'selected' : '' }}>kosong</option>
    </select>

    <label for="harga_satuan">Harga Satuan</label>
    <input type="number" step="0.01" id="harga_satuan" name="harga_satuan" value="{{ $barang->harga_satuan }}">

    <button type="submit">Update</button>
</form>
<a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
