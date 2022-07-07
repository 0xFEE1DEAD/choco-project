import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Maska from 'maska'
import lazyPlugin from 'vue3-lazy'
import {WebpMachine} from "webp-hero"

InertiaProgress.init()
const webpMachine = new WebpMachine()
webpMachine.polyfillDocument()

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(Maska)
      .use(lazyPlugin, {
        loading: '/img/loading.svg',
        error: '',
      })
      .mount(el)
  },
})