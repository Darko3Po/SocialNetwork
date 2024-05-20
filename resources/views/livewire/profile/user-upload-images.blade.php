<div>
    <form wire:submit="uploadImages" enctype="multipart/form-data">
        @error('image.*')
        <span>{{$message}}</span>
        @enderror
        <input type="file" multiple wire:model="images">
        <button>Testttt</button>
    </form>
</div>
