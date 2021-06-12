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

            list.append(newDiv)
            newDiv.append(newItemSpan, newPriceSpan)
        })

        // Add zeroes to totalPrice if necessary
        let cents = totalPrice.toString().split('.')[1]
        if (cents === undefined) {
            totalPrice = totalPrice + '.00'
        } else if (cents.length === 1) {
            totalPrice = totalPrice + '0'
        }

        let newDivider = document.createElement('hr')

        let newPriceTextSpan = document.createElement('span')
        newPriceTextSpan.className = 'dish'
        newPriceTextSpan.textContent = 'Totaalprijs:'

        let newTotalPriceSpan = document.createElement('span')
        newTotalPriceSpan.className = 'price'
        newTotalPriceSpan.textContent = '€ ' + totalPrice

        list.append(newDivider, newPriceTextSpan, newTotalPriceSpan)

        // Add method to button to clear order
        let finalizeButton = document.getElementById('finalizeButton')
        finalizeButton.addEventListener('click', function () {
            sessionStorage.removeItem('order')
        })

        let orderInput = document.getElementById('orderInput')
        orderInput.setAttribute('value', sessionStorage['order'])
        console.log(JSON.parse(sessionStorage['order']))
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
