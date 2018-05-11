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


				/* initial state */
				if (this.el.getAttribute('color') == data.activecolor) {
						this.el.addState('active');
				} 


				this.el.addEventListener('mouseenter', function(evt) {

						self.el.setAttribute('color', data.activecolor);
        });

        this.el.addEventListener('mouseleave', function() {

						if (!self.el.is('active')) {
								self.el.setAttribute('color', data.inactivecolor);
						}
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

						var activeEl = null;

						if (self.el.is('active')) {
								return;
						}

						for (var i=0; i<all.length; i++) {
								if (all[i].is('active')) {
										activeEl = all[i];
								}
								all[i].setAttribute('color', data.inactivecolor);
								all[i].removeState('active');
						}

						self.el.setAttribute('color', data.activecolor);
						self.el.addState('active');

						var next_number = data.show.slice(-1);
						var current_number = activeEl.getAttribute('isvr-menu-block-nav').show.slice(-1);

						document.querySelector('#item-wrapper').emit('from_' + current_number + '_to_' + next_number);

				});
	
		}

});

