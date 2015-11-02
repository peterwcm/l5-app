<div class="columns">
    <h3><a href="{{ URL::route('activities.show', array($activity->id)) }}">{{{ $activity->title }}}</a></h3>

    <div class='row'>
        <div class='columns small-12'>
            <input class="button expand postfix" type="button" value="Join">
        </div>
    </div>
</div>
