<?php $page='contactus'; ?>
<?php include('includes/site-header.php') ?>

<main class="site-content">

    <div class="subpage-banner-style2">
        <picture class="subpage-banner-style2__bg-image-wrapper">
            <source media="(min-width: 992px)" width="600" height="200"
                srcset="assets/images/contact-us-banner-lg.webp">
            <source media="(min-width: 768px)" width="768" height="200"
                srcset="assets/images/contact-us-banner-md.webp">
            <img src="assets/images/contact-us-banner-xs.webp" alt="products-banner" width="320" height="200"
                class="img subpage-banner-style2__bg-image">
        </picture>
        <div class="subpage-banner-style2__content">
            <h2 class="subpage-banner-style2__content-heading">Contact Us</h2>
        </div>

        <div class="subpage-banner-style2__bg">
            <div class="subpage-banner-style2__bg-strip1"></div>
            <div class="subpage-banner-style2__bg-strip2"></div>
            <div class="subpage-banner-style2__bg-strip3">
            </div>
        </div>
    </div>

    <div class="breadcrumbs container">
        <ul class="breadcrumbs__ul">
            <li class="breadcrumbs__li">
                <a href="index.php" class="breadcrumbs__a">Home</a>
            </li>
            <li class="breadcrumbs__li">Contact Us</li>
        </ul>
    </div>

    <div class="contact-us content-section">
        <div class="contact-us__container container">
            <div class="contact-us__col1">
                <h5 class="contact-us__col1-heading">Get in Touch with Us</h5>
                <div class="contact-us__items-wrapper">
                    <div class="contact-us__items">
                        <img src="assets/images/contact-us-map-icon.svg" alt="contact-us-map-icon"
                            class="contact-us__items-icon">
                        <div class="contact-us__items-text">
                            <b>Aeeco Trading Pvt. Ltd.</b><br>
                            7/608, AEECO House, Udayamperoor, <br>
                            South Paravoor, Kerala-682307<br>
                        </div>
                    </div>
                    <div class="contact-us__items">
                        <img src="assets/images/contact-us-whatsapp-icon.svg" alt="contact-us-whatsapp-icon"
                            class="contact-us__items-icon">
                        <div class="contact-us__items-links-wrapper">
                            <a href="+919747317773" class="contact-us__items-link">+91-9747317773</a>
                        </div>
                    </div>
                    <div class="contact-us__items">
                        <img src="assets/images/contact-us-mail-icon.svg" alt="contact-us-mail-icon"
                            class="contact-us__items-icon">
                        <div class="contact-us__items-links-wrapper">
                            <a href="mailto:info@aeeco.in" class="contact-us__items-link">info@aeeco.in</a>
                        </div>
                    </div>
                    <div class="contact-us__items">
                        <img src="assets/images/contact-us-phone-icon.svg" alt="contact-us-phone-icon"
                            class="contact-us__items-icon">
                        <div class="contact-us__items-links-wrapper">
                            <a href="9104842977130" class="contact-us__items-link">+91-0484-2977130</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-us__col2">
                <h5 class="contact-us__col2-heading">Leave your comments here, we'll get back to you shortly</h5>

                <form class="form aeeco-contact-form" name='myform' id="frmcontactus"
                    onsubmit="contact(); return false;" novalidate>

                    <div class="form__row aeeco-contact-form__row1">
                        <div class="form__col aeeco-contact-form__row1-col1">
                            <div class="form__field-container">
                                <input type="text" class="form__input-text input" placeholder="Name" id="name"
                                    name="name">
                                <div class='validation'>Please enter Name</div>
                                <div class='validation'>Please enter a Valid Name</div>
                            </div>
                        </div>
                    </div>

                    <div class="form__row aeeco-contact-form__row2">
                        <div class="form__col aeeco-contact-form__row2-col1">
                            <div class="form__field-container">
                                <input type="email" class="form__input-text" placeholder="E-mail" required id="email"
                                    name="email">
                                <div class='validation'>Please enter E-mail</div>
                                <div class='validation'>Please enter a Valid E-mail</div>
                            </div>
                        </div>

                        <div class="form__col aeeco-contact-form__row2-col1">
                            <div class="form__field-container">
                                <input type="text" class="form__input-text" placeholder="Phone No" id="phonenumber"
                                    name="phonenumber">
                                <div class='validation'>Please enter the Number</div>
                                <div class='validation'>Please enter a Valid Number</div>
                                <div class='validation'>Phone Number required minimum 6 Nos</div>
                            </div>
                        </div>
                    </div>

                    <div class="form__row aeeco-contact-form__row3">
                        <div class="form__col aeeco-contact-form__row3-col">
                            <textarea class="form__input-textarea" name="message" id="message" cols="30" rows="7"
                                placeholder="Message"></textarea>
                            <div id="validation" class='validation'>Please enter Message</div>
                        </div>
                    </div>

                    <div class="form__submit-wrapper">
                        <button class="form__submit btn1 aeeco-contact-form__submit" type="submit" name="btnsend"
                            id="btnsend">Submit</button>
                        <div class="loader"></div>
                    </div>

                    <div class="response-wrapper">
                        <div class="response"></div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>

<?php include('includes/site-footer.php') ?>

<script>
function contact() {
    // alert('hi');
    let inputs = document.getElementsByClassName('input');
    for (i = 0; i < inputs.length; i++) {
        if (inputs[i].value === '') {
            inputs[i].nextElementSibling.classList.add('show');
        } else {
            inputs[i].nextElementSibling.classList.remove('show');
        }
    }

    // ------------------ validation for Name ----------------------- //   

    let name = document.getElementById('name');
    let namevalue = name.value;
    if (namevalue == '') {
        name.nextElementSibling.classList.add('show');
        name.nextElementSibling.nextElementSibling.classList.remove('show');
        document.myform.name.focus();
        return false;
    } else if (!isNaN(namevalue)) {
        name.nextElementSibling.nextElementSibling.classList.add('show');
        name.nextElementSibling.classList.remove('show');
        document.myform.name.focus();
        return false;
    } else {
        name.nextElementSibling.nextElementSibling.classList.remove('show');
        name.nextElementSibling.classList.remove('show');
    }

    // ------------------ validation for email ----------------------- //    

    let emailfilter = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i // regexp to check email
    let checkemail = emailfilter.test(document.myform.email.value); // setting the email field to validate

    let email = document.getElementById('email');
    let emailvalue = email.value;
    if (emailvalue === "") {
        email.nextElementSibling.classList.add('show');
        email.nextElementSibling.nextElementSibling.classList.remove('show');
        document.myform.email.focus();
        return false;
    } else if (checkemail == false) {
        email.nextElementSibling.nextElementSibling.classList.add('show');
        email.nextElementSibling.classList.remove('show');
        document.myform.email.focus();
        return false;
    } else {
        email.nextElementSibling.classList.remove('show');
        email.nextElementSibling.nextElementSibling.classList.remove('show');
    }


    // ------------------ validation for phone number ----------------------- //   	

    let phonenumber = document.getElementById('phonenumber');
    let phonenumbervalue = phonenumber.value;
    if (phonenumbervalue == '') {
        phonenumber.nextElementSibling.classList.add('show');
        phonenumber.nextElementSibling.nextElementSibling.classList.remove('show');
        phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');
        document.myform.phonenumber.focus();
        return false;
    } else if (isNaN(phonenumbervalue)) {
        phonenumber.nextElementSibling.nextElementSibling.classList.add('show');
        phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');
        phonenumber.nextElementSibling.classList.remove('show');
        document.myform.phonenumber.focus();
        return false;
    } else if (phonenumbervalue.length < 6) {
        phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.add('show');
        phonenumber.nextElementSibling.nextElementSibling.classList.remove('show');
        phonenumber.nextElementSibling.classList.remove('show');
        document.myform.phonenumber.focus();
        return false;
    } else {
        phonenumber.nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('show');
        phonenumber.nextElementSibling.nextElementSibling.classList.remove('show');
        phonenumber.nextElementSibling.classList.remove('show');
    }
    // ------------------ message ------------------ //
    let message = document.getElementById('message');
    let messagevalue = message.value;

    document.querySelector('.loader').style.display = 'block'; // Showing the Loader after submit

    // ------------------ Ajax Request Starts ------------------ //

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "mailer/contact-mailer.php", true);
    let data = new FormData();

    data.append('name', namevalue);
    data.append('email', emailvalue);
    data.append('phonenumber', phonenumbervalue);
    data.append('message', messagevalue);

    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.querySelector('.loader').style.display = 'none'; // hiding the Loader after Success Result	
            document.querySelector('.response').classList.add('show'); // showing response of Success Result	
            document.myform.reset() // resetting name field of form	
            document.querySelector('.response').innerHTML = this.responseText; // showing result
            setTimeout(function() {
                document.querySelector('.response').classList.remove('show')
            }, 10000); // hiding the Response after few seconds
        }
    };
    xhr.send(data);

}
</script>

<!-- Main JS-->
<script type="module" src="assets/js/scripts.js"></script>
</body>

</html>