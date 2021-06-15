window.onload = function () {
    let list = document.getElementById('itemList')
    if (sessionStorage['order'] !== undefined) {
        let items = JSON.parse(sessionStorage['order'])
        items.forEach(item => {
            let newContainer = document.createElement('div')
            newContainer.className = 'container p-1'

            let newRow = document.createElement('div')
            newRow.className = 'row mb-3'

            let newDishDiv = document.createElement('div')
            newDishDiv.className = 'dish-name'
            newDishDiv.id = item.id
            newDishDiv.textContent = item.number + item.number_addition + '. ' + item.name
            let newCol = document.createElement('div')
            newCol.className = 'col'

            let newDescSpan = document.createElement('span')
            newDescSpan.className = 'description col-12'
            newDescSpan.textContent = item.description
            let newInnerCol = document.createElement('div')
            newInnerCol.className = 'col-12'

            let newPriceSpan = document.createElement('span')
            newPriceSpan.className = 'dish-price'
            newPriceSpan.textContent = '€ ' + item.price
            let newOrderButton = document.createElement('button')
            newOrderButton.className = 'btn btn-primary text-light order-btn'
            newOrderButton.textContent = 'Bestel'

            list.append(newContainer)
            newContainer.append(newRow)
            newRow.append(newDishDiv, newCol)
            newCol.append(newDescSpan, newInnerCol)
            newInnerCol.append(newPriceSpan, newOrderButton)
        })
    }
}
