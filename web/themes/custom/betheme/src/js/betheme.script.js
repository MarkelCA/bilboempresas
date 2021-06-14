import 'popper.js';
import 'bootstrap';

(function () {

  'use strict';

      console.log('This works');

  Drupal.behaviors.helloWorld = {
    attach: function (context) {
      console.log('Hellooo World');

        ////$();
        //console.log(jQuery);
        ////jQuery.$();
        ////
        //jQuery();

    }
  };

})(jQuery, Drupal);



