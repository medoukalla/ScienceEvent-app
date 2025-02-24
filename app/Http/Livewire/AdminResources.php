<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Resource;

class AdminResources extends Component
{

    use WithFileUploads;

    public $formation_id;

    public $formation_resources;

    // inputs to add new pack 
    public $file_name;
    public $file = null;

    public function mount($formation_id)
    {
        $this->formation_resources = Resource::where('formation_id', $formation_id)->get();
    }


    public function render()
    {
        return view('livewire.admin-resources');
    }


    public function add_resource()
    {
        
        $this->validate([
            'file_name' => 'required|min:3',
            'file' => 'required|file',
        ]);

        // Initialize variables
        $filePath = null;

        try {
            // Save image if provided
            if ($this->file && $this->file->isValid()) {
                $filePath = $this->file->store('resourcesFiles');
            }

            // Create the resource record only after both files are processed
            Resource::create([
                'file_name' => $this->file_name,
                'file_path' => $filePath,
                'formation_id' => $this->formation_id,
            ]);

            // Refresh the formation resources list
            $this->formation_resources = Resource::where('formation_id', $this->formation_id)->get();

            // Reset form inputs
            $this->reset(['file_name', 'file']);
        } catch (\Exception $e) {
            
            // Log any errors that occur during file processing
            \Log::error('Error creating resource:', ['message' => $e->getMessage()]);
            session()->flash('error', 'An error occurred while processing your request.');
        }
    }



    
    public function delete_resource($resource_id)
    {
        Resource::where('id', $resource_id)->delete();
        $this->formation_resources = Resource::where('formation_id', $this->formation_id)->get();
    }


}
