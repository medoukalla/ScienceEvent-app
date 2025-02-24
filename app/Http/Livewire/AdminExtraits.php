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

    public $isProcessing = false;


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
        $this->isProcessing = true; // Start loading

        $this->validate([
            'title' => 'required|min:3',
            'image' => 'nullable|image|max:2048', // 2MB Max
            'video' => 'nullable|mimetypes:video/avi,video/mpeg,video/quicktime,video/x-ms-wmv,video/x-flv,video/mp4|max:51200', // 50MB Max
        ]);

        // Initialize variables
        $imagePath = null;
        $videoPath = null;

        try {
            // Save image if provided
            if ($this->image && $this->image->isValid()) {
                $imagePath = $this->image->store('extraitsPhotos', 'real_public');
            }

            // Save video if provided
            if ($this->video && $this->video->isValid()) {
                $videoPath = $this->video->store('extraitsVideos', 'real_public');
            }

            // Create the extrait record only after both files are processed
            Extrait::create([
                'title' => $this->title,
                'video' => $videoPath,
                'thumbnail' => $imagePath,
                'formation_id' => $this->formation_id,
            ]);

            // Refresh the formation extraits list
            $this->formation_extraits = Extrait::where('formation_id', $this->formation_id)->get();

            // Reset form inputs
            $this->reset(['title', 'image', 'video']);
            $this->isProcessing = false; // Stop loading after completion
        } catch (\Exception $e) {
            $this->isProcessing = false; // Stop loading after completion
            // Log any errors that occur during file processing
            \Log::error('Error creating extrait:', ['message' => $e->getMessage()]);
            session()->flash('error', 'An error occurred while processing your request.');
        }
    }



    
    public function delete_extrait($extrait_id)
    {
        Extrait::where('id', $extrait_id)->delete();
        $this->formation_extraits = Extrait::where('formation_id', $this->formation_id)->get();
    }
}
