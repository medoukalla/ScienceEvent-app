<div class="panel p-3 bg-warning" style=" background-color: #ff9f4312 !important">

    <div class="form-group  col-md-12 ">
        <h3>Resources de formation</h3>
    </div>

    <div class="form-group  col-md-12 ">
        <ul class="list-group">
            @foreach ($formation_resources as $resource)
                <li class="list-group-item d-flex justify-content-between" style=" padding-top: 10px; padding-bottom: 0; height: 45px; ">
                    {{ $resource->file_name }} 
                    <button wire:click="delete_resource({{ $resource->id }})" class="btn btn-link" style=" width: 30px; margin-top: -10px; margin-right: -15px; ">
                        <i class="voyager-trash text-danger"></i>
                    </button>
                </li>
            @endforeach
        </ul>
    </div>



    <hr>

    <div class="col-md-12">
        <h5>Ajouter un resource</h5>
    </div>

    <div class="form-group  col-md-12 ">
        <label class="control-label" for="file_name">Nom de fichier</label>
        <input wire:model.defer="file_name" type="text" class="form-control" name="file_name" >
        @error('file_name') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group  col-md-12 ">
        <label class="control-label" for="Fichier">Fichier</label>
        <input wire:model="file" type="file" class="form-control" name="Fichier" >
        @error('file') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>


    <div class="panel-footer " style="display: {{ ($file) ? '' : 'none' }}">
        <button wire:click="add_resource()" type="button" class="btn btn-primary save waves-effect waves-light">Enregistrer</button>
    </div>
    <div class="panel-footer " wire:loading>
        <div class="alert alert-warning d-block">
            <b>Veuillez patienter svp ...</b>
        </div>
    </div>

</div>