AFRAME.registerSystem('isvr-scene-helper', {

    showCursor: function () {

    },

    hideCursor: function () {

    },

});

AFRAME.registerComponent('isvr-scene', {
  
    init: function () {

        if (!AFRAME.utils.device.checkHeadsetConnected()) {
            //document.querySelector('#no-hmd-intro').setAttribute('visible', true);
            //document.querySelector('#cursor').setAttribute('geometry', { radius: 0.04 });
        }

        this.el.addEventListener('enter-vr', function() {

						if (AFRAME.utils.device.checkHeadsetConnected()) {
                document.querySelector('#camera-wrapper').setAttribute('position', {x: 0, y: 0, z: 0});
            }


						var sceneEl = document.querySelector('a-scene');

						var lcLeftEl = document.createElement('a-entity');
						lcLeftEl.setAttribute('laser-controls', {hand: 'left'});
						lcLeftEl.setAttribute('raycaster', {objects: '.collidable', near: 0.5});
						lcLeftEl.setAttribute('line', {color: '#FFFFFF'});
						lcLeftEl.setAttribute('class', 'laser-controls');
						sceneEl.appendChild(lcLeftEl);

						var lcRightEl = document.createElement('a-entity');
						lcRightEl.setAttribute('laser-controls', {hand: 'right'});
						lcRightEl.setAttribute('raycaster', {objects: '.collidable', near: 0.5});
						lcRightEl.setAttribute('line', {color: '#FFFFFF'});
						lcRightEl.setAttribute('class', 'laser-controls');
						sceneEl.appendChild(lcRightEl);

            document.querySelector('a-scene').addState('entered-vr');

        });

        this.el.addEventListener('exit-vr', function() {

            location.reload();

        });

        /*var laser_controls = document.querySelectorAll('.laser-controls');

        for (var i = 0; i < laser_controls.length; i++) {

            laser_controls[i].addEventListener('controllerconnected', function (evt) {
                document.querySelector('a-scene').addState('controllerconnected');
                document.querySelector('a-scene').setAttribute('data-controllertype', evt.detail.name);
                document.querySelector('#cursor').setAttribute('visible', false);
            });

        }*/

				/* trigger custom events */
				var collidables = document.querySelectorAll('.collidable');
				for (var j = 0; j < collidables.length; j++) {

						collidables[j].addEventListener('mouseenter', function(e) {
								e.target.emit('isvr_mouseenter');
						});

						collidables[j].addEventListener('mouseleave', function(e) {
								e.target.emit('isvr_mouseleave');
						});
				}
    }

});

