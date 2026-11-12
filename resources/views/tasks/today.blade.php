@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <section class="task-page">
        <div class="task-heading">
            <div>
                <p class="task-eyebrow">TASKS FOR TODAY</p>
                <h2>Welcome</h2>
                <p class="task-muted">{{ today()->format('F j, Y') }}</p>
            </div>
            <p class="task-count">{{ $tasks->count() }} {{ \Illuminate\Support\Str::plural('task', $tasks->count()) }}</p>
        </div>

        @if ($tasks->isEmpty())
            <div class="task-empty">
                <h3>No tasks scheduled for today</h3>
                <p class="task-muted">Check the full task list for upcoming items.</p>
                <a class="button" href="{{ route('tasks.index') }}">View all tasks</a>
            </div>
        @else
            <div class="task-list">
                @foreach ($tasks as $task)
                    <article class="task-card">
                        <div>
                            <h3>{{ $task->title }}</h3>
                            <p class="task-muted">{{ $task->task_date->format('F j, Y') }}</p>
                        </div>
                        <span class="task-status">{{ ucwords(str_replace('_', ' ', $task->status)) }}</span>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
@endsection
