<a-entity id="{{ $id }}" position="{{ $position }}" visible="{{ $visible }}">

		@if ($count == ($start_counter + 1))

		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 2))

		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 3))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 4))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 3)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>

		@elseif ($count == ($start_counter + 5))

		<!-- center, left //-->
		<a-entity
				position="-1.15 0 0.09"
				rotation="0 10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][$start_counter]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center //-->
		<a-entity
				position="0 0 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 1)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- center, right //-->
		<a-entity
				position="1.15 0 0.09"
				rotation="0 -10 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 2)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st top row, center //-->
		<a-entity
				position="0 0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 3)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>
		<!-- 1st bottom row, center //-->
		<a-entity
				position="0 -0.65 0"
				rotation="0 0 0"
				geometry="primitive: plane; width: 1; height: 0.5"
				material="shader: flat; src: url({{ $content['space-links'][($start_counter + 4)]['space-link-image']['space-link-image-resized']['#uri']['#value'] }})">
		</a-entity>

		@endif


		@if ($visible == 'false')
		<a-animation 
				begin="menu-block-slide-left"
				attribute="position"
        dur="2000"
        to="0 0 0">
		</a-animation>
		<a-animation 
				begin="menu-block-slide-right"
				attribute="position"
        dur="2000"
        to="{{ $position }}">
		</a-animation>
		@endif

</a-entity>
