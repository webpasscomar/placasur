<?php

    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class ModalNovelty extends Component
    {
        public $title, $date, $description, $image, $id;

        public function __construct($id, $title, $date, $description, $image)
        {
            $this->id = $id;
            $this->title = $title;
            $this->date = $date;
            $this->description = $description;
            $this->image = $image;
        }

        /**
         * Get the view / contents that represent the component.
         */
        public function render(): View|Closure|string
        {
            return view('components.modal-novelty');
        }
    }
