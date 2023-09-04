@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['slug']) }}">{{ $item['name'] }} </a>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
           style="color:white; font-weight: bold; text-decoration: none; margin-right: 50px;" >{{ $item['name'] }} <span class="caret"></span></a>
        <ul class="dropdown-menu sub-menu" style="margin-top: 0; padding: 5px;">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li class="lisubmenu">
                        <?php
                            $xurl=$submenu['slug'];
                            if ($submenu['parametro1']!='') {
                                $xurl.='/'.$submenu['parametro1'];
                            }
                        ?>
                        <a style="text-decoration: none; width: 100%;" href="{{ url($xurl) }}">{{ $submenu['name'] }} </a>
                    </li>
                @else
                    @include('menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif