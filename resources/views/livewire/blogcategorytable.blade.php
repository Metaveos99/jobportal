<div>
    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>#</th>
                <th style="width: 70%">Name</th>
                <th style="width: 25%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $index => $item)
                <tr wire:key="cat-{{ $item->id }}">
                    <td>{{ ++$index }}</td>
                    <td>{{ $item->name }}</td>
                    <td class="d-flex justify-content-start">
                        <button value="{{ $item->id }}" onclick="ggx({{ $item->id }})" class="btn btn-danger delcat">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @script
        <script>
            Livewire.on('category-created', () => {
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