@php
$pos_y = -1.3;
@endphp

@if ($number_elements == 2)

<a-entity position="0 {{ $pos_y }} 0">
		<a-triangle 
				class="collidable nav-back"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-back="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.6 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable nav-circle"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_0; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.2 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable nav-circle"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_1; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable nav-fwd"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-fwd="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
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
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-back="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.8 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_0; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.4 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_1; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_2; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0.4 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-fwd="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
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
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-back="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-1.0 0 0" 
				rotation="0 0 90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_0; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.6 0 0" 
				color="{{ $menu_block_nav_active_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_1; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="-0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_2; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0.2 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-circle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav="show: menu_block_3; activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="0.6 0 0" 
				color="{{ $menu_block_nav_inactive_color }}" 
				radius="0.1">
		</a-circle>
		<a-triangle 
				class="collidable"  
				scale="0.7 0.7 0.7"  
				isvr-menu-block-nav-fwd="activecolor: {{ $menu_block_nav_active_color }}; inactivecolor: {{ $menu_block_nav_inactive_color }}" 
				position="1.0 0 0" 
				rotation="0 0 -90" 
				color="{{ $menu_block_nav_inactive_color }}" 
				vertex-a="0 0.1 0" 
				vertex-b="-0.1 -0.1 0" 
				vertex-c="0.1 -0.1 0">
		</a-triangle>
</a-entity>

@endif
