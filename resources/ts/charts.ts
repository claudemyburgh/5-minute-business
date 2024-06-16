import colors from "tailwindcss/colors"
import { Chart } from "chart.js/auto"

const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000]

new Chart("myChart", {
  type: "line",

  data: {
    labels: xValues,
    datasets: [
      {
        data: [13, 34, 15, 16, 50, 18, 19, 12, 2, 20],
        borderColor: colors.amber["600"],
        backgroundColor: "rgb(249, 146, 60, 0.15)",
        fill: true,
        borderCapStyle: "butt",
        tension: 0.5,
      },
    ],
  },
  options: {
    responsive: true,
    animation: {
      duration: 1750,
    },
    scales: {
      x: {
        border: {
          display: false,
        },
        ticks: {
          display: false,
        },
        grid: {
          display: false,

          // drawOnChartArea: false,
        },
      },
      y: {
        border: {
          display: false,
        },
        ticks: {
          display: false,
        },
        grid: {
          display: false,
          // drawOnChartArea: false,
        },
      },
    },
    // aspectRatio: 2.25,
    plugins: {
      legend: {
        display: false,
      },
    },
  },
})
