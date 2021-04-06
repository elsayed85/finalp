@unless ($breadcrumbs->isEmpty())

<ul class="page-breadcrumbs">
    @foreach ($breadcrumbs as $breadcrumb)

    @if (!is_null($breadcrumb->url) && !$loop->last)
    <li class="item"><a class="link" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
    <i class="separator icofont-thin-right"></i>
    @else
    <li class="item active">{{ $breadcrumb->title }}</li>
    @endif

    @endforeach
</ul>

@endunless
