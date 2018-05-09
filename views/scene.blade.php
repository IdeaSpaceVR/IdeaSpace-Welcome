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


				 <a-entity id="camera-wrapper" position="0 1.6 0">
            <a-entity
                id="camera"
                camera="far: 10000; fov: 80; near: 0.1"
                look-controls>
                <a-entity
                    cursor="fuse: false; rayOrigin: mouse"
                    raycaster="objects: .collidable"
                    id="cursor"
                    position="0 0 -1.9"
                    geometry="primitive: circle; radius: 0.02;"
                    material="color: #FFFFFF; shader: flat;"
                    visible="false">
                </a-entity>
            </a-entity>
        </a-entity>


				<!--a-entity laser-controls="hand: left" raycaster="objects: .collidable; near: 0.5" line="color: #FFFFFF" class="laser-controls" visible="false"></a-entity>
        <a-entity laser-controls="hand: right" raycaster="objects: .collidable; near: 0.5" line="color: #FFFFFF" class="laser-controls" visible="false"></a-entity//-->


				@if (isset($content['space-links']))
				<a-entity position="0 1.6 -2.2">	


						@if (isset($content['general-settings'][0]['logo']))
						 <a-entity
                position="0 1.4 0"
                scale="0.5 0.5"
								@if ($content['general-settings'][0]['logo-aspect-ratio']['#value'] == '4-3')
                		geometry="primitive: plane; width: 1; height: 0.75"
                @elseif ($content['general-settings'][0]['logo-aspect-ratio']['#value'] == '3-4')
                		geometry="primitive: plane; width: 0.75; height: 1"
                @elseif ($content['general-settings'][0]['logo-aspect-ratio']['#value'] == '16-9')
                		geometry="primitive: plane; width: 1; height: 0.5625"
                @elseif ($content['general-settings'][0]['logo-aspect-ratio']['#value'] == '9-16')
                		geometry="primitive: plane; width: 0.5625; height: 1"
                @elseif ($content['general-settings'][0]['logo-aspect-ratio']['#value'] == '1-1')
                		geometry="primitive: plane; width: 1; height: 1"
                @endif
                material="shader: flat; src: url({{ $content['general-settings'][0]['logo']['logo-image-resized']['#uri']['#value'] }})">
            </a-entity>
						@elseif (isset($content['general-settings'][0]['space-title-appearance']) && $content['general-settings'][0]['space-title-appearance']['#value'] == 'show')
						<a-entity
								geometry="primitive: plane; width: 4; height: 0.5"
								position="0 1.4 0"
								material="shader: html; target: #space-title-texture; transparent: true; ratio: width">
						</a-entity>
						@endif



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


		<div class="cover">
    </div>


    <div id="space-title-texture" style="color:@if (isset($content['general-settings'][0]['space-title-color'])) {{ $content['general-settings'][0]['space-title-color']['#value'] }} @else #FFFFFF @endif">
    {!! $space_title !!}
    </div>


    @if (isset($content['space-links']))
        @foreach ($content['space-links'] as $space_link)
        		<div id="space-link-title-texture-cid-{{ $space_link['space-link-title']['#content-id'] }}" class="space-link-title-texture">
            {!! $space_link['space-link-title']['#value'] !!}
        		</div>
        @endforeach
    @endif


    <script>
    (function() {
        /* DOM is loaded */
        //isvr_assets.init('{{ $space_url }}/content/photo-spheres');
    })();
    </script>

@endsection
