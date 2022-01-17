<template>
  <div>
    <section>
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="question-circle" />&nbsp;第{{ currentQuizNum + 1 }}問</h2>
    <template v-if="allQuizzes[currentQuizNum]">
    <p class="mt-3">{{ allQuizzes[currentQuizNum].title }}</p>
    <ul class="mt-3 bg-indigo-100 p-4">
      <li>
            <label
              for="answer1"
              class="px-2 py-1 rounded-lg flex justify-start items-center font-bold w-56 h-full bg-yellow-100 cursor-pointer"
            >
        <input
              v-model="answer"
              type="radio"
              id="answer1"
              hidden="hidden"
              value="1"
              @change="checkAnswer"
            />
              1. {{ allQuizzes[currentQuizNum].answer.answer1 }}
            </label>
      </li>
      <li class="mt-3">
            <label
              for="answer2"
              class="px-2 py-1 rounded-lg flex justify-start items-center font-bold w-56 h-full bg-yellow-100 cursor-pointer"
            >
        <input
              v-model="answer"
              type="radio"
              id="answer2"
              hidden="hidden"
              value="2"
              @change="checkAnswer"
            />
              2. {{ allQuizzes[currentQuizNum].answer.answer2 }}
            </label>
      </li>
      <li class="mt-3">
            <label
              for="answer3"
              class="px-2 py-1 rounded-lg flex justify-start items-center font-bold w-56 h-full bg-yellow-100 cursor-pointer"
            >
        <input
              v-model="answer"
              type="radio"
              id="answer3"
              hidden="hidden"
              value="3"
              @change="checkAnswer"
            />
              3. {{ allQuizzes[currentQuizNum].answer.answer3 }}
            </label>
      </li>
      <li class="mt-3">
            <label
              for="answer4"
              class="px-2 py-1 rounded-lg flex justify-start items-center font-bold w-56 h-full bg-yellow-100 cursor-pointer"
            >
        <input
              v-model="answer"
              type="radio"
              id="answer4"
              hidden="hidden"
              value="4"
              @change="checkAnswer"
            />
              4. {{ allQuizzes[currentQuizNum].answer.answer4 }}
            </label>
      </li>
    </ul>
    <span class="block text-right mt-3">カテゴリー:&nbsp;{{ allQuizzes[currentQuizNum].category.name }}</span>
    </template>
    </section>
    <section class="mt-5">
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="question-circle" />&nbsp;正解</h2>
        <template v-if="allQuizzes[currentQuizNum]">
    <span v-if="isAnswered" class="bg-yellow-100 font-bold py-2 px-4 rounded inline-block mt-3">
      {{ allQuizzes[currentQuizNum].answer.correct_answer_no }}
    </span>
    <p v-if="isAnswered" class="font-bold p-2 mt-3" :class="isCorrect ? correctClass : wrongClass">{{ resultMessage }}</p>
        </template>
    </section>
    <section class="mt-5">
    <h2 class="text-xl border-b-2 border-gray-500 pb-3"><fa icon="question-circle" />&nbsp;解説</h2>
        <template v-if="allQuizzes[currentQuizNum]">
    <p v-if="isAnswered" class="mt-3">{{ allQuizzes[currentQuizNum].answer.commentary }}</p>
        </template>
    </section>
    <button v-if="isAnswered && !isFinished" class="px-2 py-2 mt-5 rounded-lg font-bold bg-indigo-500 text-white cursor-pointer" @click="goNext">次の問題へ</button>
    <button v-if="isFinished" class="px-2 py-2 mt-5 rounded-lg font-bold bg-red-500 text-white cursor-pointer" @click="goResult">結果を見る</button>
    <template v-if="resultActive">
  <Chart :correctCount="correctCount"/>
    </template>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import Axios from 'axios'
import { useRoute } from 'vue-router'
import Chart from './Chart.vue'

export default {
  components: {
    Chart
  },
  setup() {
    const route = useRoute()
    const allQuizzes = ref([])
    const correctClass = ref('bg-green-300 text-green-500')
    const wrongClass = ref('bg-red-300 text-red-500')
    let currentQuizNum = ref(0)
    let answer = ref('')
    let resultMessage = ref('')
    let isAnswered = ref(false)
    let isFinished = ref(false)
    let resultActive = ref(false)
    let correctCount = ref(0)
    let isCorrect = ref(Boolean)

    // get quizzes limit 10
    const getQuizzes = async () => {
      await Axios.get('/api/quizzes', {
        params: {
          categories: route.query.categories
        }
      })
      .then( response => {
        allQuizzes.value = response.data
      })
      .catch( error => {
        console.log(error)
      })
    }

    // check answer
    const checkAnswer = () => {
      if(isAnswered.value == true){
        return
      }

      if(currentQuizNum.value == 9){
        isFinished.value = true
      }

      isAnswered.value = true
      console.log(answer.value);
      console.log(allQuizzes.value[currentQuizNum.value].answer.correct_answer_no == answer.value);

      if(allQuizzes.value[currentQuizNum.value].answer.correct_answer_no == answer.value){
        resultMessage.value = '正解!'
        isCorrect.value = true
        correctCount.value += 1
      }else{
        resultMessage.value = '不正解..'
        isCorrect.value = false
      }
    }

    // go to next quiz
    const goNext = () => {
      isAnswered.value = false
      resultMessage.value = ''
      answer.value = ''
      currentQuizNum.value += 1
      window.scroll({top: 200, behavior: 'instant'})
    }

    // go to see your percentage_correct_answer
    const goResult = () => {
      resultActive.value = true
    }

    onMounted(() => {
      getQuizzes()
    })

    return {
      allQuizzes, currentQuizNum, answer, resultMessage, isAnswered, isFinished, checkAnswer, isCorrect, correctClass, wrongClass, goNext, goResult, correctCount, resultActive
    }
  },
}
</script>
