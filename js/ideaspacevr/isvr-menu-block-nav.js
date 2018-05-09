AFRAME.registerComponent('isvr-menu-block-nav', {


		schema: {
				type: 'selector'
		},

  
    init: function () {

				this.el.addEventListener('mouseenter', function(evt) {

						//evt.target.setAttribute('mixin', 'menu-block-nav-hover');
            /*if (this.getAttribute('data-content-id') == document.querySelector('#photosphere').getAttribute('data-content-id')) {

                self.el.sceneEl.systems['isvr-scene-helper'].showCursor();
            }*/

        });

        this.el.addEventListener('mouseleave', function() {

            /*if (this.getAttribute('data-content-id') == document.querySelector('#photosphere').getAttribute('data-content-id')) {

                self.el.sceneEl.systems['isvr-scene-helper'].hideCursor();
            }*/

        });

        this.el.addEventListener('click', function() {

console.log('click');
						this.data.emit('menu-block-slide-left');	
						//wait for animationend
						this.data.setAttribute('visible', true);
				});
	
		}

});

