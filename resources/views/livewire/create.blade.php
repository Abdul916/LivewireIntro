<div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
    <div class="bg-white p-5 rounded-lg">
        <h2>{{ $postId ? 'Edit Post' : 'Create Post' }}</h2>
        <form>
            <div class="mb-4">
                <label for="title">Title</label>
                <input type="text" id="title" wire:model="title" class="form-control">
                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="mb-4">
                <label for="body">Body</label>
                <textarea id="body" wire:model="body" class="form-control"></textarea>
                @error('body') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <button type="button" wire:click="store()" class="btn btn-primary">Save</button>
            <button type="button" wire:click="closeModal()" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
</div>
