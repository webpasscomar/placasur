<div class="modal fade show" id="{{ $imageId }}" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel"
    aria-hidden="true" style="display: block">

    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content border-0" style="box-shadow: 0px 0px 5px 1px #adadad;">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="roleModalLabel">
                    Title
                </h5> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click="closeModalImage">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">

                <img src="{{ $image }}" class="w-75" alt="{{ 'imagen ' . $title }}" style="height:400px">

            </div>

        </div>
    </div>

</div>
