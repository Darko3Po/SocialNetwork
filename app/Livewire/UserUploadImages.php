<?php

namespace App\Livewire;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserUploadImages extends Component
{
    use WithFileUploads;

    #[Validate([
        'images.*' => [
            'required', 'image', 'max:2048'
        ]
    ])]

    public array  $images = [];
    public function uploadImages(): JsonResponse
    {
        $this->validate();
        foreach ($this->images as $image){
           $fileName = rand(0,100).time();

           $path = Storage::disk('public')->path('user_images')."/$fileName.webp";

           ImageManager::gd()->read($image)->save($path);

        }

        return response()->json([
            'mesage' => 'File upload was a success',
        ]);

    }

    public function render()
    {
        return view('livewire.profile.user-upload-images');
    }
}
