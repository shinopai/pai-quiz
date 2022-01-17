<template>
  <div>
    <section>
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="search" />&nbsp;【{{ initial }}】から始まるキーワード({{ keywords.length }}語)</h2>
      <dl v-for="keyword in keywords" :key="keyword" class="mt-3">
    <dt>{{ keyword.keyword }}(カテゴリー:&nbsp;{{ keyword.category.name }})</dt>
    <dd class="ml-2">{{ keyword.description }}</dd>
  </dl>
    </section>
  </div>
</template>

<script>
import { ref, toRefs, onMounted, watch } from 'vue'
import Axios from 'axios'
import { useRouter } from 'vue-router'

export default {
  props: {
    initial: {
      type: String,
      reuqired: true
    }
  },
  setup(props) {
    const router = useRouter()
    const keywords = ref([])
    const { initial } = toRefs(props)

    // get keywords
    const getKeywords = async () => {
      await Axios.get('/api/keywords', {
        params: {
          initial: props.initial
        }
      })
      .then( response => {
        initial.value = props.initial
        keywords.value = response.data
      })
      .catch( error => {
        console.log(error.response.status)
      })
    }

    onMounted(() => {
      getKeywords()
    })

    // watch if query initial is changed
    watch(initial, getKeywords)

    return {
      keywords, initial
    }
  },
}
</script>
