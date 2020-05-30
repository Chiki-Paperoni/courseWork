window.onload = function() {
    var storage = window.sessionStorage.getItem("choosen")??[];
    var showBag = document.getElementById("shopbag");
    var bag = document.getElementById("shopbag-wrapper")
    var bagContent = document.querySelectorAll("#shopbag-wrapper .items")[0]
    var hideBag = document.getElementById("bag-back-link")
    var addToBag = document.getElementById("add-btn")
    var itemId =document.getElementById("itemID").innerText
    var totalSum = document.getElementById("totalcost")
    var currentSession;


    var newItem = {
        img : document.querySelectorAll(".info img")[0].getAttribute("src"),
        id  : itemId,
        c   : document.querySelectorAll(".type .caption")[0].innerText,
        s   : document.querySelectorAll(".type #collection")[0].innerText,
        price:this.parseInt(document.querySelectorAll(".type #price")[0].innerText.replace('$ ',''))
    }
    console.log(newItem.id)
    // console.log(this.JSON.stringify(newItem))

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
    addToBag.addEventListener("click",function(e) {

        if (!document.getElementById(`newItem${newItem.id}`)) {
            addToBag.setAttribute("style","display:none;")
            var newNode = htmlToElements(`<div class="item"  id="item${newItem.id}">
            <img src="${newItem.img}" alt="" srcset="">
            <div class="item-type">
                <span class="item-name">${newItem.c}</span>
                <span class="item-season">${newItem.s}</span>
            </div>
            <div class="item-price">$ <span>${newItem.price}<span></div>
            <div class="delete" id="${newItem.id}"></div>
        </div>`);
            var referenceNode = document.querySelector('#pointer');
            console.log(referenceNode)
            referenceNode.after(newNode[0]);

       totalSum.innerText = Number( totalSum.innerText.replace("\n",'')) + newItem.price
       if (storage.length != 0) {
            var currentSession = JSON.parse(storage);
            currentSession.push(newItem);
            window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
        } else {
            var currentSession = []
            currentSession.push(newItem)
            window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
        }  
        }
        var self = document.getElementById(newItem.id)
        self.addEventListener("click",function() {
            addToBag.setAttribute("style"," ")
            document.getElementById('item' + newItem.id).remove();
            var currentSession = JSON.parse(sessionStorage.getItem('choosen'))
            currentSession.forEach(function(e,index,array) {
                if(e.id = newItem.id) {
                    totalSum.innerText = Number(totalSum.innerText) - currentSession[index].price
                    currentSession.splice(index, 1)
                    
                    // window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
                } 
            })
            if (currentSession.length == 0) window.sessionStorage.setItem("choosen","")
        else window.sessionStorage.setItem("choosen",JSON.stringify(currentSession))
        })
      
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
document.getElementById("back-link").addEventListener("click",function() {
    history.back();
})


}
function htmlToElements(html) {
    var template = document.createElement('template');
    template.innerHTML = html;
    return template.content.childNodes;
}