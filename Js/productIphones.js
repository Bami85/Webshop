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


async function ByCategory() {
    const action = "getProductByCategory";

    let getProductByCategory = await makeRequest(`.././API/Receiver/categorydetailsReceiver.php?action=${action}`, "GET");
    console.log(getProductByCategory)


    for (let i = 0; i < getProductByCategory.length; i++) {
        let category = getProductByCategory[i];
        if(category.categoryID == 2) {

        const main = document.getElementsByTagName("span")[0];
        
        let colContainer = document.createElement("div")
        colContainer.classList.add('col')

        let childContainer = document.createElement("div")
        childContainer.classList.add('card', 'shadow-card')

        let childImgContainer = document.createElement("img")
        childImgContainer.classList.add('bd-placeholder-img', 'card-img-top')
        childImgContainer.src = "/productImages/" + category.image

        let childTextContainer = document.createElement("div")
        childTextContainer.classList.add("card-body")

        let childTitle = document.createElement("h3")
        childTitle.classList.add("card-text")
        childTitle.innerText = category.categoryName

        let childPriceContainer = document.createElement("div")
        childPriceContainer.classList.add('d-flex', 'justify-content-between', 'align-items-center')

 
        let childButtonContainer = document.createElement("div")
        childButtonContainer.classList.add("btn-group")

        let childButtonContainerAdd = document.createElement("button")
        childButtonContainerAdd.classList.add('btn', 'btn-sm', 'btn-outline-secondary')
        childButtonContainerAdd.innerText = "Add"


        main.append(colContainer, childContainer, childImgContainer, childTextContainer, childTitle, childPriceContainer, childButtonContainer, childButtonContainerAdd)
    }
    }
}

window.addEventListener("load", () => {
    ByCategory()
})