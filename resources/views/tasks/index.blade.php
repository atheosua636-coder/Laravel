@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <section class="task-page">
        <div class="task-heading">
            <div>
                <p class="task-eyebrow">TASK MANAGEMENT</p>
                <h2>All Tasks</h2>
                <p class="task-muted">Tasks are ordered by scheduled date.</p>
            </div>
            <p class="task-count">{{ $tasks->count() }} {{ \Illuminate\Support\Str::plural('task', $tasks->count()) }}</p>
        </div>

        @if ($tasks->isEmpty())
            <div class="task-empty">
                <h3>No tasks found</h3>
                <p class="task-muted">Seed the database to load the sample tasks.</p>
            </div>
        @else
            <div class="task-table-wrap">
                <table class="task-table">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ ucwords(str_replace('_', ' ', $task->status)) }}</td>
                                <td>{{ $task->task_date->format('F j, Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection
