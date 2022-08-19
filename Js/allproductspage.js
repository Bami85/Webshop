async function makeRequest(url, method, body) {
    try {
        let response = await fetch(url, {
            method,
            body
        })
        let result = await response.json();
        return result
    } catch(err) {
        console.error(err)
    }
}
    

async function getAllProducts() {
    const action = "getAll";

    let allProducts = await makeRequest(`.././API/Receiver/productReceiver.php?action=${action}`, "GET");
    
    for (let i = 0; i < allProducts.length; i++) {
        console.log(allProducts.length)
        let product = allProducts[i];
        
        const main = document.getElementsByTagName("span")[0];
        
        let colContainer = document.createElement("div")
        colContainer.classList.add('col')

        let childContainer = document.createElement("div")
        childContainer.classList.add('card', 'shadow-card')

        let childImgContainer = document.createElement("img")
        childImgContainer.classList.add('bd-placeholder-img', 'card-img-top')
        childImgContainer.src = "/productImages/" + product.image

        let childTextContainer = document.createElement("div")
        childTextContainer.classList.add("card-body")

        let childTitle = document.createElement("h3")
        childTitle.classList.add("card-text")
        childTitle.innerText = product.productName

        let childPriceContainer = document.createElement("div")
        childPriceContainer.classList.add('d-flex', 'justify-content-between', 'align-items-center')

        let childPrice = document.createElement("h5")
        childPrice.innerText = product.unitPrice + " :-"
 
        let childButtonContainer = document.createElement("div")
        childButtonContainer.classList.add("btn-group")

        let childButtonContainerAdd = document.createElement("button")
        childButtonContainerAdd.classList.add('btn', 'btn-sm', 'btn-outline-secondary')
        childButtonContainerAdd.innerText = "Add"

        
        main.append(colContainer, childContainer, childImgContainer, childTextContainer, childTitle, childPriceContainer, childPrice, childButtonContainer, childButtonContainerAdd)
          
    }
}
window.addEventListener("load", () => {
    getAllProducts()
})