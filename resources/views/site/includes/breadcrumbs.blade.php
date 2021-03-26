<!-- Breadcrumbs Start -->
<div class="breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img src="{{ asset('/site/images/breadcrumbs/bg.jpg') }}" alt="Breadcrumbs Image">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title mb-17">{{ $title }}</h1>
                    <div class="categories">
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="fa fa-house"></i>Home</a></li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
