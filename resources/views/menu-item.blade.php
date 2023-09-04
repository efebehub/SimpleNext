@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['slug']) }}">{{ $item['name'] }} </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdown{{ $item['id'] }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $item['name'] }} 
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $item['id'] }}">

            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])

                        <?php
                            $xurl=$submenu['slug'];
                            if ($submenu['parametro1']!='') {
                                $xurl.='/'.$submenu['parametro1'];
                            }
                        ?>
                        <a class="dropdown-item" href="{{ url($xurl) }}">{{ $submenu['name'] }}</a>
                @else
                    @include('menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach

            <!--<div class="dropdown-divider"></div>-->
        </div>

    </li>
@endif