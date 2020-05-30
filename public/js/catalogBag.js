window.onload = function() {
    var storage = window.sessionStorage.getItem("choosen")??[];
    var showBag = document.getElementById("shopbag");
    var bag = document.getElementById("shopbag-wrapper")
    var bagContent = document.querySelectorAll("#shopbag-wrapper .items")[0]
    var hideBag = document.getElementById("bag-back-link")
    var totalSum = document.getElementById("totalcost")
    var currentSession;

    if (storage.length != 0) {
        currentSession = JSON.parse(storage);
        var sum = 0;
        currentSession.forEach(function(e,index,array) {
            
            sum += e.price;
            bagContent.innerHTML = bagContent.innerHTML + `
                <div class="item" id="item${e.id}">
                <img src="${e.img}" alt="" srcset="">
                <div class="item-type">
                    <span class="item-name">${e.c}</span>
                    <span class="item-season">${e.s}</span>
                </div>
                <div class="item-price">$ <span>${e.price}<span></div>
                <div class="delete" id="${e.id}"></div>
            </div>`
        })
        totalSum.innerText = sum;
    } 

    showBag.addEventListener("click",function() {
        bag.setAttribute("style","display:flex !important;")
    })
    hideBag.addEventListener("click",function() {
        bag.setAttribute("style","display:none")
    })


document.querySelectorAll(".item .delete").forEach(function(e,index,array) {
    e.addEventListener("click",function() {
        var id = e.getAttribute('id');
        document.getElementById('item' + id).remove();
        var currentSession = JSON.parse(sessionStorage.getItem('choosen'))
        currentSession.forEach(function(e,index,array) {
            if(e.id = id) {
                totalSum.innerText = Number(totalSum.innerText) - currentSession[index].price
                currentSession.splice(index, 1)
                // window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
            } 
        })
        if (currentSession.length == 0) window.sessionStorage.setItem("choosen","")
    else window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
    })
    
})


}
