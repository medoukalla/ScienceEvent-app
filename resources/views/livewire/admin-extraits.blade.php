<div class="panel p-3">

    <div class="form-group  col-md-12 ">
        <h3>Extraits de formation</h3>
    </div>

    <div class="form-group  col-md-12 ">
        <ul class="list-group">
            @foreach ($formation_extraits as $extrait)
                <li class="list-group-item d-flex justify-content-between" style=" padding-top: 10px; padding-bottom: 0; height: 45px; ">
                    @if ( !is_null( $extrait->thumbnail) )
                        <a href="{{ asset('public/'.$extrait->thumbnail) }}" target="_blank" title="Voir extrait">
                            {{ $extrait->title }} 
                        </a>
                    @endif

                    @if ( !is_null( $extrait->video) )
                        <a href="{{ asset('public/'.$extrait->video) }}" target="_blank" title="Voir extrait">
                            {{ $extrait->title }} 
                        </a>
                    @endif
                    <button wire:click="delete_extrait({{ $extrait->id }})" class="btn btn-link" style=" width: 30px; margin-top: -10px; margin-right: -15px; ">
                        <i class="voyager-trash text-danger"></i>
                    </button>
                </li>
            @endforeach
        </ul>
    </div>



    <hr>

    <div class="col-md-12">
        <h5>Ajouter un extrait :</h5>
    </div>

    <div class="form-group  col-md-12 ">
        <label class="control-label" for="name">Title</label>
        <input wire:model.defer="title" type="text" class="form-control" name="title" placeholder="Title">
        @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group  col-md-12 " style="display: {{ ($video) ? 'none' : '' }}">
        <label class="control-label" for="name">Image</label>
        <input wire:model="image" type="file" class="form-control" name="image" placeholder="Price">
        @error('image') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group  col-md-12 " style="display: {{ ($image) ? 'none' : '' }}">
        <label class="control-label" for="name">Video</label>
        <input wire:model="video" type="file" class="form-control" name="video" placeholder="Video">
        @error('video') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div>


    <div class="panel-footer " style="display: {{ ($image || $video) ? '' : 'none' }}">
        <button wire:click="add_extrait()" type="button" class="btn btn-primary save waves-effect waves-light">Enregistrer</button>
    </div>
    <div class="panel-footer " wire:loading>
        <div class="alert alert-warning d-block">
            <b>Veuillez patienter svp ...</b>
        </div>
    </div>

</div>