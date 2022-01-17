import {
    createApp
} from 'vue'
import router from './router'
import App from './components/App'
import {
    library
} from '@fortawesome/fontawesome-svg-core'
import {
    faQuestionCircle,
    faBook,
    faChartBar,
    faNewspaper,
    faSearch
} from '@fortawesome/free-solid-svg-icons'
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'

library.add(faQuestionCircle, faBook, faChartBar, faNewspaper, faSearch)

const app = createApp(App)
app.component('fa', FontAwesomeIcon)
app.use(router)
app.mount('#pai-quiz')
