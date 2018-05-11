AFRAME.registerComponent('isvr-menu-block-nav-back', {


		schema: {
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
				var all = document.querySelectorAll('.nav-circle');


				this.el.addEventListener('mouseenter', function(evt) {

						if (!all[0].is('active')) {
								self.el.setAttribute('color', data.activecolor);
						}
        });


        this.el.addEventListener('mouseleave', function() {

						self.el.setAttribute('color', data.inactivecolor);
        });


				var j = 0;

        this.el.addEventListener('click', function() {

						if (all[0].is('active')) {
								return;
						}

            for (var i=(all.length - 1); i>=0; i--) {
								if (all[i].is('active')) {
										all[i].removeState('active');
										all[i].setAttribute('color', data.inactivecolor);
										j = i;
										j--;
								}
						}

						while (j >= 0) {
								document.querySelector('#item-wrapper').emit('show_menu_block_' + j);
								all[j].setAttribute('color', data.activecolor);
								all[j].addState('active');
								return;
            }

				});
	
		}

});

