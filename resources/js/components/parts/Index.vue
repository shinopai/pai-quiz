<template>
  <div id="container" className="flex flex-col">
    <div id="main" className="flex flex-col md:flex-row flex-grow">
        <div className="p-4 w-3/5">
            <router-view></router-view>
        </div>
        <div className="p-4 w-2/5">
            <Sidebar />
        </div>
    </div>
</div>
</template>

<script>
import Sidebar from './Sidebar.vue'

export default {
  components: {
    Sidebar
  },
  setup() {

  },
}
</script>
