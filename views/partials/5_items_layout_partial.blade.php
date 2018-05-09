<a-entity 
		id="{{ $id }}" 
		position="{{ $position }}" 
		visible="{{ $visible }}"
		animation__slideinleft="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_navigation_click"
		animation__slideoutright="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_navigation_click">

		@if ($count == ($start_counter + 1))

		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>

		@elseif ($count == ($start_counter + 2))

		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 1]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 1]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter + 1]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 1]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>

		@elseif ($count == ($start_counter + 3))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 1]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 1]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 1]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 2]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 2]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 2]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>

		@elseif ($count == ($start_counter + 4))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 1]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 1]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 1]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 2]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 2]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 2]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 3]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 3]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 3)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 3]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>

		@elseif ($count == ($start_counter + 5))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 1]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 1]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 1]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 2]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 2]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 2]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 3]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 3]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 3)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 3]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0">
				<a-rounded 
						position="0 0 0.0001" 
						width="1.05" 
						height="0.55" 
						color="{{ $content['space-links'][$start_counter + 4]['space-link-background-color']['#value'] }}" 
						top-left-radius="0.04" 
						top-right-radius="0.04" 
						bottom-left-radius="0.04" 
						bottom-right-radius="0.04"
						animation__enter="property: position; dur: 500; to: 0 0 0.1; easing: easeOutElastic; startEvents:isvr_mouseenter"
						animation__leave="property: position; dur: 200; from: 0 0 0.1; to: 0 0 0.0001; startEvents:isvr_mouseleave">
						@if (isset($content['space-links'][$start_counter + 4]['space-link-image']))
						<a-entity
								position="0 0 0.0001"
								geometry="primitive: plane; width: 1; height: 0.5"
								material="shader: flat; src: url({{ $content['space-links'][($start_counter + 4)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
						</a-entity>
						@endif
						<a-entity
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0002"
								material="shader: html; target: #space-link-title-texture-cid-{{ $content['space-links'][$start_counter + 4]['space-link-title']['#content-id'] }}; transparent: true; ratio: width">
						</a-entity>
						<a-entity
								class="collidable"
								material="opacity: 0"
								geometry="primitive: plane; width: 1; height: 0.5"
								position="0 0 0.0003"
								width="1.05" 
								height="0.55"> 
						</a-entity>
    		</a-rounded>
		</a-entity>

		@endif

</a-entity>
