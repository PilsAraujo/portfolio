<h2>
    {{ $job->title }}
</h2>

<p>
    Laliho! Your job is now on our website. 
</p>

<p>
    <a href="{{ url('jobs/' . $job->id) }}">View Your Job!</a>
</p>
