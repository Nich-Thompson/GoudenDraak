window.onload = function () {
    // Load items currently on order
    let list = document.getElementById('itemList')
    if (sessionStorage['order'] !== undefined) {
        let items = JSON.parse(sessionStorage['order'])

        let totalPrice = 0
        items.forEach(item => {
            let newDiv = document.createElement('div')
            newDiv.className = 'container p-1'
            newDiv.id = item.id

            let newItemSpan = document.createElement('span')
            newItemSpan.className = 'dish'
            newItemSpan.textContent = item.name

            let newPriceSpan = document.createElement('span')
            newPriceSpan.className = 'price'
            newPriceSpan.textContent = '€ ' + item.price
            totalPrice += parseFloat(item.price.replace(',', '.'))

            let deleteButton = document.createElement('button')
            deleteButton.className = 'btn btn-danger'
            deleteButton.textContent = 'X'
            deleteButton.addEventListener('click', function () {
                newDiv.parentNode.removeChild(newDiv)
                let order = sessionStorage['order']
                let totalOrder = []
                if (order !== undefined) {
                    totalOrder = JSON.parse(sessionStorage['order'])
                }
                let index = totalOrder.indexOf(item)
                totalOrder.splice(index, 1)
                sessionStorage['order'] = JSON.stringify(totalOrder)

                setValue()
                setTotalPrice()
            })

            list.append(newDiv)
            newDiv.append(deleteButton, newItemSpan, newPriceSpan)
        })

        // Add zeroes to totalPrice if necessary
        totalPrice = totalPrice.toFixed(2)

        let newDivider = document.createElement('hr')

        let newPriceTextSpan = document.createElement('span')
        newPriceTextSpan.className = 'dish'
        newPriceTextSpan.textContent = 'Totaalprijs:'

        let newTotalPriceSpan = document.createElement('span')
        newTotalPriceSpan.id = 'totalPrice'
        newTotalPriceSpan.className = 'price'
        newTotalPriceSpan.textContent = '€ ' + totalPrice

        list.append(newDivider, newPriceTextSpan, newTotalPriceSpan)

        // Add method to button to clear order
        let finalizeButton = document.getElementById('finalizeButton')
        finalizeButton.addEventListener('click', function () {
            sessionStorage.removeItem('order')
        })

        setValue()
    } else {
        let newDiv = document.createElement('div')
        newDiv.className = 'container p-1'

        let newSpan = document.createElement('span')
        newSpan.className = 'dish'
        newSpan.textContent = 'U heeft nog niks op uw bestelling staan.'

        list.append(newDiv)
        newDiv.append(newSpan)

        let finalizeButton = document.getElementById('finalizeButton')
        finalizeButton.hidden = true
    }
}

function setValue() {
    // Set the value that is parsed to the controller
    let orderInput = document.getElementById('orderInput')
    orderInput.setAttribute('value', sessionStorage['order'])
}

function setTotalPrice() {
    let totalPrice = 0
    if (sessionStorage['order'] !== undefined) {
        let items = JSON.parse(sessionStorage['order'])

        items.forEach(item => {
            totalPrice += parseFloat(item.price.replace(',', '.'))
        })
    }
    totalPrice = totalPrice.toFixed(2)
    let totalPriceSpan = document.getElementById('totalPrice')
    totalPriceSpan.textContent = '€ ' + totalPrice
}
