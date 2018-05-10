@php
$pos_y = -1.3;
@endphp

@if ($number_elements == 2)

<a-entity position="0 {{ $pos_y }} 0">
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-back 
				position="-0.6 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable nav-circle"  
				isvr-menu-block-nav="show: menu_block_0; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.2 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable nav-circle"  
				isvr-menu-block-nav="show: menu_block_1; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-fwd 
				position="0.6 0 0" 
				rotation="0 0 -90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@elseif ($number_elements == 3)

<a-entity position="0 {{ $pos_y }} 0">
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-back 
				position="-0.8 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-0" 
				position="-0.4 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-1" 
				position="0 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-2" 
				position="0.4 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-fwd 
				position="0.8 0 0" 
				rotation="0 0 -90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@elseif ($number_elements == 4)

<a-entity position="0 {{ $pos_y }} 0">
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-back 
				position="-1.0 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-0" 
				position="-0.6 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-1" 
				position="-0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-2" 
				position="0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				isvr-menu-block-nav="#menu-block-3" 
				position="0.6 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable"  
				isvr-menu-block-nav-fwd 
				position="1.0 0 0" 
				rotation="0 0 -90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@endif
