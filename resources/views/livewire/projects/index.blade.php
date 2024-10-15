<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @foreach ( $this->projects as $project )
        <li>
            <a href="{{ route('projects.show', $project) }}">
                {{ $project->id }}- {{ $project->title }}
            </a>
        </li>
    
    @endforeach
</div>
