<form wire:submit='save'>
    @if (session('Success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <span>{{session('Success')}}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-group">
      <label for="current_password" class="form-label">Current Password</label>
      <input type="password" class="form-control" id="current_password" wire:model="current_password">
        @error('current_password')
            <span class="text-danger">{{$message}}</span>    
        @enderror
    </div>
    <div class="form-group">
      <label for="password" class="form-label">New Password</label>
      <input type="password" class="form-control" id="password" wire:model="password">
        @error('password')
            <span class="text-danger">{{$message}}</span>    
        @enderror
    </div>
    <div class="form-group">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
        @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>    
        @enderror
    </div>
    <button class="btn btn-primary">Update</button>
</form>
