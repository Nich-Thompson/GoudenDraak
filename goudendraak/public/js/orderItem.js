window.onload = function () {
    let dishes = document.getElementsByClassName('dish')
    let dishButtons = document.getElementsByClassName('float-right btn btn-primary text-light')

    for (let i = 0; i < dishes.length; i++) {
        dishButtons[i].addEventListener('click', function () {
            addToOrder(dishes[i].id)
        })
    }
}

function addToOrder(dishId) {
    console.log(dishId)
    let order = sessionStorage['order']
    if (order === null) {
        console.log(1)
        sessionStorage['order'] = 'swa'
    }
    else {
        console.log(2)
    }
}
