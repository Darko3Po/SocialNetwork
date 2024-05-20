<?php

namespace App\Livewire;

use Illuminate\Http\JsonResponse;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserUploadImages extends Component
{
    use WithFileUploads;

    public array  $images = [];
    public function uploadImages(): JsonResponse
    {
        $this->validate([
            'images.*' => 'image|max:2048'
        ]);

        die("RADIIIII 2 SLIKE");

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function render()
    {
        return view('livewire.profile.user-upload-images');
    }
}
