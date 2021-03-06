@extends('layouts.master')

@section('title', 'Your goals')

@section('content')
<div class="row">
<div class="goals-list col-md-6">
   <h1>All goals</h1>
   <table class="table table-striped">
    <tbody>
        <tr>
            <th>Title</th>
            <th>Progress</th>
            <th>Status</th>
            <th>Remaining</th>
        </tr>
        @foreach ($goals as $goal)
        <tr>
            <td class="table-goal-title">
                {{ link_to("goals/$goal->id", $goal->goal_title) }}
            </td>
            <td class="table-goal-pie">
                <span class="pie"

                @if ($goal->goal_value >= $goal->goal_complete)
                    data-fill='["#5cb85c", "#eeeeee"]'
                @else
                    data-fill='["#f0ad4e", "#eeeeee"]'
                @endif
                >{{$goal->goal_value}}/{{$goal->goal_complete}}</span>
            </td>
            <td class="table-goal-label">
                @if ($goal->goal_value <= 0)
                    <span class="label label-danger">Not Started</span>
                    
                @elseif ($goal->goal_value < $goal->goal_complete)
                    <span class="label label-warning">In Progress</span>
                    
                @elseif ($goal->goal_value >= $goal->goal_complete)
                    <span class="label label-success">Complete</span>
                    
                @endif            
            </td>
            <td class="table-goal-remaining">
                <?  $remaining = $goal->goal_complete - $goal->goal_value; 
                    
                    $remainingStatus = 'incomplete';
                    
                    if ($remaining <= 0)
                    {
                        $remainingStatus = 'complete';
                    }
                    elseif($remaining == $goal->goal_complete)
                    {
                        $remainingStatus = 'unstarted';
                    }
                    
                ?>
                <span class="{{ $remainingStatus }}">{{ $remaining }} </span>
            </td>
        </tr>
        @endforeach 
    </tbody>
    </table>
</div> <!-- .goals-list -->
<div class="add-goal-form col-md-4 col-md-offset-2 hidden-xs">
    <h1>Add goal</h1>
    {{ $createform }}
</div> <!-- add goal form -->
</div>
@stop