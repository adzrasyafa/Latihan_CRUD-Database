@extends('layouts.app')

@section('content')
  <div class="card border-0 shadow-lg rounded-4 p-4" style="background-color: #ffffff;">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold text-primary">
          <i class="bi bi-motorbike me-2"></i> Daftar Brand Motor
        </h4>
        <a 
          href="{{ route('menus.create') }}" 
          class="btn text-white px-3" 
          style="background-color: #00a8ff; border-radius: 25px;"
        >
          <i class="bi bi-plus-circle me-1"></i> Tambah Brand
        </a>
      </div>

      <table class="table align-middle table-hover shadow-sm" style="background-color: #f9fafb;">
        <thead style="background-color: #e8eef2; color: #333;">
          <tr>
            <th style="width: 5%;">No</th>
            <th>Nama Motor</th>
            <th style="width: 15%;">Foto</th>
            <th>Harga</th>
            <th style="width: 20%;">Aksi</th>
          </tr>
        </thead>

        <tbody>
          @forelse($menus as $menu)
            <tr>
              <td class="fw-medium">{{ $loop->iteration }}</td>
              <td class="fw-semibold text-secondary">{{ $menu->nama_menu }}</td>
              <td>
                @if($menu->foto)
                  <img 
                    src="{{ asset('storage/' . $menu->foto) }}" 
                    width="80" 
                    class="rounded shadow-sm border"
                    alt="Foto {{ $menu->nama_menu }}"
                  >
                @else
                  <small class="text-muted fst-italic">Tidak ada</small>
                @endif
              </td>
              <td class="fw-semibold text-dark">
                Rp {{ number_format($menu->harga, 0, ',', '.') }}
              </td>
              <td>
                <a 
                  href="{{ route('menus.edit', $menu->id) }}" 
                  class="btn btn-sm text-white me-1"
                  style="background-color: #00a8ff; border-radius: 20px;"
                >
                  <i class="bi bi-pencil-square"></i> Edit
                </a>

                <form 
                  action="{{ route('menus.destroy', $menu->id) }}" 
                  method="POST" 
                  class="d-inline" 
                  onsubmit="return confirm('Yakin hapus brand ini?')"
                >
                  @csrf
                  @method('DELETE')
                  <button 
                    type="submit" 
                    class="btn btn-sm text-white"
                    style="background-color: #ff4757; border-radius: 20px;"
                  >
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center text-muted py-4">
                <i class="bi bi-info-circle me-1"></i> Belum ada data brand motor.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap Icons -->
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
  >
@endsection
