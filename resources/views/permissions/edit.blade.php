@extends('layouts.app')

@section('content')
<div class="custom-container">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="#!">Settings</a></li>
      <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissions</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Permission</li>
    </ol>
  </nav>

  <!-- Title Section with Back Button -->
  <div class="d-flex align-items-center gap-3 mb-6">
    <a href="{{ route('permissions.index') }}" class="btn btn-light border btn-icon rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
    </a>
    <div>
      <h1 class="h2 mb-1">Edit Permission</h1>
      <p class="text-secondary mb-0">Update details for permission <strong>{{ $permission->name }}</strong>.</p>
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
      <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Permission Information</h5>

        <div class="row g-4 mb-4">
          <!-- Name -->
          <div class="col-md-5">
            <label for="name" class="form-label fw-semibold text-dark">Permission Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="e.g. Create User" value="{{ old('name', $permission->name) }}" required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Code -->
          <div class="col-md-4">
            <label for="code" class="form-label fw-semibold text-dark">Permission Code <span class="text-danger">*</span></label>
            <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror" placeholder="e.g. CREATE_USER" value="{{ old('code', $permission->code) }}" required style="text-transform: uppercase;">
            <div class="form-text text-secondary mt-1" style="font-size: 0.82rem;">Must be unique, uppercase, with no spaces.</div>
            @error('code')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Status -->
          <div class="col-md-3">
            <label for="status" class="form-label fw-semibold text-dark">Status <span class="text-danger">*</span></label>
            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
              <option value="active" {{ old('status', $permission->status) === 'active' ? 'selected' : '' }}>Active</option>
              <option value="inactive" {{ old('status', $permission->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Description -->
        <div class="mb-5">
          <h5 class="card-title mb-3 text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Description</h5>
          <label for="description" class="form-label fw-semibold text-dark">Description</label>
          <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Provide a short description of what this permission allows...">{{ old('description', $permission->description) }}</textarea>
          @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- Roles Assignment -->
        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Assign To Roles</h5>
        <div class="mb-5">
          <label class="form-label fw-semibold text-dark">Roles</label>
          @if ($roles->isEmpty())
            <div class="alert alert-light border text-secondary mb-0">No roles available. Create a role first.</div>
          @else
            @php $assigned = $permission->roles->pluck('id')->all(); @endphp
            <div class="row g-3">
              @foreach ($roles as $role)
                <div class="col-md-6 col-lg-4">
                  <div class="form-check border rounded px-3 py-2 mb-0">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="role_{{ $role->id }}" value="{{ $role->id }}"
                      {{ in_array($role->id, old('roles', $assigned)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="role_{{ $role->id }}">
                      <span class="fw-semibold">{{ $role->display_name }}</span>
                      <code class="text-secondary d-block" style="font-size: 0.78rem;">{{ $role->name }}</code>
                    </label>
                  </div>
                </div>
              @endforeach
            </div>
          @endif
          @error('roles')
            <div class="text-danger small mt-2">{{ $message }}</div>
          @enderror
        </div>

        <!-- Form Actions -->
        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
          <a href="{{ route('permissions.index') }}" class="btn btn-light border px-4 py-2 text-dark">Cancel</a>
          <button type="submit" class="btn btn-danger px-4 py-2" style="background-color: #ef5350; border-color: #ef5350;">Update Permission</button>
        </div>

      </form>
    </div>
  </div>
</div>

<script>
  // Automatically capitalize permission code input and remove invalid characters
  document.getElementById('code').addEventListener('input', function () {
    let cursorPosition = this.selectionStart;
    let oldLength = this.value.length;
    this.value = this.value.toUpperCase().replace(/\s+/g, '_').replace(/[^A-Z0-9_]/g, '');
    let newLength = this.value.length;
    this.setSelectionRange(cursorPosition + (newLength - oldLength), cursorPosition + (newLength - oldLength));
  });
</script>
@endsection

