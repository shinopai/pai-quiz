<template>
  <div>
    <section>
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="question-circle" />&nbsp;PaiQuizとは？</h2>
    <p class="mt-3">PaiQuizとはビジネスマナーから一般常識に至るまで様々なクイズを4択で出題するWEBアプリです。<br><br>
    何度もトライしてみて正解率100%を目指してみてください。</p>
    </section>
    <section class="mt-5">
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="book" />&nbsp;出題設定</h2>
    <ul class="mt-3 flex flex-wrap gap-2 lg:gap-3 items-center justify-start">
    <li v-for="category in allCategories" :key="category">
      <input type="checkbox" v-model="categories" :value="category.name" :id="category.name">
      <label :for="category.name">{{ category.name }}</label>
    </li>
    </ul>
    <span class="inline-block mt-3">
      全項目チェック
      <button class="bg-gray-200 px-2 py-1 rounded" @click="allCheck">ON</button>
      <button class="bg-gray-200 px-2 py-1 rounded ml-3" @click="allUncheck">OFF</button>
      </span>
      <router-link :to="{ name: 'quiz', query: { categories: categories } }"><button class="block mt-3 bg-blue-500 text-white px-2 py-1 rounded">出題開始</button></router-link>
    </section>
    <section class="mt-5">
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="chart-bar" />&nbsp;ランキング</h2>
    <Ranking />
    </section>
    <section class="mt-5">
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="newspaper" />&nbsp;お知らせ情報</h2>
    <Information />
    </section>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import Axios from 'axios'
import Ranking from './Ranking.vue'
import Information from './Information.vue'

export default {
  components: {
    Ranking, Information
  },
  setup() {
    const allCategories = ref([])
    const categories = ref([])

    // get all categories
    const getAllCategories = async () => {
      await Axios.get('/api/categories')
                .then( response => {
                  allCategories.value = response.data
                })
                .catch( error => {
                  console.log(error.data)
                })
    }

    // add checked to all checkboxes
    const allCheck = () => {
      const arr = []
      for(let i = 0; i < allCategories.value.length; i++){
        arr.push(allCategories.value[i].name)
      }
      categories.value = arr
    }

    // remove checked on all checkboxes
    const allUncheck = () => {
      categories.value = []
    }

    onMounted(() => {
      getAllCategories()
    })

    return {
      allCategories, categories, allCheck, allUncheck
    }
  },
}
</script>
