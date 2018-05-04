@extends('theme::index')

@section('title', $space_title)

@section('scene')

@php
$menu_block_margin = 10;
$menu_block_nav_inactive_color = "#999999";
$menu_block_nav_active_color = "#ffcc00";
$menu_block_nav_hover_color = "#ff0000";
@endphp

		<a-scene isvr-scene>

				<a-assets>
    				<a-mixin id="menu-block-nav-inactive" material="color: {{ $menu_block_nav_inactive_color }}"></a-mixin>
    				<a-mixin id="menu-block-nav-active" material="color: {{ $menu_block_nav_active_color }}"></a-mixin>
    				<a-mixin id="menu-block-nav-hover" material="color: {{ $menu_block_nav_active_color }}"></a-mixin>
 				</a-assets>


				<a-entity 
						id="camera"
						look-controls 
            camera>
        		<a-entity
            		cursor="fuse: false; rayOrigin: mouse"
								raycaster="objects: .navigation"
                id="cursor"
								/*position="0 0 -1.9"
                geometry="primitive: circle; radius: 0.02;"
                material="color: #FFFFFF; shader: flat;"
                visible="false"*/>
        		</a-entity>
        </a-entity>


				<a-entity laser-controls="hand: left" raycaster="objects: .navigation; near: 0.5" line="color: #FFFFFF" class="laser-controls"></a-entity>
        <a-entity laser-controls="hand: right" raycaster="objects: .navigation; near: 0.5" line="color: #FFFFFF" class="laser-controls"></a-entity>


				@if (isset($content['space-links']))
				<a-entity position="0 0.3 -2.5">	

						@if (count($content['space-links']) > 0 && count($content['space-links']) <= 5)

								@include('theme::partials.5_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => count($content['space-links']), 'position' => '0 0 0', 'visible' => 'true'])



						@elseif (count($content['space-links']) > 5 && count($content['space-links']) <= 9)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => count($content['space-links']), 'position' => '0 0 0', 'visible' => 'true'])



						@elseif (count($content['space-links']) > 9 && count($content['space-links']) <= 14)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.5_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => count($content['space-links']), 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 2])



						@elseif (count($content['space-links']) > 14 && count($content['space-links']) <= 18)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => count($content['space-links']), 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 2])



						@elseif (count($content['space-links']) > 18 && count($content['space-links']) <= 23)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => 18, 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.5_items_layout_partial', 
										['id' => 'menu-block-2', 'start_counter' => 18, 'count' => count($content['space-links']), 'position' => ($menu_block_margin * 2) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 3])



						@elseif (count($content['space-links']) > 23 && count($content['space-links']) <= 27)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => 18, 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-2', 'start_counter' => 18, 'count' => count($content['space-links']), 'position' => ($menu_block_margin * 2) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 3])



						@elseif (count($content['space-links']) > 27 && count($content['space-links']) <= 32)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => 18, 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-2', 'start_counter' => 18, 'count' => 27, 'position' => ($menu_block_margin * 2) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.5_items_layout_partial', 
										['id' => 'menu-block-3', 'start_counter' => 27, 'count' => count($content['space-links']), 'position' => ($menu_block_margin * 3) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 4])



						@elseif (count($content['space-links']) > 32 && count($content['space-links']) <= 36)

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-0', 'start_counter' => 0, 'count' => 9, 'position' => '0 0 0', 'visible' => 'true'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-1', 'start_counter' => 9, 'count' => 18, 'position' => $menu_block_margin . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-2', 'start_counter' => 18, 'count' => 27, 'position' => ($menu_block_margin * 2) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.9_items_layout_partial', 
										['id' => 'menu-block-3', 'start_counter' => 27, 'count' => count($content['space-links']), 'position' => ($menu_block_margin * 3) . ' 0 0', 'visible' => 'false'])

								@include('theme::partials.menu_navigation_element', ['number_elements' => 4])

						@endif

				</a-entity>	
				@endif

    </a-scene>

@endsection
