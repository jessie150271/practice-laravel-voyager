<ul class="myclass menuclass"> 
    @foreach($items as $menu_item) 
        <li class="liclass"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li> 
        @if(count($menu_item->children)>0)
            @foreach($menu_item->children as $menu_sub_item) 
                <li class="liclass"><a href="{{ $menu_sub_item->link() }}">{{ $menu_sub_item->title }}</a></li> 
            @endforeach 
        @endif
    @endforeach 
</ul> 