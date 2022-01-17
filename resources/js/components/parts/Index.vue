<template>
  <div id="container" class="lg:flex lg:flex-col">
    <div id="main" class="flex flex-col lg:flex-row flex-grow">
        <div class="p-4 lg:w-3/5">
            <router-view></router-view>
        </div>
        <div class="p-4 lg:w-2/5">
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
