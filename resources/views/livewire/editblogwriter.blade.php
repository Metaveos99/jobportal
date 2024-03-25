<form wire:submit="save">
    @if (session('Success'))
        <div class="alert alert-success">
            <span>{{session('Success')}}</span>
        </div>
    @endif
    <div class="modal-body">
      
            <div class="form-group">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" wire:model="name" value="{{$name}}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" accept=".png,.jpg,jpeg" wire:model="image">
                @error('image')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" wire:model="description" value="{{$description}}" cols="30" rows="10"></textarea>
                @error('description')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
       

    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
 </form>