<div>
    <form action="" method="post">
        <input type="file" name="photo" id="photo" wire:model="photo">
        @error('photo') {{$message}} @enderror
        <button type="submit" wire:click.prevent="storagePhoto">Upload Foto</button>
    </form>
</div>
