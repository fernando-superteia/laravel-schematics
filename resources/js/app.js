import Vue from 'vue';
import Elements from './lib/Elements';
import Shortcuts from "./lib/Shortcuts";
import Schematics from './components/Schematics.vue';

window.EventBus = new Vue({});

Vue.mixin(Elements);
Vue.mixin(Shortcuts);

const App = new Vue({
    el: '#app',

    components: {
        'schematics': Schematics,
    },
});

export default App;