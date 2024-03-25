<form wire:submit="save">
    @if (session('Success'))
        <div class="alert alert-success">
            <span>{{session('Success')}}</span>
        </div>
    @endif
    <div class="modal-body">
      
            <div class="form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" wire:model="name" value="{{$name}}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
       

    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
 </form>