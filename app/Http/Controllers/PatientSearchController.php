<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Livewire\Component;

class PatientSearchController extends Controller
{
    public $query;
    public $patients;
    public $highlightIndex;

    public function mount()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->query = '';
        $this->patients = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->patients) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->patients) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectPatient()
    {
        $patient = $this->patients[$this->highlightIndex] ?? null;
        if ($patient) {
            $this->redirect(route('show-patient', $patient['id']));
        }
    }

    public function updatedQuery()
    {
        $this->patients = patient::where('name', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.patient-search-bar');
    }
}
