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
    


async function getAllCategories() {
    const action = "getAll";


    let getAllCategory = await makeRequest(`.././API/Receiver/categoryReceiver.php?action=${action}`, "GET");
    console.log(getAllCategory)

    for (let i = 0; i < getAllCategory.length; i++) {
        let categories = getAllCategory[i];

        const main = document.getElementsByTagName("main")[0];

        let colContainer = document.createElement("div")
        colContainer.classList.add('col')
        let childContainer = document.createElement("div")
        childContainer.classList.add('card', 'shadow-card')

        let a = document.createElement("a")

        let childImgContainer = document.createElement("img")
        childImgContainer.classList.add('bd-placeholder-img', 'card-img-top')
        childImgContainer.src = "/productImages/" + categories.categoryImg
        a.append(childImgContainer)

        let childTextContainer = document.createElement("div")
        childTextContainer.classList.add('card-body')

        let childTitle = document.createElement("h1")
        childTitle.classList.add('card-text')
        childTitle.innerHTML = categories.categoryName

        main.append(colContainer, childContainer, childTitle, a, childTextContainer)

        if(categories.ID == 1) {
            a.href = "/productWatches.php"
        }
        if(categories.ID == 2) {
            a.href = "/productIphones.php"
        }
        if(categories.ID == 3) {
            a.href = "/productMacbook.php"
        }
    }
}

async function getCategoryID(getByID) {
    const action = "getById";


    let renderCategoryById = await makeRequest(`./../API/Receiver/categoryReceiver.php?action=${action}&ID=${getByID}`, "GET");
    console.log(renderCategoryById)

    for (let i = 0; i < renderCategoryById.length; i++) {
        const element = renderCategoryById[i];
        console.log(element)
    }
}

window.addEventListener("load", () => {
    getAllCategories()
})