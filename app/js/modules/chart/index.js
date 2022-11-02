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
import { _getRandomColor, _tranparentizeRgbA, PALETTE_DEFAULT } from "./utils"

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
  let data = {
    labels: labels,
    datasets: [
      {
        label: "ChartPie",
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

const getCustomDatasets = (datasets, ctx) => {
  return datasets.map((item, index) => {
    const color = PALETTE_DEFAULT[index] || _getRandomColor()
    const gradient = ctx.createLinearGradient(
      0,
      0,
      0,
      ctx.canvas.clientHeight - ctx.canvas.clientHeight * 0.2,
    )

    gradient.addColorStop(0, _tranparentizeRgbA(color, 0.7))
    gradient.addColorStop(1, _tranparentizeRgbA(color, 0))

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
  })
}

const createChartLine = (
  ctx,
  labels = [],
  datasets = [],
  legendContainer = null,
) => {
  let data = {
    labels: labels,
    datasets: getCustomDatasets(datasets, ctx),
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

      const values = [
        ...(chart.querySelector(`[name="values"]`)?.options || []),
      ].map((option) => option.value)
      const labels = [
        ...(chart.querySelector(`[name="labels"]`)?.options || []),
      ].map((option) => option.value)

      createChartPie(
        ctx,
        labels,
        values,
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

  const filterInit = (chartElement, chart) => {
    let datasets = []

    const datasetItems = [...chartElement.querySelectorAll("[data-set]")]
    const filters = [...chartElement.querySelectorAll("[data-filter]")]

    const getDataSetsByFilter = (filterName, filterVal) => {
      return datasetItems
        .filter((set) =>
          filterName !== undefined && filterVal !== undefined
            ? set.dataset[filterName] === filterVal
            : true,
        )
        .map((item) => {
          return {
            label: item.querySelector(`[data-label]`)?.value || "",
            data: [...(item.querySelector(`[data-values]`)?.options || [])].map(
              (option) => option.value,
            ),
          }
        })
    }

    const updateChartDataset = (datasets, chart) => {
      chart.data.datasets = getCustomDatasets(datasets, chart.ctx)
      chart.update()
    }

    if (filters.length > 0) {
      for (const filter of filters) {
        const filterName = filter.getAttribute("data-filter")
        datasets = getDataSetsByFilter(filterName, filter.value)
        updateChartDataset(datasets, chart)

        filter.addEventListener("change", (e) => {
          datasets = getDataSetsByFilter(filterName, e.target.value)
          updateChartDataset(datasets, chart)
        })
      }
    } else {
      datasets = getDataSetsByFilter()
      updateChartDataset(datasets, chart)
    }

    return datasets
  }

  charts.forEach((chart) => {
    const canvas = chart.querySelector("canvas")
    if (canvas) {
      const ctx = canvas.getContext("2d")

      const labels = [
        ...(chart.querySelector(`[name="labels"]`)?.options || []),
      ].map((option) => option.value)

      let datasets = []

      const chartLine = createChartLine(
        ctx,
        labels,
        datasets,
        chart.querySelector(".chart-legend") || null,
      )

      filterInit(chart, chartLine)
    }
  })
}

document.addEventListener("DOMContentLoaded", () => {
  chartPieInit()
  chartLineInit()
})
