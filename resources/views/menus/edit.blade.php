@extends('layouts.app')

@section('content')
<div class="custom-container">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="#!">Settings</a></li>
      <li class="breadcrumb-item"><a href="{{ route('menus.index') }}">Menus</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
    </ol>
  </nav>

  <!-- Title Section with Back Button -->
  <div class="d-flex align-items-center gap-3 mb-6">
    <a href="{{ route('menus.index') }}" class="btn btn-light border btn-icon rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
    </a>
    <div>
      <h1 class="h2 mb-1">Edit Menu</h1>
      <p class="text-secondary mb-0">Update details for menu <strong>{{ $menu->name }}</strong>.</p>
    </div>
  </div>

  <!-- Form Errors -->
  @if ($errors->any())
    <div class="alert alert-danger border-0 shadow-sm mb-6" style="background-color: #ffebee; color: #c62828;">
      <div class="fw-bold mb-2">Please fix the following validation errors:</div>
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Edit Card Form -->
  <div class="card border-0 shadow-sm mb-6">
    <div class="card-body p-5">
      <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Menu Information</h5>

        <div class="row g-4 mb-4">
          <!-- Name -->
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold text-dark">Menu Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="e.g. Dashboard" value="{{ old('name', $menu->name) }}" required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- URL -->
          <div class="col-md-6">
            <label for="url" class="form-label fw-semibold text-dark">URL / Route <span class="text-danger">*</span></label>
            <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" placeholder="e.g. /dashboard" value="{{ old('url', $menu->url) }}" required>
            @error('url')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Icon -->
          <div class="col-md-6">
            <label for="icon" class="form-label fw-semibold text-dark">Icon</label>
            <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="e.g. ti-settings, ti-users" value="{{ old('icon', $menu->icon) }}">
            <div class="form-text text-secondary mt-1" style="font-size: 0.82rem;">Tabler icon class (optional). Example: ti-settings</div>
            @error('icon')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Parent Menu -->
          <div class="col-md-6">
            <label for="parent_id" class="form-label fw-semibold text-dark">Parent Menu</label>
            <select name="parent_id" id="parent_id" class="form-select @error('parent_id') is-invalid @enderror">
              <option value="">— None (Top Level) —</option>
              @foreach ($parents as $parent)
                <option value="{{ $parent->id }}" {{ old('parent_id', $menu->parent_id) == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
              @endforeach
            </select>
            @error('parent_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror

          <!-- Sort Order -->
          <div class="col-md-6">
            <label for="sort_order" class="form-label fw-semibold text-dark">Sort Order <span class="text-danger">*</span></label>
            <input type="number" name="sort_order" id="sort_order" class="form-control @error('sort_order') is-invalid @enderror" value="{{ old('sort_order', $menu->sort_order) }}" min="0" required>
            @error('sort_order')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Status -->
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold text-dark">Status <span class="text-danger">*</span></label>
            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
              <option value="active" {{ old('status', $menu->status) === 'active' ? 'selected' : '' }}>Active</option>
              <option value="inactive" {{ old('status', $menu->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Form Actions -->
        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
          <a href="{{ route('menus.index') }}" class="btn btn-light border px-4 py-2 text-dark">Cancel</a>
          <button type="submit" class="btn btn-danger px-4 py-2" style="background-color: #ef5350; border-color: #ef5350;">Update Menu</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

          </div>
