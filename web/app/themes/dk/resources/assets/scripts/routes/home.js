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
  },
};
