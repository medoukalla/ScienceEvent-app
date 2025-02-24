<div class="panel p-3" style=" background-color: #00bad10a !important">

    <div class="form-group  col-md-12 ">
        <h3>Packs de formation</h3>
    </div>

    <div class="form-group  col-md-12 ">
        <ul class="list-group">
            @foreach ($formation_packs as $pack)
                <li class="list-group-item d-flex justify-content-between" style=" padding-top: 10px; padding-bottom: 0; height: 45px; ">
                    {{ $pack->title }} | {{ $pack->price }} DH
                    <button wire:click="delete_pack({{ $pack->id }})" class="btn btn-link" style=" width: 30px; margin-top: -10px; margin-right: -15px; ">
                        <i class="voyager-trash text-danger"></i>
                    </button>
                </li>
            @endforeach
        </ul>
    </div>



    <hr>

    <div class="col-md-12">
        <h5>Ajouter un pack</h5>
    </div>

    <div class="form-group  col-md-12 ">
        <label class="control-label" for="name">Title</label>
        <input wire:model="title" type="text" class="form-control" name="title" placeholder="Title" value="">
        @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group  col-md-12 ">
        <label class="control-label" for="name">Price</label>
        <input wire:model="price" type="number" class="form-control" name="price" step="any" placeholder="Price" value="">
        @error('price') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group  col-md-12 ">

        <label class="control-label" for="name">Status</label>
        <select wire:model="status" class="form-control" name="status">
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select>
        @error('status') <div class="alert alert-danger">{{ $message }}</div> @enderror


    </div>

    <div class="panel-footer">
        <button wire:click="add_pack()" type="button" class="btn btn-primary save waves-effect waves-light">Enregistrer</button>
    </div>

</div>