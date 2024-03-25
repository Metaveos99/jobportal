<div>
    @if (session('Success'))
    <div class="alert alert-success alert-dismissible">
        <span>{{session('Success')}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th style="width: 10%">Image</th>
                <th style="width: 25%">Name</th>
                <th style="width: 40%">Description</th>
                <th style="width: 22%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($writer as $index => $item)
                <tr wire:key="cat-{{ $item->id }}">
                    <td>{{ ++$index }}</td>
                    <td class="d-flex justify-content-center align-items-center"><img class="img-fluid rounded-circle m-1" style="width: 5rem; height:5rem" src="{{ asset('storage/'.$item->image) }}"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td class="d-flex justify-content-start">
                        <button class="btn btn-default me-2" onclick="editwriter({{ $item->id }})">Edit</button>
                        <button onclick="ggx({{ $item->id }})" class="btn btn-danger delcat">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @script
        <script>
            Livewire.on('writer-created', () => {
                $('#myTable').DataTable().destroy();
                setTimeout(() => {
                    $('#myTable').DataTable({
                        responsive: true
                    });
                }, 2000);
            });

            
          
        </script>
    @endscript
</div>