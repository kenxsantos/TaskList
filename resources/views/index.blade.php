@extends('layouts.app')

@section('header', 'The list of tasks')

@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <h2>
            <a href=" {{ route('tasks.show', ['id' => $task->id]) }}">
                {{ $task->title }}
            </a>
        </h2>
    @empty
        <div>There are no tasks!</div>
    @endforelse
    {{-- @endif --}}
@endsection
