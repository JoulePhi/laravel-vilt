import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Translation } from './translations';
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faBars, faHeart, faBagShopping, faUser, faMagnifyingGlass, faStar, faChevronRight, faHouse, faGripVertical, faList, faGear, faAddressCard, faBoxArchive, faCreditCard, faArrowRightFromBracket} from '@fortawesome/free-solid-svg-icons'
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Vilt';
library.add(faBars, faHeart, faBagShopping, faUser, faMagnifyingGlass, faStar, faChevronRight, faHouse, faGripVertical, faList, faGear, faAddressCard, faBoxArchive, faCreditCard, faArrowRightFromBracket)
const app = createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Translation)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});


