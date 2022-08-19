
document.getElementById("SignUpNews").addEventListener("click", addNewsletter)

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


async function addNewsletter() {

    const action = "add";
    
    let emailNewsletter = document.getElementById("floatingInputEmail").value
    let nameNewsletter = document.getElementById("floatingInputName").value

    if(!emailNewsletter) {
        alert("Fill in your email and name correctly to sign up for the newsletter")
        return
    }


    let newsletterToAdd = {
        email: emailNewsletter,
        name: nameNewsletter,
    }

    var body = new FormData()
    body.append("action", action)
    body.append("addNewsletter", JSON.stringify(newsletterToAdd))


    let postNewsletter = await makeRequest(`.././API/Receiver/newsletterReceiver.php`, "POST", body)
    console.log(postNewsletter)

    if(!postNewsletter == false) {
        alert("Woops! something went wrong when signing up for the newsletter!")
    }else {
        alert("You are now signed up for our Newsletter!")
        location.reload();
    }

} 
