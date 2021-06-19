window.onload = function () {
    let list = document.getElementById('itemList')
    if (getCookie('favorites') !== undefined && JSON.parse(getCookie('favorites')).length !== 0) {
        let items = JSON.parse(getCookie('favorites'))
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
            newOrderButton.addEventListener('click', function () {
                let order = sessionStorage['order']
                let totalOrder = []
                if (order !== undefined) {
                    totalOrder = JSON.parse(sessionStorage['order'])
                }
                totalOrder.push(item)
                sessionStorage['order'] = JSON.stringify(totalOrder)
            })
            let newFavButton = document.createElement('button')
            newFavButton.classList = 'favorite-btn favorited'
            newFavButton.addEventListener('click', function () {
                newFavButton.classList.remove('favorited')
                //remove from session
                newContainer.parentNode.removeChild(newContainer)
                let favorites = getCookie('favorites')
                let totalFavorites = []
                if (favorites !== '') {
                    totalFavorites = JSON.parse(getCookie('favorites'))
                }
                let index = totalFavorites.map(function (e) {
                    return e.id;
                }).indexOf(item.id);
                totalFavorites.splice(index, 1)
                createCookie('favorites', JSON.stringify(totalFavorites), 10)
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

function createCookie(name, value, days) {
    let expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        let c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            let c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return decodeURI(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
