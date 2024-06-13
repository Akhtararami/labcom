<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla:EDPT,EHLT@0..200,0..24&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
    />
    <script src="https://kit.fontawesome.com/88053bf5de.js" crossorigin="anonymous"></script>
    <link>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nabla:EDPT,EHLT@0..200,0..24&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Nunito", sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #F9FC67;
}

::selection {
    color: #fff;
    background: #53f0e3;
}

.wrapper {
    width: 380px;
    padding-left: 10px;
    padding-right: 10px;
    background: #fff;
    border-radius: 2rem;
    text-align: center;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);
}

.wrapper header span{
    color: #e5ff00;
}
.wrapper header {
    font-size: 35px;
    font-weight: 700;
    display: ;
    padding-top: 40px;
}

.wrapper form {
    margin: 40px 0;
    padding-left: 20px;
    padding-right: 20px;

}

form .field {
    width: 100%;
    margin-bottom: 20px;
}

form .field.shake {
    animation: shake 0.3s ease-in-out;
}

@keyframes shake {
    0%,
    100% {
        margin-left: 0px;
    }
    20%,
    80% {
        margin-left: -12px;
    }
    40%,
    60% {
        margin-left: 12px;
    }
}

form .field .input-area {
    height: 50px;
    width: 100%;
    position: relative;
}

form input {
    width: 100%;
    height: 100%;
    outline: none;
    padding: 0 45px;
    font-size: 18px;
    background: none;
    caret-color: #e5ff00;
    border-radius: 1rem;
    border: 1px solid #bfbfbf;
    border-bottom-width: 2px;
    transition: all 0.2s ease;
}

form .field input:focus,
form .field.valid input {
    border-color: #fbff00;
}

form .field.shake input,
form .field.error input {
    border-color: #dc3545;
}

.field .input-area i {
    position: absolute;
    top: 50%;
    font-size: 18px;
    pointer-events: none;
    transform: translateY(-50%);
}

.input-area .icon {
    left: 15px;
    color: #bfbfbf;
    transition: color 0.2s ease;
}

.input-area .error-icon {
    right: 15px;
    color: #dc3545;
}

form input:focus~.icon,
form .field.valid .icon {
    color: #fbff00;
}

form .field.shake input:focus~.icon,
form .field.error input:focus~.icon {
    color: #bfbfbf;
}

form input::placeholder {
    color: #bfbfbf;
    font-size: 17px;
}

form .field .error-txt {
    color: #dc3545;
    text-align: left;
    margin-top: 5px;
}

form .field .error {
    display: none;
}

form .field.shake .error,
form .field.error .error {
    display: block;
}

form .pass-txt {
    text-align: left;
    margin-top: -10px;
}

.wrapper a {
    color: #5372F0;
    text-decoration: none;
}

.wrapper a:hover {
    text-decoration: none;
    color: #30548A;
    
}

form input[type="submit"] {
    height: 50px;
    margin-top: 30px;
    color: #fff;
    padding: 0;
    border: none;
    background: #DAB618;
    cursor: pointer;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

form input[type="submit"]:hover {
    background: #E3E352 ;
    color: black;
    font-weight: 600;
}
.kembali i{
    color: black;
    display: inline;
    font-size: 2rem
}
.kembali{
    font-size: 1rem;
    display: inline;
  display: flex;
  width: 35%;
  margin: 20px 10px;

}
    </style>
    <div class="wrapper">
        <header></i></a>Login <span>Form</span></header>
        <br>
        <hr >
        <?= $this->session->flashdata('massage'); ?>

        <form action="<?=base_url('homepage/index')?>" method="post">
            <div class="field">
                <div class="input-area">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                    <i class="icon fas fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Username can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <br>
            <hr>
            <input type="submit" name="login" value="login">
            <a class="kembali" href="<?=base_url('home')?>">kembali</a>
        </form>
    </div>

    <script>
        const form = document.querySelector("form");
eField = form.querySelector(".email"),
    eInput = eField.querySelector("input"),
    pField = form.querySelector(".password"),
    pInput = pField.querySelector("input");

form.onsubmit = (e) => {
    e.preventDefault();

    (eInput.value == "") ? eField.classList.add("shake", "error"): checkEmail();
    (pInput.value == "") ? pField.classList.add("shake", "error"): checkPass();

    setTimeout(() => {
        eField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    eInput.onkeyup = () => { checkEmail(); }
    pInput.onkeyup = () => { checkPass(); }

    function checkEmail() {
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!eInput.value.match(pattern)) {
            eField.classList.add("error");
            eField.classList.remove("valid");
            let errorTxt = eField.querySelector(".error-txt");

            (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address": errorTxt.innerText = "Email can't be blank";
        } else {
            eField.classList.remove("error");
            eField.classList.add("valid");
        }
    }

    function checkPass() {
        if (pInput.value == "") {
            pField.classList.add("error");
            pField.classList.remove("valid");
        } else {
            pField.classList.remove("error");
            pField.classList.add("valid");
        }
    }

    if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
        window.location.href = form.getAttribute("action");
    }
}
    </script>

</body>

</html>