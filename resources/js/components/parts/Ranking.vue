<template>
    <canvas id="chart" width="400" height="400" class="mt-5">
    </canvas>
</template>

<script>
import { ref, onMounted } from 'vue'
import Chart from 'chart.js/auto'
import Axios from 'axios'

export default {
  setup() {
    const allRankings = ref([])
    const userNames = ref([])
    const percentages = ref([])

    // get top 5 rankings
    const getAllRankings = async () => {
      await Axios.get('/api/rankings')
                 .then( response => {
                   console.log(response.data);
                   allRankings.value = response.data

                   userNames.value = createNames(allRankings.value)
                   percentages.value = createPercentages(allRankings.value)

                   renderChart(userNames.value, percentages.value)
                 })
                 .catch( error => {
                   console.log(error.response)
                 })
    }

    // create names
    const createNames = (names) => {
      let nameArr = [];
      for(let i = 0; i < names.length; i++){
        nameArr.push(names[i].user.name);
      }

      return nameArr;
    }

    // create percentages
    const createPercentages = (percentages) => {
      let percentageArr = [];
      for(let i = 0; i < percentages.length; i++){
        percentageArr.push(percentages[i].percentage_correct_answer);
      }

      return percentageArr;
    }

    const renderChart = (names, percentages) => {
      let ctx = document.getElementById("chart");
      new Chart(ctx, {
        type: 'bar',
        data:{
          labels: names,
          datasets: [{
            label: '最高得点率',
            data: percentages,
            backgroundColor: [
              'rgba(3, 136, 252, 0.5)',
            ],
            borderColor: [
              'rgba(3, 136, 252, 1)',
            ],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          scales: {
            yAxes: [{
              ticks: {
                min: 0,
                max: 100,
                stepSize: 10
              }
            }],
          },
          title: {
            display: true,
            text: '最高得点率'
          }
        }
      });
    }

  onMounted(() => {
    getAllRankings()
  })

  return {
  }

}
}
</script>
