<?php

namespace App\Http\Livewire;

use App\Extrait;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminExtraits extends Component
{

    use WithFileUploads;

    public $formation_id;

    public $formation_extraits;

    // inputs to add new pack 
    public $title;
    public $image = null;
    public $video = null;

    public function mount($formation_id)
    {
        $this->formation_extraits = Extrait::where('formation_id', $formation_id)->get();
    }

    public function render()
    {
        return view('livewire.admin-extraits');
    }


    public function add_extrait()
    {
        $this->validate([
            'title' => 'required|min:3',
            'image' => 'nullable|image|max:2048', // 2MB Max
            'video' => 'nullable|mimetypes:video/avi,video/mpeg,video/quicktime,video/x-ms-wmv,video/x-flv,video/mp4',
        ]);


        // save image 
        if ( !is_null( $this->image ) ) {
            $image = $this->image->store('extraits/photos', 'real_public');
        }else { $image = null; }

        // save video 
        if ( !is_null( $this->video ) ) {
            $video = $this->video->store('extraits/videos', 'real_public');
        }else { $video = null; }

        Extrait::create([
            'title' => $this->title,
            'video' => $video,
            'thumbnail' => $image,
            'formation_id' => $this->formation_id,
        ]);

        $this->formation_extraits = Extrait::where('formation_id', $this->formation_id)->get();
        $this->reset(['title', 'image', 'video']);
    }



    
    public function delete_extrait($extrait_id)
    {
        Extrait::where('id', $extrait_id)->delete();
        $this->formation_extraits = Extrait::where('formation_id', $this->formation_id)->get();
    }
}
