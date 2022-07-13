<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Service;
use Livewire\Component;

class Projects extends Component
{
    public $repo;
    public $setting;
    public $service;

    public $total;
    public $per_page;
    public $per_page_increase;
    public $can_load_more;

    public function mount($serviceSlug)
    {
        $this->service = Service::whereHas('slugs', function ($query) use ($serviceSlug) {
            $query->where('slug', $serviceSlug);
        })->where('published', 1)->first();

        $this->total = Project::when($this->service, function ($project) {
            $project->whereHas('relatedItems', function ($relatedItem) {
                $relatedItem->where('related_type', 'App\Models\Service')->where('related_id', $this->service->id);
            });
        })->where('published', 1)->get()->count();

        $this->per_page = 3;
        $this->per_page_increase = 2;
        $this->can_load_more = true;
    }

    public function loadMore()
    {
        $this->per_page += $this->per_page_increase;
        $this->can_load_more = $this->per_page > $this->total ? false : true;
    }

    public function getProjectsProperty()
    {
        return Project::when($this->service, function ($project) {
            $project->whereHas('relatedItems', function ($relatedItem) {
                $relatedItem->where('related_type', 'App\Models\Service')->where('related_id', $this->service->id);
            });
        })->where('published', 1)->paginate($this->per_page);
    }

    public function render()
    {
        return view('livewire.projects', [
            'projects' => $this->projects,
        ]);
    }
}
