<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Submission extends Component
{
    public $type = 'link';

    public $body = '';

    public $password = '';

    public function render()
    {
        return view('livewire.submission', [
            'types' => [
                'link'    => __('Link'),
                'snippet' => __('snippet'),
                'file'    => __('File'),
            ],
        ]);
    }
}
