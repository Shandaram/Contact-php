<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" ></script>
    <title>Laravel</title>

    <style>
        body {
            font-family: 'arial';
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .start {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width:50%;
            margin-bottom: 8vh;
            flex-wrap: nowrap;
        }

        svg {
            width:40vw;
            margin-bottom: 0;
            margin-top: 15vh;

        }
        .desc {
            color: dimgray;
            line-height: 1.6;
        }



       .person-input {
           position: relative;
            display: flex;
            align-items: center;
           justify-content: flex-end;
           text-align: right;
            width:40%;
           margin-bottom: 8vh;
           flex-wrap: wrap;

        }

        .user-input {
            border: 1px solid lightgray;
            border-radius: 20px;
            padding: 10px;
            width: 80%;
            font-size: 16px;

        }

        .user-input:hover {
            border: 1px solid white;
            -webkit-box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);
            -moz-box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);
            box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);
        }

        .submit {
            background-color: #f8f9fa;
            border: 1px solid #f8f9fa;
            border-radius: 4px;
            color: #3c4043;
            font-family: arial,sans-serif;
            font-size: 14px;
            padding-top:1%;
            padding-bottom: 1%;
            padding-left: 3%;
            padding-right: 3%;
            margin-top: 3vh;
            margin-left: 40%;
        }

     .submit:hover{
         border: 1px solid lightgray;
         -webkit-box-shadow: 0px 2px 16px -9px rgba(158,158,158,0.62);
         -moz-box-shadow: 0px 2px 16px -9px rgba(158,158,158,0.62);
         box-shadow: 0px 2px 16px -9px rgba(158,158,158,0.62);
     }

        .google-input {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            text-align: left;
            width:40%;
            height: 50px;
            margin-bottom: 8vh;
            flex-wrap: wrap;
        }


        .google-key {
           background-color: white;
            color: #3c4043;
           padding: 10px;
           width: 50%;
            border: 1px solid lightgray;
            border-radius: 20px;
            padding: 10px;
            /*-webkit-box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);*/
            /*-moz-box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);*/
            /*box-shadow: 0px 2px 16px -5px rgba(158,158,158,0.62);*/


       }

        .combined-keys {
            margin-bottom:2vh;
        }

        img {
            max-width: 50vw;
            margin-bottom: 5vh;
        }


        form {
            width: 75%;
            padding: 10px;
        }
.googleSays {
    margin-right: 50%;
    margin-bottom: 2vh;
    color: darkgray;
}
.personSays {
    margin-bottom: 2vh;
    color: darkgray;
}

.none {
    display:none;
}

        @media only screen and (max-width: 600px) {
            img {
                max-width: 90vw;
            }
            .start {

                width:90%;


            }
            .person-input {

                width:90%;

            }
            .user-input {

                width: 80%;

            }

           svg {
                width:70vw;

            }

            .google-input {

                width:100%;
                height: 40px;
            }


            .google-key {

                width: 60%;


            }

        }
    </style>
</head>

<body class="antialiased">
<div class="start">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255 86.41"><title>contact</title><text transform="translate(0 60.05)" style="font-size:70px;fill:#0099f7;font-family:Arial-BoldMT, Arial;font-weight:700;letter-spacing:-0.013999720982142857em">C<tspan x="49.57" y="0" style="fill:#ff5c42">o</tspan><tspan x="91.35" y="0" style="fill:#ffc926">n</tspan><tspan x="133.13" y="0">t</tspan><tspan x="155.46" y="0" style="fill:#00b562">a</tspan><tspan x="193.41" y="0" style="fill:#ff5c42">c</tspan><tspan x="231.36" y="0">t</tspan></text></svg>
    <div class="desc">
        Isn't our creative thinking just a big accepted archive of association? Could we let machines in on the secret? This is a game where you can play with Google algorithm consuming and spitting out definitions, constantly identifying 'what is on the picture?'. It is a multilayered process, hard to fully disclose. But you can try to guess what a machine might say, what it might have been told and reach contact with it by answering 'What do you see?' and matching responses. <br><br>

        When you do not match, it will combine your answers and search again, creating a trail of associations.
    </div>



</div>

<div class="person-input" style="justify-content: center; text-align: center;" id="username" >
    <form >
        <input type="text" class="user-input" id="username" name="fname" placeholder="What is your name?">
        <br><br>
        <input type="submit" class="submit" style="margin-left:0; align-items: center;" value="Start" id="username-submit">
    </form>

</div>

<div class="person-input none" id="url-submit">
    <form  action="/action_page.php">

        <input type="text" class="user-input" id="fname" name="fname" placeholder="To start the dialogue put your picture-URL here!">
        <br><br>
        <input type="submit" class="submit" style="margin-top: 0;" value="Send" id="submit">
    </form>

</div>



{{--<div class="person-input">--}}
{{--    <form class="person" action="/action_page.php">--}}

{{--        <input type="text"  name="fname"><br><br>--}}
{{--        <input type="submit" value="Submit" >--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div class="google-input">--}}

{{--<div class="google-key">--}}
{{--    Mountains nice--}}
{{--</div>--}}

{{--</div>--}}
{{--<div class="combined-keys">--}}
{{--   MOUNTAINS MOuntains--}}
{{--</div>--}}



</body>

<script>
    const submitButton = document.querySelector("#submit");
    const inputField = document.querySelector("#fname");

    const usernameButton = document.querySelector("#username-submit");
    const usernameField = document.querySelector("#username");

    let currentInput;
    let currentHiddenInput;
    let currentKeywords;
    let username;


    usernameButton.addEventListener("click", (e) => {
        e.preventDefault();
        usernameButton.disabled = true;
        usernameField.value="Ksenia";
        username = usernameField.value;
        console.log(username);
        const firstSubmit = document.querySelector("#url-submit");
        firstSubmit.classList.remove("none");



    });

    submitButton.addEventListener("click", (e) => {
        e.preventDefault();
        submitButton.disabled = true;
        submitButton.value = "Loading...";
        console.log(inputField.value);
        const img = document.createElement("img");
        img.src = inputField.value;
        document.body.appendChild(img);
        getKeywards(inputField.value);
        const firstSubmit = document.querySelector("#url-submit");
        firstSubmit.className ="none";
    });

    const getKeywards = function(imageUrl) {

        axios.get("/getkeyword?url=" + inputField.value).then((response) => {
            const keywords = response.data;
            submitButton.disabled = false;
            submitButton.value = "Submit";

            let keywordResults = makeKeywordResult(keywords);
            let newPrompt = makeForm(keywords, keywordResults);

            document.body.append(newPrompt);

        })
    }



    const makeKeywordResult = function(keywords) {
        let keywordResultsContainer = document.createElement('div');
        keywordResultsContainer.className ="google-input";

        let googleSays = document.createElement('div');
        googleSays.innerHTML = "Google says that is:";
        googleSays.className ="googleSays";

        let keywordResultsBubble = document.createElement('div');
        keywordResultsBubble.className = "google-key";
        keywordResultsBubble.append(keywords);

        keywordResultsContainer.appendChild(googleSays);
        keywordResultsContainer.appendChild(keywordResultsBubble);

        return keywordResultsContainer;
    }

    const makeForm = function(keywords, keywordResult) {


        let userPrompt = document.createElement('div');
        let userInput = document.createElement('input');
        let hiddenFieldResult = document.createElement('input');
        hiddenFieldResult.setAttribute("type", "hidden");
        hiddenFieldResult.setAttribute("name", "googleResponse");
        hiddenFieldResult.setAttribute("value", keywords);
        currentInput = userInput;
        currentHiddenInput = hiddenFieldResult;
        userInput.setAttribute("name", "userInput");
        userInput.placeholder = "What is on the picture?";
        let userSubmitButton = document.createElement("button");
        userSubmitButton.setAttribute('content', 'Send');
        userSubmitButton.textContent = 'Send';
        userSubmitButton.className ="submit";
        let personSays = document.createElement('div');
        personSays.innerHTML = username +" " + "thinks that is:";
        personSays.className ="personSays";

        userSubmitButton.addEventListener("click", function(e) {
            e.preventDefault();
            currentKeywords = currentHiddenInput.value + " " + currentInput.value;
            document.body.append(keywordResult);
            document.body.append(currentKeywords);

            searchKeywordsAndGetImage();
        });

        userPrompt.append(hiddenFieldResult);
        userPrompt.append(personSays);
        userPrompt.append(userInput);
        userPrompt.append(userSubmitButton);
        userPrompt.className = "person-input";
        userInput.className ="user-input";


        return userPrompt;
    }

    const searchKeywordsAndGetImage = function() {


        axios.get("/getimage?keywords=" + currentKeywords).then((response) => {
            let foundImage = document.createElement("img");
            foundImage.setAttribute("src", response.data);

            axios.post("/getkeywordsfrombase64", response.data);
            document.body.append(foundImage);
            document.body.append(makeForm(currentKeywords));


        })
    }
</script>
</html>
