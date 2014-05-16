@extends("layouts.master")

@content("title", "Create goal")

@section("content")
<div class="add-goal-form col-md-4 col-md-offset-2">
    <h1>Add goal</h1>
    {{ $createform }}
</div> <!-- add goal form -->
@stop