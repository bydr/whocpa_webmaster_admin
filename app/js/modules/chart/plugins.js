const getOrCreateLegendList = (chart, legendContainer) => {
  console.log("legendContainer ", legendContainer)
  let listContainer = legendContainer.querySelector("ul")

  if (!listContainer) {
    listContainer = document.createElement("ul")
    listContainer.classList.add("chart-legend__list")

    legendContainer.appendChild(listContainer)
  }

  return listContainer
}

export const htmlLegendPlugin = {
  id: "htmlLegend",
  afterUpdate(chart, args, options) {
    const ul = getOrCreateLegendList(chart, options.containerID)

    // Remove old legend items
    while (ul.firstChild) {
      ul.firstChild.remove()
    }

    // Reuse the built-in legendItems generator
    const items = chart.options.plugins.legend.labels.generateLabels(chart)

    items.forEach((item) => {
      console.log("item ", item)

      const li = document.createElement("li")
      li.classList.add("chart-legend__item")
      if (!!item.hidden) {
        li.classList.add("is-hidden")
      } else {
        li.classList.remove("is-hidden")
      }

      li.onclick = () => {
        const { type } = chart.config
        if (type === "pie" || type === "doughnut") {
          // Pie and doughnut charts only have a single dataset and visibility is per item
          chart.toggleDataVisibility(item.index)
        } else {
          chart.setDatasetVisibility(
            item.datasetIndex,
            !chart.isDatasetVisible(item.datasetIndex),
          )
        }
        chart.update()
      }

      // Color box
      const boxSpan = document.createElement("span")
      boxSpan.classList.add("chart-legend__segment")
      boxSpan.style.backgroundColor =
        typeof item.fillStyle === "string" ? item.fillStyle : item.strokeStyle

      // Text
      const textContainer = document.createElement("p")
      textContainer.classList.add("chart-legend__name")

      const text = document.createTextNode(item.text)
      textContainer.appendChild(text)

      li.appendChild(boxSpan)
      li.appendChild(textContainer)
      ul.appendChild(li)
    })
  },
}
