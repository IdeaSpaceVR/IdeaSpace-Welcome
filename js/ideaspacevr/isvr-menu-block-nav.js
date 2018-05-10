AFRAME.registerComponent('isvr-menu-block-nav', {


		schema: {
				show: { 
						type: 'string'
				},
				inactivecolor: {
						type: 'string'
				},
				activecolor: {
						type: 'string'
				}
		},

  
    init: function () {

				var self = this;
				var data = this.data;


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


/*				if (data.slideoutleft !== null) {
				data.slideoutleft.addEventListener('animationcomplete', function(e) {
console.log('her 1');
						if (e.detail.name == 'animation__slideoutleft') {
								data.slideoutleft.setAttribute('visible', false);	
						}
				});	
				}

				if (data.slideoutright !== null) {
				data.slideoutright.addEventListener('animationcomplete', function(e) {
console.log('her 2');
						if (e.detail.name == 'animation__slideoutright') {
								data.slideoutright.setAttribute('visible', false);
						}
				});
				}
*/

				var all = document.querySelectorAll('.nav-circle');

        this.el.addEventListener('click', function() {

						for (var i=0; i<all.length; i++) {
								all[i].setAttribute('color', data.inactivecolor);
						}

						self.el.setAttribute('color', data.activecolor);

						document.querySelector('#item-wrapper').emit('show_' + data.show);

				});
	
		}

});

