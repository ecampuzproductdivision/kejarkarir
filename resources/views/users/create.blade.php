@extends('layouts.app')

@section('content')
<div class="custom-container">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="#!">Settings</a></li>
      <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
      <li class="breadcrumb-item active" aria-current="page">Create New User</li>
    </ol>
  </nav>

  <!-- Title Section with Back Button -->
  <div class="d-flex align-items-center gap-3 mb-6">
    <a href="{{ route('users.index') }}" class="btn btn-light border btn-icon rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
    </a>
    <div>
      <h1 class="h2 mb-1">Create New User</h1>
      <p class="text-secondary mb-0">Create a new system user and assign their access role.</p>
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

  <!-- Creation Card Form -->
  <div class="card border-0 shadow-sm mb-6">
    <div class="card-body p-5">
      <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">User Information</h5>

        <div class="row g-4 mb-4">
          <!-- Name -->
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold text-dark">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="e.g. John Doe" value="{{ old('name') }}" required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold text-dark">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="e.g. john@example.com" value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Role -->
          <div class="col-md-6">
            <label for="role_id" class="form-label fw-semibold text-dark">Role <span class="text-danger">*</span></label>
            <select name="role_id" id="role_id" class="form-select @error('role_id') is-invalid @enderror" required>
              <option value="">Select a role...</option>
              @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                  {{ $role->display_name }}
                  <span style="font-size:0.8rem; color:#999;"> — {{ $role->name }}</span>
                </option>
              @endforeach
            </select>
            @error('role_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <h5 class="card-title mb-4 pb-2 border-bottom text-secondary" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.5px;">Account Password</h5>

        <div class="row g-4 mb-4">
          <!-- Password -->
          <div class="col-md-6">
            <label for="password" class="form-label fw-semibold text-dark">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Minimum 8 characters" required>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Password Confirmation -->
          <div class="col-md-6">
            <label for="password_confirmation" class="form-label fw-semibold text-dark">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Repeat password" required>
          </div>
        </div>

        <!-- Form Actions -->
        <div class="d-flex justify-content-end gap-3 pt-3 border-top">
          <a href="{{ route('users.index') }}" class="btn btn-light border px-4 py-2 text-dark">Cancel</a>
          <button type="submit" class="btn btn-danger px-4 py-2" style="background-color: #ef5350; border-color: #ef5350;">Create User</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection
