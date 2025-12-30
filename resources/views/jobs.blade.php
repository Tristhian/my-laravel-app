<div>
    @foreach ($jobs as $job)
    <p>{{ $job }}</p>
    @endforeach

    @for ($i = 0; $i < count($jobs); $i++)
        <span>Job Index: {{ $i }}</span>

    @if ($i % 2 == 0)
        <p>Even Index</p>
    @else
        <p>Odd Index</p>
    @endif

    @endfor
</div>