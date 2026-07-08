<div class="container c-intro">
    <ul class="breadcrumb">

        <li>
            <a href="{{ route('home') }}">
                <i class="material-icons" title="Home">home</i>
            </a>
        </li>

        @foreach ($items as $item)
            <li>
                @if ($item['url'])
                    <a href="{{ $item['url'] }}">
                        {{ $item['title'] }}
                    </a>
                @else
                    <span>
                        {{ $item['title'] }}
                    </span>
                @endif
            </li>
        @endforeach

    </ul>


    {{-- <ul class="breadcrumb" itemscope itemtype="">
                    <li><a href="{{ route('home') }}"><i class="material-icons" title="Home">home</i></a></li>
                    @foreach ($breadcrumbs as $crumb)
                        <li itemprop="itemListElement" itemscope itemtype="">
                            <a itemtype="" itemprop="item" href="{{ route('catProducts', $crumb->id) }}">
                                <span itemprop="name">{{ $crumb->name }}</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                    @endforeach
                </ul> --}}
</div>
