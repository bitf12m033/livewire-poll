<div>

    <form>
        <label>Poll Title</label>
        <input type="text" wire:model.live="title" />

        Current Title: {{ $title }}

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index=>$option)
                <div class="mb-4 mt-2">
                    <label>Option {{ $index }} </label>
                    <div class="flex gap-2 ">
                        <input type="text" wire:model.live="options.{{$index}}" />
                        <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>
