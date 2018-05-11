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

						if (self.el.is('active')) {
								return;
						}

						for (var i=0; i<all.length; i++) {
								all[i].setAttribute('color', data.inactivecolor);
								all[i].removeState('active');
						}

						self.el.setAttribute('color', data.activecolor);

						self.el.addState('active');

						document.querySelector('#item-wrapper').emit('show_' + data.show);

				});
	
		}

});

