@extends('layouts.app')

@section('content')
  <div class="card border-0 shadow-lg rounded-4 p-4" style="background-color: #ffffff;">
    <div class="card-body">
      <h4 class="mb-4 text-primary fw-semibold">
        <i class="bi bi-plus-circle me-2"></i>Tambah Menu
      </h4>

      <form 
        action="{{ route('menus.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
      >
        @csrf

        <div class="mb-3">
          <label for="nama_menu" class="form-label fw-medium text-secondary">Nama Menu</label>
          <input 
            type="text" 
            name="nama_menu" 
            id="nama_menu" 
            class="form-control border-0 shadow-sm" 
            style="background-color: #f8f9fa;" 
            value="{{ old('nama_menu') }}"
            placeholder="Masukkan nama menu..."
          >
          @error('nama_menu') 
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label fw-medium text-secondary">Harga</label>
          <input 
            type="number" 
            name="harga" 
            id="harga" 
            class="form-control border-0 shadow-sm" 
            style="background-color: #f8f9fa;" 
            value="{{ old('harga') }}"
            placeholder="Masukkan harga..."
          >
          @error('harga') 
            <small class="text-danger">{{ $message }}</small> 
          @enderror
        </div>

        <div class="mb-3">
          <label for="foto" class="form-label fw-medium text-secondary">Foto</label>
          <input 
            type="file" 
            name="foto" 
            id="foto" 
            class="form-control border-0 shadow-sm" 
            style="background-color: #f8f9fa;"
          >
          @error('foto') 
            <small class="text-danger">{{ $message }}</small> 
          @enderror
        </div>

        <div class="d-flex justify-content-end mt-4 gap-2">
          <a 
            href="{{ route('menus.index') }}" 
            class="btn btn-outline-secondary px-4"
            style="border-radius: 30px;"
          >
            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
          </a>

          <button 
            type="submit" 
            class="btn text-white px-4"
            style="background-color: #00a8ff; border-radius: 30px;"
          >
            <i class="bi bi-save2 me-1"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Tambahkan Bootstrap Icons -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
  >
@endsection
