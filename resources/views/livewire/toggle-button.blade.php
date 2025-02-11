<div>
    <label class="switch">
        {{-- <input onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" type="checkbox" wire:model="active"> --}}
        <input type="checkbox" wire:model="active">
        <span class="toggle_slider round"></span>
    </label>

    {{-- <div class="font-italic mt-1" x-data="{ shown: false }" x-show.transition.opacity.out.duration.1500ms="shown"
        x-show="shown" x-init="@this.on('statusUpdated', () => {
            shown = true;
            setTimeout(() => shown = false, 2000)
        })" style="display: none">
        Data Saved
    </div> --}}
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 30px;
            height: 17px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle_slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s,
        }

        .toggle_slider:before {
            position: absolute;
            content: "";
            height: 13px;
            width: 13px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s,
        }

        input:checked+.toggle_slider {
            background-color: #68D391 !important;
        }

        input:focus+.toggle_slider {
            box-shadow: #68D391 !important;
            /* background-color: #000!important; */
        }

        input:checked+.toggle_slider:before {
            -webkit-transform: translateX(13px);
            -ms-transform: translateX(13px);
            transform: translateX(13px);
        }

        /* Rounded slider */
        .toggle_slider.round {
            border-radius: 17px;
        }

        .toggle_slider.round:before {
            border-radius: 50%;
        }
    </style>
</div>
