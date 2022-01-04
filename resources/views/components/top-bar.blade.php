<div id="top-bar" class="container-fluid bg-danger">
    <form id="topBar-form" method="post" action="{{ route('create.time') }}">
        @csrf
        <div class="row">
            <div class="col flex p-2">
                <div class="inline">
                    <label class="form-label">Project</label>
                </div>
                <div class="inline">
                    <select name="projects" class="form-select">
                        @foreach($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="inline p-3">
                    <button type="button" id="button_start_stop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-fill text-success p-2" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </button>
                    <button type="button" id="break">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-suit-club-fill p-2" viewBox="0 0 16 16">
                            <path d="M11.5 12.5a3.493 3.493 0 0 1-2.684-1.254 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907 3.5 3.5 0 1 1-2.538-5.743 3.5 3.5 0 1 1 6.708 0A3.5 3.5 0 1 1 11.5 12.5z"/>
                        </svg>
                    </button>
                    <button type="button" id="lunch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-suit-club-fill p-2" viewBox="0 0 16 16">
                            <path d="M11.5 12.5a3.493 3.493 0 0 1-2.684-1.254 19.92 19.92 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a19.919 19.919 0 0 0 1.582-2.907 3.5 3.5 0 1 1-2.538-5.743 3.5 3.5 0 1 1 6.708 0A3.5 3.5 0 1 1 11.5 12.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col">
                <x-reloj class="p-10" style="background:black"></x-reloj>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col flex p-2">
                <div class="inline">
                    <input type="text" name="project_name" placeholder="Task Name" />
                </div>
            </div>
            <div class="col">
                <x-reloj></x-reloj>
            </div>
            <div class="col">
                <x-reloj></x-reloj>
            </div>
        </div>
    </form>
</div>
