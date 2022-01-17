<template>
  <div>
  <dl v-for="information in allInformations" :key="information" class="mt-3">
    <dt>{{ formatDate(new Date(information.created_at)) }}</dt>
    <dd class="ml-2">{{ information.information }}</dd>
  </dl>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import Axios from 'axios'

export default {
  setup() {
    const allInformations = ref([])

    // get all informations
    const getAllInformations = async () => {
      await Axios.get('/api/informations')
                 .then( response => {
                   allInformations.value = response.data
                 })
                 .catch( error => {
                   console.log(error.response.status)
                 })
    }

    // format date information created
    const formatDate = (date) => {
      let createdDate = date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate();

      return createdDate;
    }

    onMounted(() => {
      getAllInformations()
    })

    return {
      allInformations, formatDate
    }
  },
}
</script>
