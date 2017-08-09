import Parallax from 'parallax-js';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    require('../util/bg/three.min.js');
    require('../util/bg/projector.js');
    require('../util/bg/canvas-renderer.js');
    require('../util/bg/3d-lines-animation.js');
    require('../util/bg/color.js');

    var scene = $('#scene').get(0)

    new Parallax(scene)

    $(window).load(() => {
      setTimeout(() => {
        $('.logo-dk, .logo-development').addClass('loaded-elements');
        $('.logo-left, .logo-right').addClass('loaded-dashes');

        $('.canvas-info-content').addClass('pLoaded');
      }, 2000);
      setTimeout(() => {
        $('.logo-left, .logo-right').addClass('anim');
      }, 3000)

      $('.menuToggle, .menu-exit').click(() => {
        $('.menu').toggleClass('hidden');
      })
      setTimeout(() => {
        $('.homeContent').addClass('webloaded');
        $('.preloader').addClass('hide-preloader');
      }, 1000);
    })
  },
};
