<form wire:submit='save'>
    <div class="form-group">
      <label for="" class="form-label">Your Name</label>
      <input type="text" wire:model='name' class="form-control" placeholder="Enter Your Name">
       @error('name')
           <span class="text-danger">{{$message}}</span>
       @enderror
    </div>
    <div class="form-group">
      <label for="" class="form-label">Company Name</label>
      <input type="text" wire:model="company_name" class="form-control" placeholder="Enter Your Company Name">
      @error('company_name')
         <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="" class="form-label">Email Address</label>
      <input type="email" wire:model='email' class="form-control" placeholder="Enter Company Email Address">
      @error('email')
         <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="" class="form-label">Select Package</label>
      <select wire:model="package" class="form-control">
          <option value="1">Free</option>
      </select>
      @error('package')
         <span class="text-danger">{{$message}}</span>
      @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="input-4">Password</label>
        <input class="form-control" id="input-4" type="password"  wire:model="password" placeholder="************">
        @error('password')
        <span class="text-danger">{{$message}}</span>
    @enderror
      </div>
      <div class="form-group">
        <label class="form-label" for="input-5">Re-Password</label>
        <input class="form-control" id="input-5" type="password"  wire:model="password_confirmation" placeholder="************">
        @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

    <button type="submit" class="btn btn-default">Register Now</button>
</form>