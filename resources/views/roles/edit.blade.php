@extends('layouts.app')

@section('content')
<div class="custom-container">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="#!">Settings</a></li>
      <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Role</li>
    </ol>
  </nav>

  <!-- Title Section with Back Button -->
  <div class="d-flex align-items-center gap-3 mb-6">
    <a href="{{ route('roles.index') }}" class="btn btn-light border btn-icon rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
    </a>
    <div>
      <h1 class="h2 mb-1">Edit Role</h1>
      <p class="text-secondary mb-0">Update details for role <strong>{{ $role->display_name }}</strong> <code class="text-muted ms-1">{{ $role->name }}</code>.</p>
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
      <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- ─── Role Information ─── --}}
        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Role Information</h5>

        <div class="row g-4 mb-4">
          <!-- Role Display Name -->
          <div class="col-md-5">
            <label for="display_name" class="form-label fw-semibold text-dark">Role Name <span class="text-danger">*</span></label>
            <input type="text" name="display_name" id="display_name"
              class="form-control @error('display_name') is-invalid @enderror"
              placeholder="e.g. Finance Officer"
              value="{{ old('display_name', $role->display_name) }}" required>
            <div class="form-text text-secondary mt-1" style="font-size: 0.82rem;">Human-readable label shown in the UI.</div>
            @error('display_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Role Code (Spatie name column) -->
          <div class="col-md-4">
            <label for="name" class="form-label fw-semibold text-dark">Role Code <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name"
              class="form-control @error('name') is-invalid @enderror"
              placeholder="e.g. FINANCE_OFFICER"
              value="{{ old('name', $role->name) }}" required style="text-transform: uppercase;">
            <div class="form-text text-secondary mt-1" style="font-size: 0.82rem;">Unique key — uppercase, no spaces.</div>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Status -->
          <div class="col-md-3">
            <label for="status" class="form-label fw-semibold text-dark">Status <span class="text-danger">*</span></label>
            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
              <option value="active"   {{ old('status', $role->status) === 'active'   ? 'selected' : '' }}>Active</option>
              <option value="inactive" {{ old('status', $role->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Description -->
        <div class="mb-5">
          <label for="description" class="form-label fw-semibold text-dark">Description</label>
          <textarea name="description" id="description" rows="3"
            class="form-control @error('description') is-invalid @enderror"
            placeholder="Describe what this role is for...">{{ old('description', $role->description) }}</textarea>
          @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        {{-- ─── Permissions ─── --}}
        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Permissions</h5>
        @if ($permissions->isEmpty())
          <div class="alert alert-light border text-secondary mb-5">No permissions available. Create a permission first.</div>
        @else
          @php
            $assigned = $role->permissions->pluck('id')->all();
            $grouped  = $permissions->groupBy(fn ($p) => explode('_', $p->name, 2)[0]);
          @endphp
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-sm btn-light border" id="checkAllPermissions">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
              {{ count($assigned) === $permissions->count() ? 'Uncheck All' : 'Check All' }}
            </button>
          </div>
          <div class="row g-3 mb-5">
            @foreach ($grouped as $module => $modulePerms)
              <div class="col-md-6 col-lg-4">
                <div class="border rounded p-3 h-100 bg-light bg-opacity-50">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="fw-bold text-uppercase text-secondary mb-0" style="font-size: 0.78rem; letter-spacing: 0.5px;">{{ $module }}</h6>
                    <button type="button" class="btn btn-sm btn-outline-secondary py-0 px-2 check-module-btn" style="font-size: 0.75rem;" data-module="{{ $module }}">All</button>
                  </div>
                  <div class="d-flex flex-column gap-2">
                    @foreach ($modulePerms as $permission)
                      <div class="form-check">
                        <input class="form-check-input perm-check perm-module-{{ $module }}" type="checkbox"
                          name="permissions[]"
                          id="perm_{{ $permission->id }}"
                          value="{{ $permission->id }}"
                          {{ in_array($permission->id, old('permissions', $assigned)) ? 'checked' : '' }}>
                        <label class="form-check-label text-dark" for="perm_{{ $permission->id }}">
                          {{ $permission->display_name }}
                          <code class="ms-1 text-muted" style="font-size: 0.72rem;">{{ $permission->name }}</code>
                        </label>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          @error('permissions')
            <div class="text-danger small mb-4">{{ $message }}</div>
          @enderror
        @endif

        <!-- Form Actions -->
        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
          <a href="{{ route('roles.index') }}" class="btn btn-light border px-4 py-2 text-dark">Cancel</a>
          <button type="submit" class="btn btn-dark px-4 py-2">Update Role</button>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
  // Auto-capitalize role code input
  document.getElementById('name').addEventListener('input', function () {
    let pos = this.selectionStart;
    let old = this.value.length;
    this.value = this.value.toUpperCase().replace(/\s+/g, '_').replace(/[^A-Z0-9_]/g, '');
    let diff = this.value.length - old;
    this.setSelectionRange(pos + diff, pos + diff);
  });

  // Check-all permissions
  document.getElementById('checkAllPermissions').addEventListener('click', function () {
    const boxes = document.querySelectorAll('.perm-check');
    const allChecked = [...boxes].every(b => b.checked);
    boxes.forEach(b => b.checked = !allChecked);
    this.innerHTML = (allChecked ? '✓ Check All' : '✓ Uncheck All');
  });

  // Per-module check-all
  document.querySelectorAll('.check-module-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const module = this.dataset.module;
      const boxes  = document.querySelectorAll(`.perm-module-${module}`);
      const allChecked = [...boxes].every(b => b.checked);
      boxes.forEach(b => b.checked = !allChecked);
    });
  });
</script>
@endsection
