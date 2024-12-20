<?php

namespace App\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $message = '';
    public $type = 'error'; // 'success' or 'error'
    public $show = false;
    public $duration = 5000;
    public $startTime = 0;

    // Listen to dispatched browser events
    protected $listeners = [
        'showSuccessMessage' => 'showSuccessMessage',
        'showErrorMessage' => 'showErrorMessage',
    ];

    public function showSuccessMessage($message)
    {
        $this->message = $message;
        $this->type = 'success'; // Either 'success' or 'error'
        $this->show = true;
        $this->startTime = now()->timestamp * 1000;
        $this->dispatch('alert-show'); // Show the alert
    }

    public function showErrorMessage($message)
    {
        $this->message = $message;
        $this->type = 'error'; // Either 'success' or 'error'
        $this->show = true;
        $this->startTime = now()->timestamp * 1000;
        $this->dispatch('alert-show'); // Show the alert
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
