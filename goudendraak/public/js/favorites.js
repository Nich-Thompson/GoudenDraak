window.onload = function () {
    let list = document.getElementById('itemList')
    if (localStorage['favorites'] !== undefined && JSON.parse(localStorage['favorites']).length !== 0) {
        let items = JSON.parse(localStorage['favorites'])
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
            let newFavButton = document.createElement('button')
            newFavButton.classList = 'favorite-btn favorited'
            newFavButton.addEventListener('click', function () {
                newFavButton.classList.remove('favorited')
                //remove from session
                newContainer.parentNode.removeChild(newContainer)
                let favorites = localStorage['favorites']
                let totalFavorites = []
                if (favorites !== undefined) {
                    totalFavorites = JSON.parse(localStorage['favorites'])
                }
                let index = totalFavorites.map(function(e) { return e.id; }).indexOf(item.id);
                totalFavorites.splice(index, 1)
                localStorage['favorites'] = JSON.stringify(totalFavorites)
            })

            list.append(newContainer)
            newContainer.append(newRow)
            newRow.append(newDishDiv, newCol)
            newCol.append(newDescSpan, newInnerCol)
            newInnerCol.append(newPriceSpan, newOrderButton, newFavButton)
        })
    } else {
        let newDiv = document.createElement('div')
        newDiv.className = 'container p-1'

        let newSpan = document.createElement('span')
        newSpan.className = 'dish'
        newSpan.textContent = 'U heeft nog niks op uw favorieten staan.'

        list.append(newDiv)
        newDiv.append(newSpan)
    }
}
