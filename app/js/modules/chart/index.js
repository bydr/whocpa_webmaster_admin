import {
  ArcElement,
  BarController,
  BarElement,
  BubbleController,
  CategoryScale,
  Chart,
  Decimation,
  DoughnutController,
  Filler,
  Legend,
  LinearScale,
  LineController,
  LineElement,
  LogarithmicScale,
  PieController,
  PointElement,
  PolarAreaController,
  RadarController,
  RadialLinearScale,
  ScatterController,
  SubTitle,
  TimeScale,
  TimeSeriesScale,
  Title,
  Tooltip,
} from "chart.js"
import { htmlLegendPlugin } from "./plugins"
import ChartDataLables from "chartjs-plugin-datalabels"
import {
  _getRandomColor,
  _getTimesLabels,
  hexToRgbA,
  PALETTE_DEFAULT,
} from "./utils"

Chart.register([
  ArcElement,
  LineElement,
  BarElement,
  PointElement,
  BarController,
  BubbleController,
  DoughnutController,
  LineController,
  PieController,
  PolarAreaController,
  RadarController,
  ScatterController,
  CategoryScale,
  LinearScale,
  LogarithmicScale,
  RadialLinearScale,
  TimeScale,
  TimeSeriesScale,
  Decimation,
  Filler,
  Legend,
  Title,
  Tooltip,
  SubTitle,
  ChartDataLables,
])

const createChartPie = (
  ctx,
  labels = [],
  dataValues = [],
  legendContainer = null,
) => {
  console.log("createChartPie ", ctx)
  let data = {
    labels: labels,
    datasets: [
      {
        label: "My First Dataset",
        data: dataValues,
        backgroundColor: dataValues.map(
          (_, i) => PALETTE_DEFAULT[i] || _getRandomColor(),
        ),
        borderWidth: 0,
        clip: false,
        datalabels: {
          display: true,
          color: "#fff",
          font: {
            family: "jost, sans-serif",
            // size: window.innerWidth <= BREAKPOINT_XS ? 18 : 30,
            size: 16,
            weight: "bold",
          },
          offset: 0,
          formatter: function (value) {
            return `${value}%`
          },
        },
      },
    ],
  }
  let options = {
    rotation: 5 * Math.PI,
    layout: {
      padding: 0,
    },
    plugins: {
      htmlLegend: {
        // ID of the container to put the legend in
        containerID: legendContainer,
      },
      legend: {
        display: false,
      },
      tooltip: {
        callbacks: {
          label: function ({ label, formattedValue }) {
            return ` ${label}: ${formattedValue}%`
          },
        },
      },
    },
    animation: {
      duration: 2000,
      onProgress: function (animation) {
        // console.log('onProgress ', animation.currentStep, animation.numSteps);
      },
      onComplete: function (animation) {
        // console.log('onAnimationComplete ', animation);
        animation.chart.canvas.closest(".chart").classList.add("is-loaded")
      },
    },
    onResize: function (ctx, sizes) {},
  }
  const config = {
    type: "pie",
    data: data,
    options: options,
    plugins: [htmlLegendPlugin, ChartDataLables],
  }
  return new Chart(ctx, config)
}

const createChartLine = (
  ctx,
  labels = [],
  datasets = [],
  legendContainer = null,
) => {
  let data = {
    labels: labels,
    datasets: datasets.map((item, index) => {
      const color = PALETTE_DEFAULT[index] || _getRandomColor()
      const gradient = ctx.createLinearGradient(
        0,
        0,
        0,
        ctx.canvas.clientHeight - ctx.canvas.clientHeight * 0.2,
      )
      gradient.addColorStop(0, hexToRgbA(color, 0.7))
      gradient.addColorStop(1, hexToRgbA(color, 0))

      console.log("ctx ", ctx)

      return {
        borderWidth: 3,
        borderColor: color,
        fill: true,
        backgroundColor: gradient,
        tension: 0.4,
        pointStyle: "circle",
        datalabels: {
          display: false,
        },
        ...item,
      }
    }),
  }

  const options = {
    responsive: true,
    maintainAspectRatio: false,
    layout: {
      padding: 0,
    },
    interaction: {
      mode: "index",
      intersect: false,
    },
    plugins: {
      htmlLegend: {
        // ID of the container to put the legend in
        containerID: legendContainer,
      },
      legend: {
        display: false,
      },
    },
    scales: {
      x: {
        display: true,
        offset: true,
      },
      y: {
        display: true,
        offset: true,
      },
    },
    animation: {
      duration: 1000,
      onComplete: function (animation) {
        // console.log('onAnimationComplete ', animation);
        animation.chart.canvas.closest(".chart").classList.add("is-loaded")
      },
    },
  }

  const config = {
    type: "line",
    data: data,
    options: options,
    plugins: [htmlLegendPlugin],
  }
  return new Chart(ctx, config)
}

const chartPieInit = () => {
  const charts = [...document.querySelectorAll(".chart.chart_pie")]
  if (!charts.length) {
    return
  }

  charts.forEach((chart) => {
    const canvas = chart.querySelector("canvas")
    if (canvas) {
      const ctx = canvas.getContext("2d")

      createChartPie(
        ctx,
        ["Индонезия", "Таиланд", "Донецк"],
        [58.3, 20, 24],
        chart.querySelector(".chart-legend") || null,
      )
    }
  })
}

const chartLineInit = () => {
  const charts = [...document.querySelectorAll(".chart.chart_line")]
  if (!charts.length) {
    return
  }

  const labels = _getTimesLabels({
    step: 2,
  })

  const dataValues = [
    2200, 2400, 3500, 3000, 3250, 3490, 2500, 2400, 2900, 3000, 3250, 3490,
    3000,
  ]

  charts.forEach((chart) => {
    const canvas = chart.querySelector("canvas")
    if (canvas) {
      const ctx = canvas.getContext("2d")

      createChartLine(
        ctx,
        labels,
        [
          {
            label: "Сегодня",
            data: dataValues,
          },
          {
            label: "Вчера",
            data: dataValues.map((item) => item - item * 0.4),
          },
          {
            label: "Позавчера",
            data: dataValues.map((item) => item - item * 0.2),
          },
        ],
        chart.querySelector(".chart-legend") || null,
      )
    }
  })
}

document.addEventListener("DOMContentLoaded", () => {
  chartPieInit()
  chartLineInit()
})
