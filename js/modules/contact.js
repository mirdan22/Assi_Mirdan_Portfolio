export function contact() {

    (() => {

        const form = document.querySelector("#contactForm");
        const feedBack = document.querySelector("#feedback");



        function regForm(event) {
            event.preventDefault();
            const url = "adduser.php";
            const thisform = event.currentTarget;
            const formdata =
                "fname=" + thisform.elements.fname.value +
                "&lname=" + thisform.elements.lname.value +
                "&email=" + thisform.elements.email.value +
                "&message=" + thisform.elements.message.value;

            fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: formdata
            })
                .then(response => response.json())
                .then(responseText => {
                    console.log(responseText);
                    feedBack.innerHTML = "";

                    if (responseText.errors) {
                        responseText.errors.forEach(error => {
                            const errorElement = document.createElement("p");
                            errorElement.textContent = error;
                            feedBack.appendChild(errorElement);
                        })
                    } else {
                        form.reset();
                        const messageElement = document.createElement("p");
                        messageElement.textContent = responseText.message;
                        feedBack.appendChild(messageElement);
                        main.style.removeProperty('transform');
                        received.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.log(error);
                    feedBack.innerHTML = "";
                    const messageElement = document.createElement("p");
                    messageElement.textContent = "Sorry, your devices does not support AJAX, you must be using an older browser";
                    feedBack.appendChild(messageElement);
                })
        }



    })();
}