<template>
    <div class="fixed top-0 left-0 bg-gray-600 w-screen h-screen">
    <canvas id="chart" class="absolute right-0 left-0 m-auto mt-24 bg-white p-5" width="400" height="400">
    </canvas>
    <span class="absolute right-0 left-0 top-10 block w-24 m-auto font-bold text-white">正答率:&nbsp;{{ percentage }}%</span>
    <button class="absolute right-0 left-0 bottom-5 ml-2 lg:m-auto px-2 py-2 mt-5 rounded-lg font-bold bg-blue-500 text-white cursor-pointer" @click="quizDone">終了する</button>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import Chart from 'chart.js/auto'
import Axios from 'axios';
import { useRouter } from 'vue-router'

export default {
  props: {
    correctCount: Number
  },
  setup(props) {
    let percentage = ref(props.correctCount / 10 * 100)
    const currentUserId = ref()
    const router = useRouter()

    const renderChart = () => {
      let ctx = document.getElementById("chart");
      ctx.width = '350';
      ctx.height = '350';
      new Chart(ctx, {
        type: 'pie',
        data:{
          labels: ["正解", "不正解"],
          datasets: [{
            label: '得票数',
            data: [props.correctCount, 10 - props.correctCount],
            backgroundColor: [
              'rgba(3, 136, 252, 0.5)',
              'rgba(252, 3, 98, 0.5)',
            ],
            borderColor: [
              'rgba(3, 136, 252, 1)',
              'rgba(252, 3, 98, 1)',
            ],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    }

    // get current user id
    const getCurrentUserId = async () => {
      await Axios.get('/api/user')
                 .then( response => {
                   console.log(response.data)
                   currentUserId.value = response.data
                 })
                 .catch( error => {
                   console.log(error.status)
                 })
    }

    // make quiz over then go to top
    const quizDone = async () => {
      await Axios.post('/api/rankings/' + currentUserId.value, {
        percentage_correct_answer: percentage.value,
        user_id: currentUserId.value
                })
                .then( response => {
                  router.push('/')
                })
                .catch( error => {
                  console.log(percentage.value);
                  console.log(error.data)
                })
    }

  onMounted(() => {
    getCurrentUserId()
    renderChart()
  })

  return {
     percentage, quizDone
  }

}
}
</script>
